# Dockerfile
FROM php:8.2-fpm

RUN apt-get update && apt-get install -y git

# Clone the repository
RUN git clone https://github.com/svennd/alies /var/www/html

WORKDIR /var/www/html

# Other PHP dependencies can be installed here