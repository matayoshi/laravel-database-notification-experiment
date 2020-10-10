# Laravel DatabaseNotification experiment

データベース通知をカスタマイズする場合の実験リポジトリ

## 環境

- Laravel 7.x
- PHP 7.3.x
- macOS Catalina 10.15.x
- SQLite

### SQLiteの設定

ファイルを作成して`DB_DATABASE`環境変数に絶対パスを指定するか、省略して初期値を利用する。  
初期値は `database/database.sqlite` の絶対パスが設定されます。

```
touch database/database.sqlite
```

## マイグレーション

```
php artisan migrate
```

## シーディング

```
composer dump-autoload
php artisan db:seed
```

## 環境の起動

```
php artisan serve
```

http://localhost:8000 にアクセス

## 参考ドキュメント

- [Notifications - Laravel - The PHP Framework For Web Artisans](https://laravel.com/docs/7.x/notifications)
- [通知 7.x Laravel](https://readouble.com/laravel/7.x/ja/notifications.html)

## License

[MIT license](https://opensource.org/licenses/MIT).
