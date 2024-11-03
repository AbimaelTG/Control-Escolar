# Usa la imagen oficial de PHP con Apache
FROM php:8.1-apache

# Instala las extensiones necesarias de MySQL
RUN docker-php-ext-install mysqli

# Copia el archivo PHP al directorio raíz del servidor web
COPY . /var/www/html/

# Otorga permisos de lectura/escritura
RUN chown -R www-data:www-data /var/www/html
