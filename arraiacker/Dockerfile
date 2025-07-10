# ----- ESTÁGIO 1: O Construtor de Assets -----
# Usamos uma imagem oficial do Node.js, que já vem pronta e não falha.
FROM node:20-alpine AS builder

# Define o diretório de trabalho
WORKDIR /app

# Copia os arquivos de dependência e instala (isso é rápido no container de Node)
COPY package*.json ./
RUN npm install

# Copia o resto dos arquivos necessários para o build do CSS
COPY . .

# Compila o Tailwind CSS para produção
RUN npm run build-css


# ----- ESTÁGIO 2: A Imagem Final da Aplicação -----
# Começamos de novo com a imagem oficial do PHP + Apache.
FROM php:8.2-apache

# Habilita o mod_rewrite para o .htaccess funcionar
RUN a2enmod rewrite

# Instala SOMENTE a extensão PHP necessária para o MariaDB.
# (Não precisa mais de curl, nodejs, etc. aqui! Por isso não vai travar!)
RUN docker-php-ext-install pdo_mysql

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos da aplicação PHP do nosso contexto local
COPY . .

# -- O PASSO MÁGICO --
# Copia APENAS os assets já compilados (a pasta /dist) do estágio "builder"
COPY --from=builder /app/dist ./public/dist

# Configura o Apache para usar a pasta /public como raiz (Segurança)
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# Altera as permissões para o usuário do Apache
RUN chown -R www-data:www-data /var/www/html