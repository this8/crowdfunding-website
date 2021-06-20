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

Route::resource('/post',PostController::class);

Route::get('publicPost',[PostController::class,'publicPost']);


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
