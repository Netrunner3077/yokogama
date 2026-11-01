<?php
// public/index.php

session_start(); // Запускаем сессии в PHP

// Включаем отображение ошибок для разработки
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Подключаем автозагрузчик
require_once __DIR__ . '/../src/autoload.php';

// Инициализируем роутер
use App\Core\Router;
use App\Controllers\CatalogController;
use App\Controllers\CartController;

$router = new Router();

// Определяем маршруты (URL => Controller@method)
$router->add('/', 'PageController@home');
$router->add('/sashimi', 'PageController@sashimi');
$router->add('/sushi', 'PageController@sushi');
$router->add('/rolls', 'PageController@rolls');
$router->add('/pricelist', 'PageController@pricelist');
$router->add('/order', 'PageController@order');
$router->add('/takeaway', 'PageController@takeaway');
$router->add('/chat', 'PageController@chat');
$router->add('/catalog', 'CatalogController@index');
$router->add('/process-order', 'PageController@processOrder');
$router->add('/process-takeaway', 'PageController@processTakeaway');
$router->add('/cart', 'CartController@index');
$router->add('/cart/add', 'CartController@add');
$router->add('/cart/remove', 'CartController@remove');

// Запускаем обработку текущего запроса
$router->dispatch($_SERVER['REQUEST_URI']);
