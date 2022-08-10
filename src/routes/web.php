<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::getで簡単ルーティング
Route::get('hello/', function () {
    return '<html><body><h1>hello</h1><p>this is sample page.</p></body></html>';
});

// ゲットパラメーター受けて色々できる
Route::get('/user/{id}', function ($id) {
    return 'User ' . $id;
});

Route::get('hello', [HelloController::class, 'index']);
