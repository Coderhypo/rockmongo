FROM daocloud.io/php:5.6-apache

MAINTAINER Hypo i@ihypo.net

COPY . /var/www/html/

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y php-pear apache2 php5 libapache2-mod-php5 php5-mongo
RUN /etc/init.d/apache2 restart

RUN echo "extension=mongo.so" >> /etc/php5/apache2/php.ini
RUN /etc/init.d/apache2 restart
