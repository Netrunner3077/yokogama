<?php
// src/Controllers/PageController.php

namespace App\Controllers;

use App\Core\Controller;

class PageController extends Controller
{
    public function home(): void
    {
        $this->render('home', ['title' => 'Главная']);
    }

    public function sashimi(): void
    {
        $this->render('sashimi', ['title' => 'Сашими']);
    }

    public function sushi(): void
    {
        $this->render('sushi', ['title' => 'Суши']);
    }

    public function rolls(): void
    {
        $this->render('rolls', ['title' => 'Роллы']);
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
