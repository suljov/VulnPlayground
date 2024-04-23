FROM richarvey/nginx-php-fpm:latest

# Root flag
RUN echo "Concrats, you found the flag!" > /root/root.txt

# Create necessary directories
RUN mkdir -p /run/nginx
RUN mkdir -p /var/www/html/uploads /var/www/html/conf/nginx/ /var/www/html/scripts /data

# Install required packages
RUN apk add --no-cache nginx-mod-http-lua

# Set environment variables
ENV PHP_UPLOAD_MAX_FILESIZE 10000
ENV PHP_POST_MAX_SIZE 10000
ENV PHP_MEM_LIMIT 10000
ENV RUN_SCRIPTS 1

# Copy configuration files
COPY nginx.conf /var/www/html/conf/nginx/

# Copy PHP files
COPY index.php /var/www/html/

# Copy CSS file
COPY style.css /var/www/html/
