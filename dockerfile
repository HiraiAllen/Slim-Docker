# Usar una imagen oficial de PHP con Apache
FROM php:8.1-apache

# Instalar las extensiones necesarias de PHP
RUN docker-php-ext-install pdo pdo_mysql

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crear el directorio de la aplicación
WORKDIR /var/www/html

# Instalar dependencias de la aplicación (Slim)
COPY . /var/www/html
RUN composer install

# Exponer el puerto 80
EXPOSE 80