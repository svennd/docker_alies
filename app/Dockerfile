# Dockerfile
FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql

# Clone the repository
RUN git clone --depth 1 https://github.com/svennd/alies /var/www/html

WORKDIR /var/www/html
# Other PHP dependencies can be installed here