<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;

class CatalogController extends Controller
{
    public function index(): void
    {
        $productModel = new Product();

        // Получаем параметр фильтрации из URL (например, /catalog?category=sushi)
        $categorySlug = $_GET['category'] ?? null;

        if ($categorySlug) {
            $products = $productModel->getByCategorySlug($categorySlug);
        } else {
            $products = $productModel->getAll();
        }

        $categories = $productModel->getCategories();

        $this->render('catalog', [
            'title' => 'Каталог',
            'products' => $products,
            'categories' => $categories,
            'currentCategory' => $categorySlug
        ]);
    }
}
