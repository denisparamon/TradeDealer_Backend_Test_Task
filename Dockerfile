# Используем официальный образ PHP с поддержкой FPM
FROM php:8.1-fpm

RUN docker-php-ext-install pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY .. .

RUN composer install

EXPOSE 9000
