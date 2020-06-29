docker run --rm -v `pwd`:/app -w /app php:8.0-rc php -dzend_extension=opcache \
                      -dopcache.enable=1 -dopcache.enable_cli=1 \
                      -dopcache.jit=1235  -dopcache.jit_buffer_size=64M fib.php:8.0-rc



docker run --rm php:8.0-rc php -v

docker run --rm -p 8000:80 -v `pwd`:/var/www/html php:8.0-rc-apache

docker run --rm -v `pwd`:/app -w /app php:8.0-rc php constructor-property-promotion.php