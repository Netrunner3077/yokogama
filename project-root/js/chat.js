class ChatBot {
    constructor() {
        this.faq = [
            {
                question: "Какие способы оплаты вы принимаете?",
                answer: "Мы принимаем банковские карты (Visa, Mastercard, Мир), электронные кошельки (ЮMoney, Qiwi), и банковские переводы."
            },
            {
                question: "Как долго обрабатывается заказ?",
                answer: "Обработка заказа занимает от 1 до 24 часов. В выходные дни обработка может занять больше времени."
            },
            {
                question: "Есть ли доставка в мой город?",
                answer: "Доставка осуществляется по всей России. Сроки и стоимость доставки зависят от вашего местоположения."
            },
            {
                question: "Как вернуть товар?",
                answer: "Для возврата товара обратитесь в нашу службу поддержки в течение 14 дней с момента получения заказа."
            },
            {
                question: "Где посмотреть статус заказа?",
                answer: "Статус заказа можно посмотреть в личном кабинете или отследить по трек-номеру, который мы высылаем на email."
            },
            {
                question: "Какие у вас часы работы?",
                answer: "Мы работаем с 12:00 до 22:00 ежедневно. В выходные с 14:00 до 20:00."
            },
            {
                question: "Есть ли веганские блюда?",
                answer: "Да, у нас есть специальное веганское меню с роллами и салатами."
            }
        ];

        this.initializeElements();
        this.setupEventListeners();
        this.showQuickQuestions();
    }

    initializeElements() {
        this.chatMessages = document.getElementById('chatMessages');
        this.userInput = document.getElementById('userInput');
        this.sendButton = document.getElementById('sendButton');
        this.quickQuestions = document.getElementById('quickQuestions');
        this.modal = document.getElementById('messengerModal');
        this.closeModal = document.querySelector('.close');
    }

    setupEventListeners() {
        this.sendButton.addEventListener('click', () => this.handleUserMessage());
        this.userInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                this.handleUserMessage();
            }
        });

        this.closeModal.addEventListener('click', () => {
            this.modal.style.display = 'none';
        });

        window.addEventListener('click', (e) => {
            if (e.target === this.modal) {
                this.modal.style.display = 'none';
            }
        });

        // Обработчики для кнопок мессенджеров
        document.querySelectorAll('.messenger-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const type = e.target.classList[1];
                this.redirectToMessenger(type);
            });
        });
    }

    showQuickQuestions() {
        this.quickQuestions.innerHTML = '';
        // Показываем только первые 4 вопроса для компактности
        this.faq.slice(0, 4).forEach((item, index) => {
            const button = document.createElement('button');
            button.className = 'quick-question';
            button.textContent = item.question;
            button.addEventListener('click', () => {
                this.userInput.value = item.question;
                this.handleUserMessage();
            });
            this.quickQuestions.appendChild(button);
        });
    }

    handleUserMessage() {
        const message = this.userInput.value.trim();
        if (!message) return;

        this.addMessage(message, 'user');
        this.userInput.value = '';

        // Имитация задержки ответа
        setTimeout(() => {
            this.processMessage(message);
        }, 1000);
    }

    processMessage(message) {
        const foundFAQ = this.faq.find(item => 
            item.question.toLowerCase().includes(message.toLowerCase()) ||
            message.toLowerCase().includes(item.question.toLowerCase())
        );

        if (foundFAQ) {
            this.addMessage(foundFAQ.answer, 'bot');
        } else {
            this.addMessage("Извините, я не нашел ответ на ваш вопрос. Давайте соединим вас со специалистом!", 'bot');
            setTimeout(() => {
                this.showMessengerModal();
            }, 1500);
        }
    }

    addMessage(text, type) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${type}-message`;
        
        const contentDiv = document.createElement('div');
        contentDiv.className = 'message-content';
        contentDiv.textContent = text;
        
        messageDiv.appendChild(contentDiv);
        this.chatMessages.appendChild(messageDiv);
        
        // Прокрутка к последнему сообщению
        this.chatMessages.scrollTop = this.chatMessages.scrollHeight;
    }

    showMessengerModal() {
        this.modal.style.display = 'flex';
    }

    redirectToMessenger(type) {
        let url = '';
        switch(type) {
            case 'telegram':
                url = 'https://t.me/yokogama_support';
                break;
            case 'whatsapp':
                url = 'https://wa.me/74951234567';
                break;
            case 'viber':
                url = 'viber://chat?number=%2B74951234567';
                break;
        }
        window.open(url, '_blank');
        this.modal.style.display = 'none';
    }
}

// Инициализация чат-бота при загрузке страницы
document.addEventListener('DOMContentLoaded', () => {
    new ChatBot();
});