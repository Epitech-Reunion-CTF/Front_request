# Utilisation d'une image PHP Apache
FROM php:7.4-apache

# Copie des fichiers PHP dans le conteneur
COPY index.php /var/www/html/

# Exposition du port 80 pour le serveur web Apache
EXPOSE 80