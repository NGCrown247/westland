FROM php:8.2-apache

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Copy Laravel files
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Permissions for storage and cache
RUN chmod -R 775 storage bootstrap/cache

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
