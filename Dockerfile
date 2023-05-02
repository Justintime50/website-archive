FROM justintime50/nginx-php:8.2-14

COPY --chown=www-data:www-data ./src /var/www/html/public
