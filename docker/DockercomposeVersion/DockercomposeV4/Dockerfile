

FROM php:8.2-apache

# Installation des dépendances PHP et Git
RUN apt-get update && apt-get install -y \
    git \
    && docker-php-ext-install pdo pdo_mysql mysqli \
    && a2enmod ssl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Copier les fichiers de certificat dans le conteneur
COPY /Video_game_tournament_management/docker/certificate/certificat.crt /etc/ssl/certs/
COPY /Video_game_tournament_management/docker/certificate/certificat.key /etc/ssl/private/

# Copier la configuration SSL personnalisée
COPY /Video_game_tournament_management/docker/config/ssl/gestion-tournament-ssl-config.conf /etc/apache2/sites-available/000-default.conf

# Activer le site par défaut avec SSL
RUN a2ensite 000-default.conf

EXPOSE 80 443

