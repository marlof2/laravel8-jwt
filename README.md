<h1>Laravel 8 - JWT </h1>
<p>Api criada em Laravel na versão 8 e MySql como banco de dados, utilizando a biblioteca tymon/jwt-auth.
Nesse projeto foi criada como padão a Model Users e uma Middleware para tratar as exceptions e então padronizar o retorno das respostas das requisições.</p>

<hr>

<h2>Instalação</h2>
<h4>1- Clone do Projeto</h4>
<pre>https://github.com/marlof2/laravel8-jwt.git</pre>

<h4>2- Na raiz do projeto rode o comando</h4>
<pre>composer install</pre>

<h4>3- Configure o Banco de dados no aquivo .env do laravel</h4>

<h4>4- No terminal do laravel rode o comando</h4>
<pre>php artisan migrate --seed</pre>

Na pasta Database/migrations, Database/seed Database/factories ja tem arquivos definidos para criar a migration e a seed, será criado altomaticamente as tabelas
e aguns usuarios fake para testar a api.

<h3>5- Testando Api</h3>
Vá para o controlador em app/http/controller/Api/AuthController.php
nesse controlador tem os methodos que irão fazer a vaidação e criação do tokens.
E na pasta routes tem as api.php com todas as rotas de teste.






