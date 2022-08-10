## tilwindcssの拡張を働かせる
tailwind.config.jsファイルがないとダメっぽい  
[stack overflowリンク](https://stackoverflow.com/questions/69327331/vscode-tailwind-css-intellisense-not-working)

## artisanコマンドでコントローラーを作れる
appに入る
```bash
docker compose exec app bash
```

```bash
php artisan make:controller HelloController
```

## controllerのrouteが変わっている
```php
Route::get('hello','HelloController@index');
```
と書いていた所をLaravel8系では
```php
use App\Http\Controllers\HelloController;
Route::get('hello', [HelloController::class, 'index']);
```