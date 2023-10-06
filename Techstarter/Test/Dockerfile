# Verwenden Sie das offizielle PHP 7.4 Apache-Image als Basisimage
FROM php:7.4-apache

# Installieren Sie das Zeitzone-Datenbankpaket
RUN apt-get update && apt-get install -y tzdata

# Setzen Sie die Zeitzone im Container auf Ihre Zeitzone (z.B., Berlin)
RUN ln -sf /usr/share/zoneinfo/Europe/Berlin /etc/localtime

# Kopieren Sie die index.php-Datei in das Webverzeichnis des Containers
COPY index.php /var/www/html/index.php