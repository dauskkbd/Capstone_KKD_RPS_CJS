FROM richarvey/nginx-php-fpm:3.1.4

COPY . .

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV APP_KEY base64:sD1A4zmRrfYSqk7YqhFwF0m3tqtWtSJND0QR1DYEvmc=
ENV LOG_CHANNEL stderr
ENV DB_CONNECTION pgsql
ENV DB_HOST dpg-cnfjslol6cac73a23ivg-a.singapore-postgres.render.com
ENV DB_PORT 5432
ENV DB_DATABASE boardgames2_ufej
ENV DB_USERNAME root
ENV DB_PASSWORD suwN82c4O1PBfNRQw0rTt0otIEoo947n
ENV MYSQL_ATTR_SSL_CA cacert-2023-12-12.pem

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]