FROM pensiero/apache-php-mysql:php7.2

# change default port
EXPOSE 8004

RUN apt-get update && apt-get install -y \
    inetutils-ping \
    nano \ 
    mariadb-client

RUN mkdir /var/www/public 
RUN mkdir /var/www/public/boxbilling 

RUN chmod -R 777 /var/www/public/boxbilling/

VOLUME /var/www/public

# move data files
COPY ./ /var/www/public/boxbilling/
COPY docker-entrypoint.sh /entrypoint.sh

RUN chmod -R 777 /var/www/public/boxbilling/bb-data/ 
RUN chmod -R 777 /var/www/public/boxbilling/bb-config.php

ENTRYPOINT ["bash","/entrypoint.sh"]

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]