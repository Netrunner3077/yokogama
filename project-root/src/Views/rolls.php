<?php
$title = 'Роллы';
$breadcrumbs = [
    'Главная' => '/#hd',
    'Роллы' => null // null означает, что ссылки нет (текущая страница)
];
require __DIR__ . '/layouts/header.php';
?>

<main class="container">
    <h2>Роллы</h2>
    <div class="japanese-title">巻物</div>

    <table class="catalog">
        <?php foreach ($products as $product): ?>
            <tr>
                <td><img src="<?= htmlspecialchars($product['image_path']) ?>" alt="<?= htmlspecialchars($product['name']) ?>"></td>
                <td>
                    <h3><?= htmlspecialchars($product['name']) ?></h3>
                    <p><?= htmlspecialchars($product['description']) ?></p>
                    <p class="price"><?= (int)$product['price'] ?>&#8381;</p>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>

<?php require __DIR__ . '/layouts/footer.php'; ?>