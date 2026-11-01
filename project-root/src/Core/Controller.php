<?php
// src/Core/Controller.php

namespace App\Core;

class Controller
{
    // Метод для подключения View (представления)
    protected function render(string $view, array $data = []): void
    {
        // Извлекаем переменные, чтобы они были доступны в шаблоне
        extract($data);

        $viewFile = __DIR__ . '/../Views/' . $view . '.php';

        if (file_exists($viewFile)) {
            require $viewFile;
        } else {
            echo "Ошибка: Представление {$view} не найдено.";
        }
    }
}
