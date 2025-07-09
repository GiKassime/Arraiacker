# Começar com uma imagem oficial do PHP com servidor Apache
FROM php:8.2-apache

# Instalar Node.js e npm para usar o Tailwind CSS
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Instalar as extensões do PHP necessárias para se conectar ao MariaDB/MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Definir o diretório de trabalho
WORKDIR /var/www/html

# Copiar package.json e package-lock.json (se existir) primeiro para cache das dependências
COPY package*.json ./

# Instalar as dependências do Node.js incluindo Tailwind CSS
RUN npm install

# Copiar os arquivos da aplicação para a pasta do servidor web
COPY . /var/www/html/

# Compilar o Tailwind CSS
RUN npx tailwindcss -i ./src/input.css -o ./dist/output.css --minify

# Expor a porta 8589
EXPOSE 8589