<?php
$title = 'Заказ столика';
$breadcrumbs = [
    'Главная' => '/#hd',
    'Заказ столика' => null // null означает, что ссылки нет (текущая страница)
];
require __DIR__ . '/layouts/header.php';
?>

<main class="container">
    <h2>Заказ столика</h2>
    <div class="japanese-title">席の予約</div>

    <div class="booking-info mb-20">
        <p><img src="/img/icons/japan-flag.svg" class="icon" alt="Акция"> Забронируйте столик онлайн и получите
            complimentary зеленый чай для всей компании!</p>
    </div>

    <form action="mailto:order@yokogama.ru" method="post" enctype="text/plain" class="fade-in">
        <p>
            <label for="name">Как к Вам обращаться?</label>
            <input type="text" name="name" id="name" required value="Ivan Ivanovich" placeholder="Введите ваше имя">
        </p>
        <p>
            <label for="phone">По какому телефону Вам перезвонить?</label>
            <input type="tel" name="phone" id="phone" required value="8 (123) 456-78-90"
                placeholder="+7 (XXX) XXX-XX-XX" pattern="[\+]\d{1}\s?[\(]\d{3}[\)]\s?\d{3}[\-]\d{2}[\-]\d{2}">
        </p>
        <p>
            <label for="email">Электронная почта</label>
            <input type="email" name="email" id="email" placeholder="your@email.com">
        </p>
        <p>
            <label for="date">На какую дату?</label>
            <input type="date" name="date" id="date" required>
        </p>
        <p>
            <label for="time">На какое время желаете заказать столик?</label>
            <input type="time" name="time" id="time" required value="18:00">
        </p>
        <fieldset>
            <legend><img src="/img/icons/japanese-dolls.svg" class="icon" alt="Соцсети"> Укажите сведения о Вас и
                Вашей компании</legend>
            <p>
                <label>На сколько человек заказывается столик?</label><br>
                <input type="radio" name="cnt" id="cnt1" value="1">
                <label for="cnt1" style="display: inline; font-weight: normal;">1</label>&nbsp;&nbsp;&nbsp;

                <input type="radio" name="cnt" id="cnt2" value="2" checked>
                <label for="cnt2" style="display: inline; font-weight: normal;">2</label>&nbsp;&nbsp;&nbsp;

                <input type="radio" name="cnt" id="cnt3" value="more">
                <label for="cnt3" style="display: inline; font-weight: normal;">3 и более</label>
            </p>
            <p>
                <input type="checkbox" name="children" id="children" value="*">
                <label for="children" style="display: inline; font-weight: normal;">Среди клиентов будут
                    дети</label>
            </p>
            <p>
                <input type="checkbox" name="special_occasion" id="special_occasion" value="*">
                <label for="special_occasion" style="display: inline; font-weight: normal;">Особый повод (день
                    рождения, 周年記念日など)</label>
            </p>
        </fieldset>
        <p>
            <label for="comments">特別なご要望がございましたら、こちらにご記入ください</label>
            <textarea name="comments" id="comments" rows="4" placeholder="特別なリクエストやアレルギーなど..."></textarea>
        </p>
        <p><input type="submit" value="Забронировать столик"></p>
    </form>
</main>

<?php require __DIR__ . '/layouts/footer.php'; ?>