# Criação de Projeto Laravel

Abra o terminal como administrador.

    Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))

Agora

    composer global require laravel/installer

Então

    laravel new exemplo-app

Finalmente

    cd exemplo-app
    npm install && npm run build
    composer run dev

Rodar o comando composer install (ela baixa as dependências do projeto na pasta vendor)
Para instalar as dependências de um projeto que possui javascript eu devo rodar o comando npm install
Criar uma cópia do arquivo .env.example e renomear apenas para .env
Criar uma chave encriptada para o projeto com o comando php artisan key:generate
Rodar as migrations para criar o banco de dados com o comando php artisan migrate
Se o projeto tiver webpack ou vite rodar o comando npm run build

A aplicação será acessável no seu navegador em: http://localhost:8000.
