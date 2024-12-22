FROM php:zts-bookworm

# set main params
ARG BUILD_ARGUMENT_ENV=dev
ENV ENV=$BUILD_ARGUMENT_ENV
ENV APP_HOME /var/www/html
ARG HOST_UID=1000
ARG HOST_GID=1000
ENV USERNAME=www-data
ARG INSIDE_DOCKER_CONTAINER=1
ENV INSIDE_DOCKER_CONTAINER=$INSIDE_DOCKER_CONTAINER
ARG XDEBUG_CONFIG=main
ENV XDEBUG_CONFIG=$XDEBUG_CONFIG
ARG XDEBUG_VERSION=3.4.0
ENV XDEBUG_VERSION=$XDEBUG_VERSION

RUN set -xe \
    && DEBIAN_FRONTEND=noninteractive apt-get update -qq \
    && DEBIAN_FRONTEND=noninteractive apt-get upgrade -yqq \
    && DEBIAN_FRONTEND=noninteractive apt-get install -yqq -o=Dpkg::Use-Pty=0 \
      build-essential \
      git-core \
      cmake \
      unzip \
      libc-ares-dev \
      libreadline-dev \
      libffi8 \
      libffi-dev \
      libutfcpp-dev \
      libzip-dev \
      sudo \
      zlib1g-dev

RUN set -xe && \
    docker-php-ext-configure ffi; \
    docker-php-ext-install -j "$(nproc)" \
      exif \
      ffi \
      gettext \
      zip

# create document root, fix permissions for www-data user and change owner to www-data
RUN set -xe \
    && mkdir -p ${APP_HOME}/public \
    && mkdir -p /home/${USERNAME} && chown ${USERNAME}:${USERNAME} /home/${USERNAME} \
    && usermod -o -u ${HOST_UID} ${USERNAME} -d /home/${USERNAME} \
    && groupmod -o -g ${HOST_GID} ${USERNAME} \
    && chown -R ${USERNAME}:${USERNAME} ${APP_HOME}

COPY ./docker/php.ini /usr/local/etc/php/php.ini
COPY ./docker/xdebug-${XDEBUG_CONFIG}.ini /tmp/xdebug.ini

RUN set -xe \
    && pecl install xdebug-$XDEBUG_VERSION \
    && mv /tmp/xdebug.ini /usr/local/etc/php/conf.d/

# install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN chmod +x /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1

# set working directory
WORKDIR ${APP_HOME}

# copy source files and config file
COPY --chown=${USERNAME}:${USERNAME} . ${APP_HOME}/

RUN set -xe \
    && cd third_party/taglib \
    && cmake -DCMAKE_INSTALL_PREFIX=/usr -DCMAKE_BUILD_TYPE=Release -D BUILD_BINDINGS=yes -DBUILD_SHARED_LIBS=ON -DBUILD_BINDINGS=ON . \
    && make -j$(nproc) \
    && make install \
    && chown -R $USERNAME:$USERNAME . \
    && cd -

USER ${USERNAME}

RUN set -xe \
    && COMPOSER_MEMORY_LIMIT=-1 composer install

CMD ["tail", "-f", "/dev/null"]