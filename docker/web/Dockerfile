FROM php:8.3-apache

# タイムゾーン
ENV TZ=Asia/Tokyo

# 必要なパッケージをインストール
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libonig-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        mbstring \
        zip \
        gd \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Apache 設定
# mod_rewrite を有効化（Laravel 必須）
RUN a2enmod rewrite

# DocumentRoot を /opt/todo/public に変更
RUN sed -i 's|/var/www/html|/opt/todo/public|g' /etc/apache2/sites-available/000-default.conf \
    && sed -i 's|/var/www/|/opt/|g' /etc/apache2/apache2.conf

# /opt ディレクトリを作成
RUN mkdir -p /opt/todo

# Apache が /opt 以下を読めるようにする
RUN printf '<Directory /opt>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n' >> /etc/apache2/apache2.conf

# Composer インストール（公式）
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 作業ディレクトリ（コンテナに入った直後の位置）
WORKDIR /opt

# ポート
EXPOSE 80
