# Columbus

A Framework that i had created just to learn more about PHP and Software infrastructure

- PHP
- Smarty Template Engine
- MYSQL
- Composer


### Installing and running ###

`$ docker-compose build --no-cache`

`$ docker-compose up -d`

### Database Migration ###

`$ docker-compose exec app ./vendor/bin/phinx migrate`

**Open your browser in the address "http://localhost" and enjoy the application**