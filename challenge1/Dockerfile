# Use the official PHP image with Apache
FROM php:8.1-apache

# Enable mod_rewrite for Apache if necessary
RUN a2enmod rewrite

# Copy the local files into the container
COPY . /var/www/html/

# Expose the port Apache will run on
EXPOSE 80

# Set the working directory
WORKDIR /var/www/html/

# Set the entrypoint
CMD ["apache2-foreground"]

