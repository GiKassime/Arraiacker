# Começar com uma imagem oficial do PHP com servidor Apache
FROM php:8.2-apache

# Instalar as extensões do PHP necessárias para se conectar ao MariaDB/MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar os arquivos da aplicação (nosso index.php) para a pasta do servidor web
COPY . /var/www/html/