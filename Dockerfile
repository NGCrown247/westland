FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    unzip git curl libzip-dev zip

RUN docker-php-ext-install pdo pdo_sqlite zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# Define build argument for the app key
ARG APP_KEY
ENV APP_KEY=$APP_KEY

RUN composer install --no-dev --optimize-autoloader --no-scripts

# SQLite
RUN mkdir -p /tmp && touch /tmp/database.sqlite

# Permissions
RUN chmod -R 777 storage bootstrap/cache

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000
