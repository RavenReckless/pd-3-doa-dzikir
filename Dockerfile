# Gunakan PHP 8.2 atau versi yang kompatibel
FROM php:8.2-fpm

# Install dependensi yang dibutuhkan
RUN apt-get update \
    && apt-get install -y \
        git \
        unzip \
        libzip-dev \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Set working directory
WORKDIR /var/www/html

# Salin dan instal dependensi aplikasi
COPY . .

# Jalankan composer install dengan opsi yang diperlukan
RUN composer install --no-dev --optimize-autoloader

# Expose port 80
EXPOSE 80

# Perintah untuk menjalankan container
CMD ["php-fpm"]
