<?php
$title = 'Прайс-лист';
$breadcrumbs = [
    'Главная' => '/#hd',
    'Прайс-лист' => null // null означает, что ссылки нет (текущая страница)
];
require __DIR__ . '/layouts/header.php';
?>

<main class="container">
    <h2>Прайс-лист</h2>
    <div class="japanese-title">価格表</div>

    <div class="price-info mb-20">
        <p><img src="/img/icons/japan-flag.svg" class="icon" alt="Акция"> Все блюда готовятся из свежайших
            ингредиентов по традиционным японским рецептам.</p>
    </div>

    <table class="pricelist">
        <thead>
            <tr>
                <th>Товар</th>
                <th>Цена, руб.</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th colspan="2">Суши</th>
            </tr>
            <tr>
                <td>Чукка</td>
                <td>40</td>
            </tr>
            <tr>
                <td>Магуро</td>
                <td rowspan="2">80</td>
            </tr>
            <tr>
                <td>Тобико</td>
            </tr>
            <tr>
                <th colspan="2">Сашими</th>
            </tr>
            <tr>
                <td>Унаги</td>
                <td>340</td>
            </tr>
            <tr>
                <td>Хамачи</td>
                <td>400</td>
            </tr>
            <tr>
                <th colspan="2">Роллы</th>
            </tr>
            <tr>
                <td>Кунсэй батакон</td>
                <td rowspan="3">360</td>
            </tr>
            <tr>
                <td>Аригато</td>
            </tr>
            <tr>
                <td>Мексиканский</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">Всего 8 наименований</td>
            </tr>
        </tfoot>
    </table>

    <div class="special-offer mt-20">
        <h3><img src="/img/icons/japanese-dolls.svg" class="icon" alt="Соцсети"> Специальное предложение</h3>
        <p>При заказе от 1000 рублей — доставка бесплатно!</p>
        <p>Скидка 10% при предварительном заказе за 2 часа.</p>
    </div>
</main>

<?php require __DIR__ . '/layouts/footer.php'; ?>