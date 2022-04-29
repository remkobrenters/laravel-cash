FROM composer:latest AS composer
FROM php:8.1-cli-alpine

ARG PUID=1000
ARG PGID=1000

ARG XDEBUG_ON=false
ARG XDEBUG_REMOTE_HOST=172.17.0.1
ARG XDEBUG_REMOTE_PORT=9001

RUN apk add --no-cache --virtual .build-deps \
        # for extensions
        $PHPIZE_DEPS \
    && \
    apk add --no-cache \
        # for composer
        unzip \
        # for php ext-soap
        libxml2-dev \
    && \
    docker-php-ext-install \
        opcache \
        soap \
    && \
    pecl install pcov \
    && \
    docker-php-ext-enable pcov \
    && \
    apk del .build-deps

RUN if [ "${XDEBUG_ON}" = true ]; then \
    apk add --no-cache --virtual .build-deps $PHPIZE_DEPS \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && { \
    	echo "xdebug.mode=debug"; \
    	echo "xdebug.client_host = ${XDEBUG_REMOTE_HOST}"; \
    	echo "xdebug.client_port = ${XDEBUG_REMOTE_PORT}"; \
    } > /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && apk del .build-deps \
;fi

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Add a non-root user to prevent files being created with root permissions on host machine.
RUN addgroup -g ${PGID} user && \
    adduser -u ${PUID} -G user -D user

# Add a coverage directory for PhpStorm users so code coverage can be ran
RUN mkdir /opt/phpstorm-coverage \
    && chown user:user /opt/phpstorm-coverage

USER user
