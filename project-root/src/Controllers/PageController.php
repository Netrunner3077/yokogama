<?php
// src/Controllers/PageController.php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;

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
}
