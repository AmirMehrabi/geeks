Geeks Demo Shopping Cart
========================

The "Geeks Demo Shopping Cart" is a simple application created to show how to develop applications with symfony.

Requirements
------------
  * PHP 7.4 or higher;
  * Composer (prefebly) +2.0.0;
  * PHP-MYSQL extension enabled;
  * and other [usual Symfony application requirements][2].


Installation
------------

Clone the repository and run this command:

```bash
$ composer install
```

Update your mysql credentials in the ".env" file

run the migrations with this command:

```bash
$ symfony console doctrine:migrations:migrate
```


Usage
-----

You just need to populate your database with some users and products and then you're good to go.

```bash
$ cd geeks/
$ symfony serve
```

Then access the application in your browser at the given URL (<https://localhost:8000> by default).

If you don't have the Symfony binary installed, run `php -S localhost:8000 -t public/`
to use the built-in PHP web server or [configure a web server][3] like Nginx or
Apache to run the application.


[2]: https://symfony.com/doc/current/reference/requirements.html
[3]: https://symfony.com/doc/current/cookbook/configuration/web_server_configuration.html
[4]: https://symfony.com/download