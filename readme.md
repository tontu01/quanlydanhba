# README

Guess: http://localhost/kiemtragiuaki/public/
login: http://localhost/kiemtragiuaki/public/management/login --
    tài khoản
	admin@gmail.com
	admin123

## SYSTEM REQUIREMENT

* DB
  - MySQL 5.6
* Apache 
    - 2.4
* PHP
  - 7.0
* Laravel
  - 5.8
* Composer
  - 1.4.1


## Deploy
* permission
```
chmod -R 777 bootstrap/cache
chmod -R 777 storage/logs/
chmod -R 777 storage
chmod -R 777 storage/framework
chmod -R 777 public/media
chmod -R 777 public/tmp_uploads
```

* run deploy
```bash
cp .env.example .env
php artisan key:generate
```
* config your database in .env
find and replace database config
```bash
vi .env
```

* run
```bash
 composer install
 php artisan config:cache
 php artisan config:clear
 php artisan cache:clear
```
