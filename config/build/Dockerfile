# Dockerfile
FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    npm \
    nano \
    libmariadb-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev

RUN docker-php-ext-install mysqli gd
# RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

WORKDIR /var/www/html

# permissions
# RUN chown -R www-data:www-data /var/www/html && \
#     find /var/www/html -type d -exec chmod 755 {} \; && \
#     find /var/www/html -type f -exec chmod 644 {} \; && \
#     chmod -R 775 /var/www/html/data/*

# Expose the port (if necessary)
EXPOSE 9000

# Command to run PHP-FPM (inherited from the base image)
CMD ["php-fpm"]