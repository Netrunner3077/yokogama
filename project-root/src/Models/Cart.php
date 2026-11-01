<?php

namespace App\Models;

class Cart
{
    public function __construct()
    {
        // Если корзины нет, создаем пустую
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    }

    // Добавить товар (или увеличить количество, если он уже есть)
    public function add(int $productId, int $quantity = 1): void
    {
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId] += $quantity;
        } else {
            $_SESSION['cart'][$productId] = $quantity;
        }
    }

    // Удалить товар
    public function remove(int $productId): void
    {
        unset($_SESSION['cart'][$productId]);
    }

    // Получить все товары из корзины (с данными из БД)
    public function getItems(): array
    {
        if (empty($_SESSION['cart'])) {
            return [];
        }

        $pdo = \App\Core\Database::getConnection();
        $ids = array_keys($_SESSION['cart']);

        // Создаем строку с плейсхолдерами (?, ?, ?) для безопасного запроса
        $placeholders = implode(',', array_fill(0, count($ids), '?'));

        $stmt = $pdo->prepare("SELECT * FROM products WHERE id IN ($placeholders)");
        $stmt->execute($ids);
        $products = $stmt->fetchAll();

        // Добавляем к каждому товару его количество из сессии
        foreach ($products as &$product) {
            $product['quantity'] = $_SESSION['cart'][$product['id']];
            $product['total'] = $product['price'] * $product['quantity'];
        }

        return $products;
    }

    // Получить общую сумму заказа
    public function getTotalSum(): float
    {
        $items = $this->getItems();
        $total = 0;
        foreach ($items as $item) {
            $total += $item['total'];
        }
        return $total;
    }

    // Получить общее количество товаров (для значка в шапке)
    public function getTotalCount(): int
    {
        return array_sum($_SESSION['cart']);
    }

    // Очистить корзину (после оформления заказа)
    public function clear(): void
    {
        $_SESSION['cart'] = [];
    }
}
