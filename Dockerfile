
FROM php:7.4-apache

COPY index.html /var/www/html/
COPY styles.css /var/www/html/
COPY process.php /var/www/html/
COPY info.php /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]