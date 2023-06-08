# Projeto
Criação de API baseada nas funções de um CRUD.

## Baixando o projeto
Vá até a pasta onde deseja baixar o projeto e digite:
```
$ git clone https://github.com/Emerson1130/api.git
```
## Instalação
Todos os comandos devem ser executados na raiz do projeto, dentro do servidor PHP, após a clonagem.

```
composer install
php artisan config:cache
```
## Definir Banco de Dados em " env. "
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=api
DB_USERNAME=root
DB_PASSWORD=
```
## Migrações
Você precisará criar as tabelas no banco de dados para que o projeto funcione conforme o esperado, portanto, execute o seguinte comando:

```
$ php artisan migrate

INFO  Preparing database.  

  Creating migration table .................................. 137ms DONE

INFO  Running migrations.  
  2014_10_12_000000_create_contracts_table ...................... 123ms DONE
  2014_10_12_100000_create_equipaments_table ............. 78ms DONE
```
## Iniciar Servidor
```
$ php artisan serve
```
## Testa e Interar a API
- [Postman] - https://www.postman.com

## Tecnologias
- [Laravel] - https://laravel.com/docs/10.x
- [Laravel Validation] - https://laravel.com/docs/10.x/validation
- [Laravel Routing] - https://laravel.com/docs/10.x/routing
- [Laravel Migrations] - https://laravel.com/docs/10.x/migrations
- [Laravel Carbon]- https://laravel.com/api/6.x/Illuminate/Support/Carbon.html
- [Composer] - https://getcomposer.org
- [PHP 8.1] - https://www.php.net/releases/8.1/pt_BR.php
