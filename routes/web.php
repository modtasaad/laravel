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

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts', [PostController::class, 'store']);

Route::get('/posts/update', [PostController::class, 'update'])->name('posts.update');
 
Route::post('/posts', [PostController::class, 'modify']);

Route::get('/posts/delete', [PostController::class, 'delete'])->name('posts.delete');

Route::post('/posts', [PostController::class, 'confirm']);

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');