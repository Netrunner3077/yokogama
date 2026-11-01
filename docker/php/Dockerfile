FROM php:8.3-fpm-alpine

# Устанавливаем необходимые расширения для работы с БД (пригодится на Шаге 13)
RUN docker-php-ext-install pdo pdo_mysql

# Устанавливаем рабочую директорию
WORKDIR /var/www/html

# Даем права (опционально, но полезно для Alpine Linux)
RUN chown -R www-data:www-data /var/www/html