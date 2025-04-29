FROM	php:8.2-apache

RUN	apt-get update && apt-get install -y \
	libpq-dev \
	&& docker-php-ext-install pdo pdo_mysql mysqli

#Intalation de Git et clone du github a partir de celui de Hugo-Geffroy
RUN	apt-get update && apt-get install -y git 
RUN	git clone https://github.com/Hugo-Geffroy/Video_game_tournament_management /var/www/html
EXPOSE 80
