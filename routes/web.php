<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthorController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::get('/post/{post:slug}', [PostController::class, 'show'])->name('post');

Route::get('/category/{category:slug}', [PostController::class, 'category'])->name('category');

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('authors/{author:username}',[AuthorController::class, 'author']);
