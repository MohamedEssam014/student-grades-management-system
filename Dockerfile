FROM php:8.1-apache

# نسخ ملفات الموقع
COPY src/ /var/www/html/

# تثبيت pdo_mysql علشان يشتغل مع PDO
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql

EXPOSE 80
