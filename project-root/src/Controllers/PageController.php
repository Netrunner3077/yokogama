<?php
// src/Controllers/PageController.php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;
use App\Models\Booking;
use App\Models\Order;

class PageController extends Controller
{
    public function home(): void
    {
        $this->render('home', ['title' => 'Главная']);
    }

    public function sashimi(): void
    {
        $productModel = new Product();
        $products = $productModel->getByCategorySlug('sashimi');
        $this->render('sashimi', ['title' => 'Сашими', 'products' => $products]);
    }

    public function sushi(): void
    {
        $productModel = new Product();
        $products = $productModel->getByCategorySlug('sushi');
        $this->render('sushi', ['title' => 'Суши', 'products' => $products]);
    }

    public function rolls(): void
    {
        $productModel = new Product();
        $products = $productModel->getByCategorySlug('rolls');
        $this->render('rolls', ['title' => 'Роллы', 'products' => $products]);
    }

    public function pricelist(): void
    {
        $this->render('pricelist', ['title' => 'Прайс-лист']);
    }

    public function order(): void
    {
        $this->render('order', ['title' => 'Заказ столика']);
    }

    public function takeaway(): void
    {
        $this->render('takeaway', ['title' => 'Еда на вынос']);
    }

    public function chat(): void
    {
        $this->render('chat', ['title' => 'Чат-бот']);
    }

    public function processOrder(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /order');
            exit;
        }

        // В реальном проекте здесь нужна валидация (например, проверка телефона)
        $data = [
            'name' => trim($_POST['name'] ?? ''),
            'phone' => trim($_POST['phone'] ?? ''),
            'email' => trim($_POST['email'] ?? ''),
            'date' => $_POST['date'] ?? '',
            'time' => $_POST['time'] ?? '',
            'cnt' => (int)($_POST['cnt'] ?? 2),
            'comments' => trim($_POST['comments'] ?? '')
        ];

        $booking = new Booking();
        if ($booking->create($data)) {
            // Если успешно, редиректим на главную с флагом успеха
            header('Location: /?success=booking');
            exit;
        } else {
            die('Произошла ошибка при бронировании. Попробуйте позже.');
        }
    }

    public function processTakeaway(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /takeaway');
            exit;
        }

        $data = [
            'phone' => trim($_POST['phone'] ?? ''),
            'address' => trim($_POST['address'] ?? ''),
            'delivery_time' => $_POST['delivery_time'] ?? null,
        ];

        // Обрати внимание: в HTML для select нужно будет указать name="dishes[]"
        $items = $_POST['dishes'] ?? [];

        $order = new Order();
        if ($order->create($data, $items)) {
            header('Location: /?success=takeaway');
            exit;
        } else {
            die('Произошла ошибка при оформлении заказа. Попробуйте позже.');
        }
    }
}
