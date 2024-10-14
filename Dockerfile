# Используем официальный образ PHP с поддержкой FPM
FROM php:8.1-fpm

# Устанавливаем необходимые PHP-расширения
RUN docker-php-ext-install pdo pdo_mysql

# Устанавливаем Composer (менеджер пакетов PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Настраиваем рабочий каталог в контейнере
WORKDIR /var/www

# Копируем файлы проекта в контейнер
COPY .. .

# Устанавливаем зависимости проекта с помощью Composer
RUN composer install

# Открываем порт 9000 для php-fpm
EXPOSE 9000
