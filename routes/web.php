<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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
// for user: index, show

Route::get('/', 'App\Http\Controllers\ArticleController@index')->name('main-index');

Route::get('/article/{id}', 'App\Http\Controllers\ArticleController@show')->name('show-article');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'App\Http\Controllers\ArticleController@index')->name('home');


//for admin
// prefix /admin/create - /admin/store - /admin/update .....

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('admin-index');
    Route::get('/create', 'App\Http\Controllers\ArticleController@create')->name('article-create');
    Route::post('/store', 'App\Http\Controllers\ArticleController@store')->name('article-store');
    Route::get('/edit/{id}', 'App\Http\Controllers\ArticleController@edit')->name('article-edit');
    Route::put('/update/{id}', 'App\Http\Controllers\ArticleController@update')->name('article-update');
    Route::put('/delete', 'App\Http\Controllers\ArticleController@destroy')->name('article-destroy');
});

