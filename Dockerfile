# Build stage - install dependencies
FROM composer:2.8.12 AS builder

WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install \
    --no-dev \
    --no-scripts \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader

COPY . .
RUN composer dump-autoload --optimize

# Production stage
FROM php:8.4.1-fpm-alpine3.21

# Install system dependencies and PHP extensions
RUN apk add --no-cache nginx supervisor
RUN docker-php-ext-install pdo_mysql opcache

# Copy PHP configuration
COPY docker/php/php.ini /usr/local/etc/php/conf.d/custom.ini

# Copy Nginx configuration
COPY docker/nginx/default.conf /etc/nginx/http.d/default.conf

# Copy application from builder stage
COPY --from=builder --chown=www-data:www-data /app /var/www/html

WORKDIR /var/www/html

# Configure Supervisor to manage PHP-FPM and Nginx
COPY docker/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
