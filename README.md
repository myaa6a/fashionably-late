# お問い合わせフォーム

## 環境構築

Dockerビルド<br>
1.git clone [git@github.com:coachtech-material/laravel-docker-template.git](git@github.com:coachtech-material/laravel-docker-template.git)<br>
2.docker-compose up -d --build

Laravel環境構築<br>
1.docker-compose exec php bash<br>
2.composer install<br>
3..env.exampleファイルから.envファイルを作成し、環境変数を変更<br>
4.php artisan key:generate<br>
5.php artisan migrate<br>
6.php artisan db:seed

## 使用技術<br>
php 7.4.9<br>
Laravel 8.83.8<br>
MySQL 8.0.26

## ER図

<img width="730" alt="スクリーンショット 2024-02-19 22 22 09" src="https://github.com/myaa6a/fashionably-late/assets/150535914/6671f728-43c0-4c1b-96f9-6706fc6b745a">

## URL
開発環境：http://localhost/<br>
phpMyAdmin:http://localhost:8080/
