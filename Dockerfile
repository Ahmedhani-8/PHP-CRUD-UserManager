FROM php:8.1-apache

# تثبيت امتداد mysqli و pdo_mysql
RUN docker-php-ext-install mysqli pdo_mysql

# تفعيل mod_rewrite (اختياري لكن مفيد)
RUN a2enmod rewrite

# مجلد العمل داخل الحاوية
WORKDIR /var/www/html

# نسخ ملفات المشروع (مجلد src) إلى داخل الحاوية
COPY src/ /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]
