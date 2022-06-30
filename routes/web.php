<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\PostController;

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

Route::get('/', [PageController::class, 'posts']);
Route::get('blog/{post}', [PageController::class, 'post'])->name('post');
Route::get('posts', [PostController::class, 'store'])->name('posts.store');
Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', 'App\Http\Controllers\Backend\PostController')
    ->middleware('auth')
    ->except('show');

