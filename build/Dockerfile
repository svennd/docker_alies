# Dockerfile
FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    npm \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql \ 
    && apt-get clean

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Clone the repository
RUN git clone --depth 1 https://github.com/svennd/alies /var/www/html

# copy config over
COPY ./config/alies/ /var/www/html/application/config/
# permissions
RUN chown -R www-data:www-data /var/www/html && \
    find /var/www/html -type d -exec chmod 755 {} \; && \
    find /var/www/html -type f -exec chmod 644 {} \; && \
    chmod -R 775 /var/www/html/data/*

WORKDIR /var/www/html

# Install PHP dependencies
RUN composer update

# Install Node.js dependencies
RUN npm install

# make sure the permissions are correct
RUN chown -R www-data:www-data /var/www/html && \
    find /var/www/html -type d -exec chmod 755 {} \; && \
    find /var/www/html -type f -exec chmod 644 {} \; && \
    chmod -R 775 /var/www/html/data/*

# Expose the port (if necessary)
EXPOSE 9000

# Command to run PHP-FPM (inherited from the base image)
CMD ["php-fpm"]