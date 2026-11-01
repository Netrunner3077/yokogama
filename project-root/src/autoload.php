<?php
// src/autoload.php

spl_autoload_register(function ($class) {
    // Префикс наших пространств имен (namespace)
    $prefix = 'App\\';

    // Базовая директория для префикса
    $base_dir = __DIR__ . '/';

    // Проверяем, начинается ли класс с нашего префикса
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return; // Если нет, выходим
    }

    // Получаем относительное имя класса
    $relative_class = substr($class, $len);

    // Формируем путь к файлу (заменяем \ на /)
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // Если файл существует, подключаем его
    if (file_exists($file)) {
        require $file;
    }
});
