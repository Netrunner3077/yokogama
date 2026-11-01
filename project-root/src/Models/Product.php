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
}
