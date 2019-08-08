## Requirements:
-	PHP >= 7.1.3
-	OpenSSL PHP Extension
-	PDO PHP Extension
-	Mbstring PHP Extension
-	Tokenizer PHP Extension
-	XML PHP Extension
-	JSON PHP Extension
-	Ctype PHP Extension
-	BCMath PHP Extension

-	Install PHP 7.1:
```bash
sudo apt-get install python-software-properties -y && sudo add-apt-repository ppa:ondrej/php-7.1
sudo apt-get update
sudo apt-get install php7.1
```
-	Install composer
```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

## Running proyect:

-	Download proyect:
```bash

git clone https://github.com/melaniesol5/proyectoPokemon.git
```
-	Install composer:
```bash
/path/of/the/proyect composer.phar install
```
-	Run proyect:
```bash
/path/of/the/proyect php artisan serve
```
Laravel Version 5.8.31

