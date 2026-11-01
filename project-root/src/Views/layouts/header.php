<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- Динамический заголовок страницы -->
    <title><?= isset($title) ? $title . ' :: ' : '' ?>Йокогама: суши-бар</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <meta name="description" content="Суши-бар Йокогама. Сашими, суши, роллы, напитки">
    <meta name="keywords" content="суши-бар, Йокогама, сашими, суши, ролл">
    <meta name="author" content="Читатель">
</head>

<body>
    <!-- Фиксированная навигация -->
    <nav id="mainNav">
        <a href="/#hd" class="nav-brand"><img src="/img/icons/torii-gate.svg" class="nav-icon" alt="Логотип"> Йокогама</a>

        <div class="nav-full">
            <a href="/#hd">Главная</a>
            <a href="/sashimi">Сашими</a>
            <a href="/sushi">Суши</a>
            <a href="/rolls">Роллы</a>
            <a href="/pricelist">Прайс-лист</a>
            <a href="/order">Заказ столика</a>
            <a href="/takeaway">Еда на вынос</a>
        </div>

        <div class="nav-dropdown">
            <button class="nav-toggle" id="navToggle">
                <span class="nav-icon">&equiv;</span>
                <span class="nav-close">&#65794;</span>
            </button>
            <div class="nav-menu" id="navMenu">
                <a href="/#hd" class="nav-link">Главная</a>
                <a href="/sashimi" class="nav-link">Сашими</a>
                <a href="/sushi" class="nav-link">Суши</a>
                <a href="/rolls" class="nav-link">Роллы</a>
                <a href="/pricelist" class="nav-link">Прайс-лист</a>
                <a href="/order" class="nav-link">Заказ столика</a>
                <a href="/takeaway" class="nav-link">Еда на вынос</a>
            </div>
        </div>
    </nav>

    <div class="nav-overlay" id="navOverlay"></div>

    <!-- Универсальная шапка для внутренних страниц (если это не главная) -->
    <?php if (!isset($isHome) || !$isHome): ?>
        <header>
            <section class="container">
                <div class="pos1"><img src="/img/sushi.jpg" alt="Суши-бар Йокогама"></div>
                <div class="pos2">
                    <h1>Йокогама</h1>
                </div>
                <div class="pos3">
                    <h1>Суши-бар</h1>
                </div>
            </section>
        </header>
    <?php endif; ?>

    <!-- Хлебные крошки -->
    <?php if (!empty($breadcrumbs)): ?>
        <div class="breadcrumbs">
            <nav>
                <?php foreach ($breadcrumbs as $name => $url): ?>
                    <?php if ($url): ?>
                        <a href="<?= $url ?>"><?= $name ?></a>
                    <?php else: ?>
                        <div><?= $name ?></div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </nav>
        </div>
    <?php endif; ?>