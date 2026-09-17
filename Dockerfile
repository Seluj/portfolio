# syntax=docker/dockerfile:1

# Image unique du portfolio : nginx + php-fpm, prête à être placée derrière le
# reverse proxy du serveur. Un seul artefact à publier et à déployer.
ARG PHP_VERSION=8.3-fpm-alpine

FROM php:${PHP_VERSION}

# nginx sert les fichiers et transmet le PHP à php-fpm ; supervisor garde les
# deux processus vivants. On retire le vhost par défaut de l'image alpine.
RUN apk add --no-cache nginx supervisor \
    && rm -f /etc/nginx/http.d/default.conf

# Configuration PHP de production fournie par l'image officielle.
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
COPY docker/php/zz-portfolio.ini "$PHP_INI_DIR/conf.d/zz-portfolio.ini"

COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/supervisord.conf /etc/supervisord.conf

COPY --chown=www-data:www-data src/ /var/www/html/

# nginx a besoin d'écrire dans ses propres répertoires alors qu'il tourne sous
# www-data ; le reste de ce qu'il produit est redirigé vers /tmp et stdout.
RUN mkdir -p /var/lib/nginx/tmp /var/log/nginx \
    && chown -R www-data:www-data /var/lib/nginx /var/log/nginx

USER www-data

EXPOSE 8080

HEALTHCHECK --interval=30s --timeout=3s --start-period=5s --retries=3 \
    CMD wget --quiet --spider http://127.0.0.1:8080/healthz || exit 1

CMD ["supervisord", "-c", "/etc/supervisord.conf"]
