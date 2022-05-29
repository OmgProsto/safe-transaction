docker run -d -p 80:80 -v $(pwd):/var/www/checker/ basechecker
service php8.0-fpm start