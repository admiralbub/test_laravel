<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
Auth::routes();
Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');;


Route::prefix('admin')->name('admin.')->middleware('admin')->group(function() {
    Route::resource('/', App\Http\Controllers\Admin\HomeController::class);
    

    Route::resource('/articles', App\Http\Controllers\Admin\ArticleController::class);

    Route::get('/articles/{id}', [App\Http\Controllers\Admin\ArticleController::class, 'show']); //Вывести страницу для редактирование записи
 
    //Route::post('/articles/edit/{id}',[App\Http\Controllers\Admin\ArticleController::class, 'update']); //Пост запрос для редактирование статьи

    //Route::get('/articles/delete/{id}',[App\Http\Controllers\Admin\ArticleController::class, 'destroy']); //UGEt запрос для удаление статьи

    //Route::resource('/articles/add_article', 'ArticleController@store');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog/{id}', [App\Http\Controllers\BlogController::class, 'show']);

//Кешируем Моделей блогов

Route::get('cache/article', function() {
   return Cache::remember('articles', now()->addHour(), function(){
        return DB::table('articles')->get();
    });
});
