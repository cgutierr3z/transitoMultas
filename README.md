#transitoMultas
Proyecto de trabajo en la materia Base de Datos. Segundo semestre de 2015.

How to install this project
---------------------------
Prepare composer:
  1. Download composer: `curl -sS https://getcomposer.org/installer | php`
  2. Install composer globally: `mv composer.phar /usr/local/bin/composer`

Install Project:
  1. `git clone https://github.com/z3774/transitoMultas.git`
  2. `composer install`
  3. Edit `transitoMultas/app/config/parameters.yml` and configure
     credentials to acces a database for this demo.
  4. `php app/console doctrine:database:create`
  5. `php app/console doctrine:schema:create`
  6. `php app/console doctrine:fixtures:load --append`
  7. `php app/console server:run`
  8. Browse `[http://127.0.0.1:8000/admin](http://127.0.0.1:8000/admin)/`

#Licence
This software is published under the [MIT License](LICENSE)
