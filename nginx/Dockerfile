# Use the official Nginx image as the base image
FROM nginx:latest

# Copy the custom Nginx configuration file into the container
RUN rm /etc/nginx/nginx.conf
#COPY default.conf /etc/nginx/nginx.conf

# Expose port 80 for the HTTP service
EXPOSE 80

# Set the working directory for Nginx
#WORKDIR /usr/share/nginx/html
COPY index.php /usr/share/nginx/html/index.php

COPY page1.php /usr/share/nginx/html1
# The default entrypoint is already set by Nginx, so we don't need to specify it
