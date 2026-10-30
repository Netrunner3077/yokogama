console.log('Скрипты суши-бара "Йокогама" загружены');

// Обработка ошибок
window.addEventListener('error', function(e) {
    console.error('Произошла ошибка:', e.error);
});

// Основные скрипты для сайта
document.addEventListener('DOMContentLoaded', function() {
    // Скрипт для фиксированной навигации
    const mainNav = document.getElementById('mainNav');
    if (mainNav) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                mainNav.classList.add('scrolled');
            } else {
                mainNav.classList.remove('scrolled');
            }
        });
    }

    // Плавная прокрутка для якорных ссылок
    document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Анимация для лепестков сакуры
    function createSakuraPetals() {
        const petalsContainer = document.querySelector('.booking-masterpiece');
        if (!petalsContainer) return;
        
        for (let i = 0; i < 12; i++) {
            const petal = document.createElement('div');
            petal.className = 'sakura-petal';
            petal.style.left = Math.random() * 100 + '%';
            petal.style.animationDelay = Math.random() * 3 + 's';
            petal.style.animationDuration = (3 + Math.random() * 2) + 's';
            petalsContainer.appendChild(petal);
        }
    }

    createSakuraPetals();
    
    // Добавляем интерактивность кнопке бронирования
    const bookingButton = document.querySelector('.booking-button');
    if (bookingButton) {
        bookingButton.addEventListener('mouseenter', function() {
            this.style.animationPlayState = 'paused';
        });
        
        bookingButton.addEventListener('mouseleave', function() {
            this.style.animationPlayState = 'running';
        });
    }

    // Управление выпадающим меню
    initializeNavigationMenu();
    
    // Инициализация чат-бота
    initializeChatBot();
});

// Функция для инициализации выпадающего меню
function initializeNavigationMenu() {
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    
    if (navToggle && navMenu) {
        // Открытие/закрытие меню по клику
        navToggle.addEventListener('click', function() {
            const isActive = this.classList.contains('active');
            
            if (isActive) {
                this.classList.remove('active');
                navMenu.classList.remove('active');
            } else {
                this.classList.add('active');
                navMenu.classList.add('active');
            }
        });
        
        // Закрытие меню при клике на ссылку
        navMenu.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });
        
        // Закрытие меню при клике вне его области
        document.addEventListener('click', function(e) {
            if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });
        
        // Закрытие меню при изменении размера окна (на десктоп)
        window.addEventListener('resize', function() {
            if (window.innerWidth > 950) {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });
    }
}

// Функция для инициализации чат-бота
function initializeChatBot() {
    const chatToggle = document.getElementById('chatToggle');
    const chatContainer = document.getElementById('chatContainer');
    
    if (chatToggle && chatContainer) {
        chatToggle.addEventListener('click', function() {
            chatContainer.classList.toggle('chat-open');
            this.classList.toggle('chat-active');
        });
    }
}

// Функция для открытия чата
function openChat() {
    window.open('../html/chat.html', 'chat', 'width=400,height=600,menubar=no,toolbar=no,location=no');
}