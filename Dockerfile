FROM php:8.2-apache

# تثبيت الامتدادات الإضافية إن لزم (مثل PDO, GD)
RUN apt-get update && apt-get install -y \
    libzip-dev \
    && docker-php-ext-install pdo_mysql zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# تمكين mod_rewrite لـ .htaccess
RUN a2enmod rewrite

# ضبط مجلد العمل
WORKDIR /var/www/html

# نسخ الملفات (بعد .dockerignore)
COPY . .

# تثبيت Composer dependencies إن وجد
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN if [ -f composer.json ]; then composer install --no-dev --optimize-autoloader; fi

# صلاحيات
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
