# アプリケーション名

PiGLy

## 環境構築

**Dockerビルド**
以下のコマンドで Docker コンテナをビルド・起動します：

```bash
docker compose up -d --build
```

**Laravel環境構築**
1.docker-compose exec php bash

2.プロジェクトの作成

```
composer create-project "laravel/laravel=8.*" . --prefer-dist
```

3.env.example ファイルから.env を作成し、環境変数を変更

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
```

4.アプリケーションキーの作成

```
php artisan key:generate
```

5.マイグレーションの実行

```
php artisan migrate
```

6.シーディングの実行

```
php artisan db:seed
```

## 使用技術(実行環境)

・PHP 7.4.9<br>
・Laravel 8.83.29<br>
・MySQL 8.0.26<br>
・Docker / Docker Compose<br>
・phpMyAdmin<br>

## ER 図

![alt](./PiGLy.png)


## URL

- 環境開発： http://localhost/
- phpMyAdmin： http://localhost:8080/

補足
・今回はネット検索（ChatGPT）に頼らずにテストに取り組みました（最後は頼ってしまいましたが...）。やはりまだまだ自分の力不足を痛感しました。より精進したいと思います。