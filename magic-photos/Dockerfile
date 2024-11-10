FROM php:8.2-apache

# Set upload directory environment variable
ENV UPLOAD_DIR=/var/www/html/uploads
ENV MAX_UPLOAD_SIZE=5M

# Create upload directory inside document root for direct access
RUN mkdir -p /var/www/html/uploads && \
    chown -R www-data:www-data /var/www/html && \
    chmod 755 /var/www/html/uploads

# Copy application files
COPY src/ /var/www/html/

# Configure PHP
RUN echo "upload_max_filesize = ${MAX_UPLOAD_SIZE}" >> /usr/local/etc/php/conf.d/uploads.ini && \
    echo "post_max_size = ${MAX_UPLOAD_SIZE}" >> /usr/local/etc/php/conf.d/uploads.ini

# Configure Apache for directory listing
RUN echo '<Directory "/var/www/html/uploads">\n\
    Options Indexes\n\
    AllowOverride None\n\
    Require all granted\n\
</Directory>' > /etc/apache2/conf-available/uploads.conf && \
    a2enconf uploads

EXPOSE 80
