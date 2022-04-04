FROM nginx:1.21.6

ADD nginx.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www

RUN apt-get update 
RUN apt-get install wget
RUN apt install -y lsb-release ca-certificates apt-transport-https software-properties-common gnupg2
RUN add-apt-repository --remove ppa:ondrej/php
RUN echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/sury-php.list
RUN wget --no-check-certificate -qO - https://packages.sury.org/php/apt.gpg | apt-key add -
RUN apt-get update
RUN apt -y install php8.0-fpm php8.0-common php8.0-mysql php8.0-gmp php8.0-curl php8.0-intl php8.0-mbstring php8.0-xmlrpc php8.0-gd php8.0-xml php8.0-cli php8.0-zip php8.0-soap php8.0-imap

RUN apt -y install curl php-cli php-mbstring git unzip
RUN wget -O composer-setup.php https://getcomposer.org/installer
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer

ADD www.conf /etc/php/8.0/fpm/pool.d/www.conf

RUN apt -y install nodejs
RUN apt -y install npm