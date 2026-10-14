
FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    git unzip zip libzip-dev libsqlite3-dev \
    nodejs npm \
    && docker-php-ext-install pdo_sqlite mbstring bcmath zip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN cp .env.example .env \
    && composer install --no-dev --optimize-autoloader --no-interaction \
    && npm install \
    && npm run build \
    && php artisan key:generate \
    && mkdir -p storage/framework/cache/data \
       storage/framework/sessions \
       storage/framework/views \
       storage/logs bootstrap/cache \
    && touch database/database.sqlite \
    && chmod -R 775 storage bootstrap/cache

ENV DB_CONNECTION=sqlite
ENV DB_DATABASE=/var/www/html/database/database.sqlite
ENV SESSION_DRIVER=file
ENV CACHE_STORE=file
ENV QUEUE_CONNECTION=sync
ENV APP_ENV=production
ENV APP_DEBUG=false

EXPOSE 10000

CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
