<?php
$isHome = true;
$title = 'Главная';
require __DIR__ . '/layouts/header.php';
?>

<!-- Уникальная шапка для главной страницы -->
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

<?php if (isset($_GET['success'])): ?>
    <div class="container" style="margin-top: 20px;">
        <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 8px; text-align: center; border: 1px solid #c3e6cb;">
            <?= $_GET['success'] === 'booking' ? 'Столик успешно забронирован! Мы ждем вас.' : 'Заказ успешно оформлен! Мы свяжемся с вами.' ?>
        </div>
    </div>
<?php endif; ?>

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
            <li>Безалкогольные напитки <img src="/img/drink.jpg" alt="Напитки" style="height: 20px; vertical-align: middle;">:
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

<?php require __DIR__ . '/layouts/footer.php'; ?>