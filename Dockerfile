FROM ximil/php56-apache-oci8:latest

MAINTAINER Vinicius Heineck

RUN sed -i "s/short_open_tag = Off/short_open_tag = On/" /etc/php/5.6/apache2/php.ini
RUN sed -i "s/short_open_tag = Off/short_open_tag = On/" /etc/php/5.6/cli/php.ini
CMD /usr/sbin/apache2ctl -D FOREGROUND
