<?php
$title = 'Корзина';
$breadcrumbs = ['Главная' => '/#hd', 'Корзина' => null];
require __DIR__ . '/layouts/header.php';
?>

<main class="container">
    <h2>Ваша корзина</h2>
    <div class="japanese-title">買い物カゴ</div>

    <?php if (empty($items)): ?>
        <div style="text-align: center; padding: 50px 0;">
            <p style="font-size: 18pt; color: #666;">Ваша корзина пока пуста <img src="/img/icons/empty-cart.svg" class="icon" alt="Пусто"></p>
            <a href="/catalog" class="booking-button" style="margin-top: 20px; display: inline-block;">Перейти в каталог</a>
        </div>
    <?php else: ?>
        <table class="pricelist" style="width: 100%; margin-bottom: 30px;">
            <thead>
                <tr>
                    <th>Фото</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Кол-во</th>
                    <th>Сумма</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                    <tr>
                        <td><img src="<?= htmlspecialchars($item['image_path']) ?>" alt="<?= htmlspecialchars($item['name']) ?>" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px;"></td>
                        <td><strong><?= htmlspecialchars($item['name']) ?></strong></td>
                        <td><?= (int)$item['price'] ?> ₽</td>
                        <td><?= $item['quantity'] ?></td>
                        <td><?= (int)$item['total'] ?> ₽</td>
                        <td>
                            <form action="/cart/remove" method="POST" style="display: inline;">
                                <input type="hidden" name="product_id" value="<?= $item['id'] ?>">
                                <button type="submit" style="background: #f44336; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Удалить</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" style="text-align: right; font-weight: bold; font-size: 18pt;">Итого:</td>
                    <td colspan="2" style="font-weight: bold; font-size: 18pt; color: var(--primary-color);"><?= (int)$total ?> ₽</td>
                </tr>
            </tfoot>
        </table>

        <div style="text-align: right;">
            <a href="/takeaway" class="booking-button" style="font-size: 16pt;">Перейти к оформлению</a>
        </div>
    <?php endif; ?>
</main>

<?php require __DIR__ . '/layouts/footer.php'; ?>