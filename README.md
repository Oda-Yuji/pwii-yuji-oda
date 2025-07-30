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

A aplicação será acessável no seu navegador em: http://localhost:8000.
