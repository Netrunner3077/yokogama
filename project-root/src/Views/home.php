<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Йокогама: суши-бар</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <meta name="description" content="Суши-бар Йокогама. Сашими, суши, роллы, напитки">
    <meta name="keywords" content="суши-бар, Йогагама, сашими, суши, ролл">
    <meta name="author" content="Читатель">
    <meta name="generator" content="Блокнот">
</head>

<body>
    <!-- Фиксированная навигация -->
    <nav id="mainNav">
        <!-- Бренд/логотип -->
        <a href="#hd" class="nav-brand"><img src="/img/icons/torii-gate.svg" class="nav-icon"
                alt="Логотип">Йокогама</a>

        <!-- Полная навигация для десктопов -->
        <div class="nav-full">
            <a href="/#hd">Главная</a>
            <a href="/sashimi">Сашими</a>
            <a href="/sushi">Суши</a>
            <a href="/rolls">Роллы</a>
            <a href="/pricelist">Прайс-лист</a>
            <a href="/order">Заказ столика</a>
            <a href="/takeaway">Еда на вынос</a>
        </div>

        <!-- Выпадающее меню для мобильных -->
        <div class="nav-dropdown">
            <button class="nav-toggle" id="navToggle">
                <span class="nav-icon">&equiv;</span>
                <span class="nav-close">&#65794;</span>
            </button>
            <div class="nav-menu" id="navMenu">
                <a href="/#" class="nav-link">Главная</a>
                <a href="/sashimi" class="nav-link">Сашими</a>
                <a href="/sushi" class="nav-link">Суши</a>
                <a href="/rolls" class="nav-link">Роллы</a>
                <a href="/pricelist" class="nav-link">Прайс-лист</a>
                <a href="/order" class="nav-link">Заказ столика</a>
                <a href="/takeaway" class="nav-link">Еда на вынос</a>
            </div>
        </div>
    </nav>

    <!-- Оверлей для затемнения фона -->
    <div class="nav-overlay" id="navOverlay"></div>

    <header id="hd">
        <section class="container">
            <div class="pos1"><img src="/img/sushi.jpg" alt="Суши-бар Йокогама"></div>
            <div class="pos2">
                <h1>Йокогама</h1>
            </div>
            <div class="pos3">
                <h1>Суши-бар</h1>
            </div>
            <address>ул. Зелёной Рощи, 17.</address>
            <address>Часы работы: 12:00-22:00.</address>
            <div class="japanese-title">本格的な日本食</div>
        </section>
    </header>

    <main class="container">
        <article class="main-content fade-in">
            <h2 class="text-center">Добро пожаловать в суши-бар Йокогама!</h2>
            <p>У нас вы найдете аутентичные японские блюда, приготовленные с соблюдением традиционных рецептов:</p>
            <ul>
                <li>Сашими - свежайшие морепродукты</li>
                <li>Суши - классические и авторские</li>
                <li>Роллы - традиционные и современные</li>
                <li>Соусы - домашнего приготовления</li>
                <li><strong>Горячие блюда</strong> - темпура, террики и др.</li>
                <li>Безалкогольные напитки <img src="/img/drink.jpg" alt="Напитки"
                        style="height: 20px; vertical-align: middle;">:
                    <ul>
                        <li>Японский чай</li>
                        <li>Кофе по-восточному</li>
                        <li>Освежающий мате</li>
                    </ul>
                </li>
            </ul>

            <h3><img src="/img/icons/japan-flag.svg" class="icon" alt="Акция"> Участвуйте в нашей рекламной акции!</h3>
            <ol>
                <li>Посетите наш суши-бар между 16:00 и 19:00.</li>
            </ol>
            <div class="advertising">
                <div>Время действительно только для будних дней.</div>
                <div>В выходные — с 14:00 до 20:00.</div>
            </div>
            <ol start="2">
                <li>Купите три суши или ролла.</li>
                <li>Получите четвертый <span class="bigger">в подарок</span>!</li>
            </ol>

            <!-- Кнопка бронирования -->
            <div class="booking-masterpiece">
                <div class="sakura-petal"></div>
                <div class="sakura-petal"></div>
                <div class="sakura-petal"></div>
                <div class="sakura-petal"></div>
                <div class="sakura-petal"></div>
                <div class="sakura-petal"></div>
                <a href="/order" class="booking-button">
                    席を予約する
                </a>
            </div>
        </article>
    </main>

    <!-- Футер -->
    <footer id="ft">
        <div class="footer-content">
            <div class="footer-section">
                <h3><img src="/img/icons/torii-gate.svg" class="icon" alt="Логотип"> Контакты</h3>
                <div class="footer-contact">
                    <div class="contact-item">
                        <div class="contact-icon"><img src="/img/icons/map-pin.svg" class="icon" alt="Адрес"></div>
                        <div>
                            <strong>Адрес</strong><br>
                            ул. Зелёной Рощи, 17<br>
                            Москва, Россия
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon"><img src="/img/icons/phone.svg" class="icon" alt="Телефон"></div>
                        <div>
                            <strong>Телефон</strong><br>
                            +7 (495) 123-45-67
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon"><img src="/img/icons/envelope.svg" class="icon" alt="Email"></div>
                        <div>
                            <strong>Email</strong><br>
                            info@yokogama.ru
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-section">
                <h3><img src="/img/icons/clock.svg" class="icon" alt="Время"> Часы работы</h3>
                <div class="business-hours">
                    <div class="hours-row">
                        <span>Понедельник - Четверг</span>
                        <span>12:00 - 22:00</span>
                    </div>
                    <div class="hours-row">
                        <span>Пятница - Суббота</span>
                        <span>12:00 - 23:00</span>
                    </div>
                    <div class="hours-row">
                        <span>Воскресенье</span>
                        <span>12:00 - 21:00</span>
                    </div>
                </div>

                <h3 style="margin-top: 30px;"><img src="/img/icons/japanese-dolls.svg" class="icon" alt="Соцсети"> Мы в
                    соцсетях</h3>
                <div class="social-links">
                    <a href="#" class="social-link" title="Instagram"><img src="/img/icons/instagram.svg"
                            class="social-icon" alt="Instagram"></a>
                    <a href="#" class="social-link" title="Facebook"><img src="/img/icons/facebook.svg"
                            class="social-icon" alt="Facebook"></a>
                    <a href="#" class="social-link" title="Telegram"><img src="/img/icons/telegram.svg"
                            class="social-icon" alt="Telegram"></a>
                    <a href="#" class="social-link" title="VK"><img src="/img/icons/vk.svg" class="social-icon"
                            alt="VKontakte"></a>
                </div>
            </div>

            <div class="footer-section">
                <h3><img src="/img/icons/sushi.svg" class="icon" alt="Суши"> О нас</h3>
                <p>Суши-бар "Йокогама" - это место, где традиции встречаются с инновациями. Наши шеф-повара из Японии
                    готовят блюда по аутентичным рецептам.</p>

                <div class="booking-masterpiece" style="margin: 30px 0;">
                    <a href="/order" class="booking-button" style="font-size: 16pt;">
                        Забронировать стол
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 Суши-бар "Йокогама". Все права защищены.</p>
            <p>Сайт создан читателями книги &laquo;HTML и CSS&raquo;</p>
            <div class="japanese-title" style="writing-mode: horizontal-tb; margin-top: 15px; font-size: 14pt;">
                お待ちしております
            </div>
        </div>
    </footer>

    <!-- Кнопка чата -->
    <button class="chat-toggle" id="chatToggle" onclick="openChat()" title="Чат поддержки">
        <i class="fas fa-comments"></i>
    </button>

    <script src="/js/main.js"></script>
</body>

</html>