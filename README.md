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
    composer install
    composer run dev

Criar uma cópia do arquivo <.env.example> e renomear apenas para <.env>

Criar uma chave encriptada para o projeto 

    php artisan key:generate

Rodar as migrations para criar o banco de dados 
    
    php artisan migrate

Se o projeto tiver webpack ou vite rodar 

    npm run build

A aplicação será acessável no seu navegador em: http://localhost:8000.

    php artisan view teste

criar uma nova view: php artisan make:view nome-da-view.

# Implementação de Tailwind CSS

Instalar o Tailwind CSS como um plugin do Vite é a maneira mais fácil de integrá-lo com frameworks como Laravel.

Caso não tenha um arquivo Vite, crie-o com o comando

    npm create vite@latest meu-project
    cd meu-project

Instale o Tailwind CSS

    npm install tailwindcss @tailwindcss/vite

Para configurar o plugin Vite, adicione o plugin @tailwindcss/vite à sua configuração do Vite (vite.config.js)

    import { defineConfig } from 'vite'
    import tailwindcss from '@tailwindcss/vite'
    export default defineConfig({
        plugins: [
            tailwindcss(),
        ],
    })

Importe o Tailwind CSS

    @import "tailwindcss";

Começar a contrução do projeto com 

    npm run dev

Para utilizar Tailwind em seu HTML, inclua seu CSS na tag < head > e use as classes do Tailwind para estilizar seu projeto

    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/src/style.css" rel="stylesheet">
    </head>
    <body>
        <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>
    </body>
    </html>
