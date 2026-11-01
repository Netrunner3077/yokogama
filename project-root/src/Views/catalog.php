<?php
$title = 'Каталог';
$breadcrumbs = ['Главная' => '/#hd', 'Каталог' => null];
require __DIR__ . '/layouts/header.php';
?>

<main class="container">
    <h2>Каталог блюд</h2>
    <div class="japanese-title">メニュー</div>

    <!-- Фильтры по категориям -->
    <div class="catalog-filters" style="margin-bottom: 30px; display: flex; gap: 10px; flex-wrap: wrap;">
        <a href="/catalog" class="booking-button" style="font-size: 14pt; padding: 10px 20px; <?= !$currentCategory ? 'background: #2c5530;' : '' ?>">
            Все блюда
        </a>
        <?php foreach ($categories as $cat): ?>
            <a href="/catalog?category=<?= $cat['slug'] ?>" class="booking-button" style="font-size: 14pt; padding: 10px 20px; <?= $currentCategory === $cat['slug'] ? 'background: #2c5530;' : '' ?>">
                <?= htmlspecialchars($cat['name']) ?>
            </a>
        <?php endforeach; ?>
    </div>

    <!-- Сетка товаров -->
    <div class="grid grid-3">
        <?php if (empty($products)): ?>
            <p>В этой категории пока нет блюд.</p>
        <?php else: ?>
            <?php foreach ($products as $product): ?>
                <div class="catalog-card fade-in" style="border: 1px solid #ddd; border-radius: 10px; overflow: hidden; background: white; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
                    <img src="<?= htmlspecialchars($product['image_path']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 15px;">
                        <span style="color: #f8b500; font-size: 12px; text-transform: uppercase; font-weight: bold;">
                            <?= htmlspecialchars($product['category_name'] ?? '') ?>
                        </span>
                        <h3 style="margin: 10px 0; color: #bc002d;"><?= htmlspecialchars($product['name']) ?></h3>
                        <p style="font-size: 14px; color: #666; margin-bottom: 15px;"><?= htmlspecialchars($product['description']) ?></p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 20pt; font-weight: bold; color: #2c5530;"><?= (int)$product['price'] ?>&#8381;</span>
                            <!-- Кнопка "В корзину" (на будущее) или "Заказать" -->
                            <a href="/takeaway" class="booking-button" style="font-size: 12pt; padding: 8px 15px;">Заказать</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</main>

<?php require __DIR__ . '/layouts/footer.php'; ?>