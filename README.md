
# Cadastro de clientes

Um cadastro simples de clientes em PHP para estudo do framework Laravel.


## Funcionalidades

- Lista de clientes cadastrados
- Exibição de cliente
- Cadastro de novo cliente (Com endereço buscando CEP em API externa)
- Edição de cliente
- Exclusão de cliente (Exclusão lógica)


## Dependencias

### Laravel
Projeto feito utilizando o framework Laravel. Caso tenha dúvidas você pode dar uma olhada na [documentação](https://laravel.com/docs/9.x/installation) do framework.

### Composer
Para rodar o projeto você precisa ter o [composer](https://getcomposer.org/download/) instalado.

### MySql
Você precisará de uma instancia MySql para rodar, a mesma pode ser via nuvem (adicionar as configurações nos enviroments), ou local utlizando uma [docker-compose](https://medium.com/@chrischuck35/how-to-create-a-mysql-instance-with-docker-compose-1598f3cc1bee) ou o [xampp](https://www.apachefriends.org).
## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/EduMeyer0/TesteSabank.git
```

Entre no diretório do projeto

```bash
  cd TesteSabank
```

Instale as dependências

```bash
  composer update --no-scripts
```
```bash
  composer dump-autoload
```

Atualize o banco com as migrations

```bash
  php artisan migrate
```

Enfim podemos subir a aplicação

```bash
  php artisan serve
```

## Referências

 - [Laravel](https://laravel.com)
 - [BrasilAPI](https://brasilapi.com.br/docs)
 - [Bootstrap](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
 - [jQuery Mask Plugin](http://igorescobar.github.io/jQuery-Mask-Plugin/)

