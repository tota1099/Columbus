# Columbus
Uma aplicação simples utilizando a estrutura MVC e a linguagem de programação PHP.

- Composer
- Smarty Template Engine
- PHP/Apache and MYSQL
- Composer (Gestão de Dependências)


### Installing and running ###

`$ docker-compose build --no-cache`

`$ docker-compose up -d`

### Database Migration ###

`$ docker-compose exec app ./vendor/bin/phinx migrate`

**Open your browser in the address "http://localhost" and enjoy the application**