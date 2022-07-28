# Docker-Laravel-Handson
- php
- nginx
- mysql
- Laravel
## How To Start
### clone and docker compose
```bash
$ git clone https://github.com/katahiro4/docker-laravel-handson.git
$ cd docker-laravel-handson
$ docker compose up -d
```
### Laravel install  
enter the app container
```bash
$ docker compose exec app bash
```
write permission and install
```bash
$ chmod -R 777 storage bootstrap/cache
$ composer install
```
### create .env
```bash
$ cp .env.example .env
```
### creat app key
```bash
$ php artisan key:generate
```
### artisan link and migrate
```bash
$ php artisan storage:link
$ php artisan migrate
```
## Reference
[【超入門】20分でLaravel開発環境を爆速構築するDockerハンズオン](https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4)
