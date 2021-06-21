<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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

//post
Route::resource('/post',PostController::class);

//for catogries

Route::get('/heart',[CategoryController::class,'Heart']);
Route::get('/cancer',[CategoryController::class,'Cancer']);
Route::get('/vision',[CategoryController::class,'Vision']);
Route::get('/infants',[CategoryController::class,'Infants']);
Route::get('/other',[CategoryController::class,'others']);


Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';

// Route::get('/posts', function () {
//     return view('post');
// });

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/about-us', function () {
    return view('about');
});
