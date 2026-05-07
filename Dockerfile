FROM php:8.2-apache

WORKDIR /app

# Instalar suporte MySQL
RUN docker-php-ext-install mysqli

# Copiar ficheiros do projeto
COPY . .

EXPOSE 8080

CMD ["php", "-S", "0.0.0.0:8080", "-t", "."]