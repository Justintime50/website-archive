FROM justintime50/nginx-php:latest

COPY --chown=www-data:www-data ./src /var/www/html/public
