FROM justintime50/nginx-php:8.3-20

COPY --chown=www-data:www-data ./src /var/www/html/public
