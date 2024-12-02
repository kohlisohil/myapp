# Use the official PHP image as the base image
FROM php:7.4-fpm

# Install MySQL/MariaDB development libraries
RUN apt-get update && apt-get install -y libmariadb-dev && docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Set the working directory
#ORKDIR /usr/share/nginx/html

# Copy PHP scripts into the container
COPY index.php /usr/share/nginx/html/index.php
COPY page1.php /usr/share/nginx/html1/page1.php
# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Default entrypoint is already set by PHP-FPM
