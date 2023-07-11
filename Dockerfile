# Utilisation de l'image de base officielle PHP avec la version souhaitée
FROM php:7.4-apache

# Installation des dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Activation des extensions PHP nécessaires
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Configuration du répertoire de travail
WORKDIR /var/www/html

# Copie des fichiers de l'application dans le conteneur
COPY . .

# Configuration du serveur Apache
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

# Exposition du port 80 pour accéder au serveur web
EXPOSE 80

# Commande à exécuter lors du lancement du conteneur
CMD ["apache2-foreground"]
