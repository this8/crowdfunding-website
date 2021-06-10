<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::resource('posts',PostController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Heart',[App\Http\Controllers\PagesController::class, 'index'])->name('Heart');

Route::get('/Cancer',[App\Http\Controllers\PagesController::class, 'Cancer'])->name('Cancer');

Route::get('/Vision',[App\Http\Controllers\PagesController::class, 'Vision'])->name('Vision');

Route::get('/Infants',[App\Http\Controllers\PagesController::class, 'Infants'])->name('Infants');

// Route::post('/posts/store',[PostController::class,'store'])->name('post');





