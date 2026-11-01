<?php
$title = 'Заказ еды на вынос';
$breadcrumbs = [
    'Главная' => '/#hd',
    'Заказ еды на вынос' => null // null означает, что ссылки нет (текущая страница)
];
require __DIR__ . '/layouts/header.php';
?>

<main class="container">
    <h2>Заказ еды на вынос</h2>
    <div class="japanese-title">テイクアウト</div>

    <div class="delivery-info mb-20">
        <p><img src="/img/icons/lantern.svg" class="icon" alt="Доставка"> Бесплатная доставка при заказе от 1000
            рублей! Время доставки: 45-60 минут.</p>
        <p><img src="/img/icons/japan-flag.svg" class="icon" alt="Акция"> Все блюда аккуратно упаковываются с
            соблюдением температурного режима.</p>
    </div>

    <form action="mailto:order@yokogama.ru" method="post" enctype="text/plain" class="fade-in">
        <p>
            <label for="dishes">Что желаете заказать? (Для выбора нескольких блюд используйте
                Ctrl+Click)</label><br>
            <select name="dishes" id="dishes" size="8" multiple>
                <img src="/img/icons/japan-flag.svg" class="icon" alt="Акция">
                <optgroup label="Сашими">
                    <option value="unagi">Унаги - 340 руб.</option>
                    <option value="hamachi">Хамачи - 400 руб.</option>
                </optgroup>
                <img src="/img/icons/sushi.svg" class="icon" alt="Суши">
                <optgroup label="Суши">
                    <option value="chukka">Чукка - 40 руб.</option>
                    <option value="maguro">Магуро - 80 руб.</option>
                    <option value="tobiko">Тобико - 80 руб.</option>
                </optgroup>
                <img src="/img/icons/rolls.svg" class="icon" alt="Роллы">
                <optgroup label="Роллы">
                    <option value="kunsei_batakon">Кунсэй батакон - 360 руб.</option>
                    <option value="arigato">Аригато - 360 руб.</option>
                    <option value="mексиканский">Мексиканский - 360 руб.</option>
                </optgroup>
            </select>
        </p>
        <p>
            <label for="address">Адрес доставки</label>
            <input type="text" name="address" id="address" required placeholder="Улица, дом, квартира">
        </p>
        <p>
            <label for="phone">Контактный телефон</label>
            <input type="tel" name="phone" id="phone" required value="8 (123) 456-78-90"
                placeholder="+7 (XXX) XXX-XX-XX">
        </p>
        <p>
            <label for="delivery_time">Желаемое время доставки</label>
            <input type="time" name="delivery_time" id="delivery_time">
        </p>
        <fieldset>
            <legend><img src="/img/icons/confetti.svg" class="icon" alt="Опции"> Дополнительные опции</legend>
            <p>
                <input type="checkbox" name="chopsticks" id="chopsticks" value="*" checked>
                <label for="chopsticks" style="display: inline; font-weight: normal;">Добавить палочки и соевый
                    соус</label>
            </p>
            <p>
                <input type="checkbox" name="ginger" id="ginger" value="*" checked>
                <label for="ginger" style="display: inline; font-weight: normal;">Добавить маринованный имбирь и
                    васаби</label>
            </p>
            <p>
                <input type="checkbox" name="utensils" id="utensils" value="*">
                <label for="utensils" style="display: inline; font-weight: normal;">Добавить одноразовые
                    приборы</label>
            </p>
        </fieldset>
        <p>
            <label for="notes">特別なご要望がございましたら、こちらにご記入ください</label>
            <textarea name="notes" id="notes" rows="3"
                placeholder="Аллергии, особые пожелания по приготовлению..."></textarea>
        </p>
        <p><input type="submit" value="Заказать доставку"></p>
    </form>

    <div class="contact-info mt-20">
        <h3><img src="/img/icons/phone.svg" class="icon" alt="Телефон">Также вы можете заказать по телефону:</h3>
        <p style="font-size: 18pt; font-weight: bold; color: var(--primary-color);">+7 (495) 123-45-67</p>
        <p>Круглосуточно, без выходных!</p>
    </div>
</main>

<?php require __DIR__ . '/layouts/footer.php'; ?>