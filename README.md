# アプリケーション名:check-test1

docker-compose up -d --build
git@github.com:hiroka-like-flowers/check-test1.git
feature/createにコミット


## 環境構築
- docker-compose exec php bash
- composer install
- .env.exampleファイルから.envを作成し、環境変数を変更
- php artisan key:generate
- php artisan migrate
- php artisan db:seed
- php artisan make:controller
- php artisan make:request
- php artisan make:models
- php artisan male:migration
- php artisan make:seeder

## 使用技術(実行環境)
- laravel 8.x local
- mysql:8.0.26
- php:8.2-fpm

## ER図
check-test1.dio
< - - - 作成したER図の画像 - - - >
<img width="797" height="645" alt="image" src="https://github.com/user-attachments/assets/2786f317-de39-4f11-a28b-577d5277203d" />


## URL
- 開発環境：http://localhost/8089
- PhpMyAdmin:http://localhost/8088
- 
