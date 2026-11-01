<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Cart;

class CartController extends Controller
{
    private Cart $cart;

    public function __construct()
    {
        $this->cart = new Cart();
    }

    // Показать страницу корзины
    public function index(): void
    {
        $items = $this->cart->getItems();
        $total = $this->cart->getTotalSum();

        $this->render('cart', [
            'title' => 'Корзина',
            'items' => $items,
            'total' => $total
        ]);
    }

    // Добавить товар в корзину (вызывается через AJAX или обычным POST)
    public function add(): void
    {
        $productId = (int)($_POST['product_id'] ?? 0);

        if ($productId > 0) {
            $this->cart->add($productId);
        }

        // Если запрос был AJAX, возвращаем JSON (для красивого добавления без перезагрузки)
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'success', 'count' => $this->cart->getTotalCount()]);
            exit;
        }

        // Если обычная форма — редирект на страницу корзины
        header('Location: /cart');
        exit;
    }

    // Удалить товар из корзины
    public function remove(): void
    {
        $productId = (int)($_POST['product_id'] ?? 0);

        if ($productId > 0) {
            $this->cart->remove($productId);
        }

        header('Location: /cart');
        exit;
    }
}
