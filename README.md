
# Ganymede

<p align="right"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="150" alt="Laravel Logo"></a></p>

Neste documento, serão apresentados os passos para rodar a aplicação utilizando o framework Laravel. A entidade terá os seguintes campos: nome, email, telefone e endereço, e os dados serão armazenados em um banco de dados SQLite.

### Requisitos

Para seguir este guia, é necessário ter instalado:

-   PHP 7.2 ou superior
-   Composer
-   Laravel 8.x
-   SQLite3

### Passo 1: Clonar o repositório do Github

O primeiro passo é clonar este repositório do github. Para isso, abra o terminal e execute o seguinte comando:

> OBS: `C:\www` é o caminho para onde você quer clonar o repo, porém pode ser alterado

```shell
git clone https://github.com/FelipeRodrigues05/Ganymede.git C:\www
```

### Passo 2: Instalar as Dependências necessárias

Agora é necessário instalar as dependências do PHP utilizadas

```shell
composer install
```

### Passo 3: Configurar o Banco de Dados

Por padrão o APP usa SQLite, porém você pode utilizar outros indo no arquivo .env e digitando isso:

> OBS: Esses dados fornecidos são apenas exemplos

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

### Passo 4: Rodar a Aplicação

Agora vá no terminal e digite isso:

```shell
php artisan serve
```


