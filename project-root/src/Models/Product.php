<?php
// src/Models/Product.php

namespace App\Models;

use App\Core\Database;
use PDO;

class Product
{
    // Получить все товары по слагу категории (sashimi, sushi, rolls)
    public function getByCategorySlug(string $slug): array
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("
            SELECT p.* 
            FROM products p
            JOIN categories c ON p.category_id = c.id
            WHERE c.slug = :slug
        ");
        $stmt->execute(['slug' => $slug]);
        return $stmt->fetchAll();
    }

    public function getAll(): array
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->query("
        SELECT p.*, c.name as category_name, c.slug as category_slug
        FROM products p
        JOIN categories c ON p.category_id = c.id
        ORDER BY c.id, p.id
    ");
        return $stmt->fetchAll();
    }

    // Получить все категории (для фильтра)
    public function getCategories(): array
    {
        $pdo = Database::getConnection();
        return $pdo->query("SELECT * FROM categories")->fetchAll();
    }
}
