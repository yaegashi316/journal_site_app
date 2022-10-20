<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('articles', App\Http\Controllers\ArticleController::class);
                //という URL にアクセスすると、ArticleController の index アクション(メソッド)が呼び出されます。
                //resourceのときはアクション書かなくても自動で入力されてる

