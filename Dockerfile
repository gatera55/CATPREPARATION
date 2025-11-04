FROM php:7.4-apache

# Copy application files
COPY src/ /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Expose port
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]