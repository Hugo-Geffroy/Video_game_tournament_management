FROM php:8.2-apache

# Installation des dépendances PHP et Git
RUN apt-get update && apt-get install -y \
    git \
    && docker-php-ext-install pdo pdo_mysql mysqli \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

EXPOSE 80

