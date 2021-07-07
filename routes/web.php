<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;
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
    return view('/auth/login');
});
Auth::routes();

Route::middleware ('auth') -> group (function () {

    Route::get('/home', [ForumController::class, 'index']);

    Route::get('/threads/{threads}', [ThreadController::class, 'index']);

    Route::get('/threads/posts/{posts}', [PostsController::class, 'index']);

    Route::get('/threads/posts/comments/{comments}', [CommentsController::class, 'index']);
    Route::post('/threads/posts/comments/{comments}', [CommentsController::class, 'store']);

});
