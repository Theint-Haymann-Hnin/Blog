<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentCountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeDislikeController;
use App\Http\Controllers\CommentController;

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

//Ui
Route::get('/', [UiController::class, 'index']);
Route::get('/post', [UiController::class, 'postIndex']);
Route::get('/post/{id}/detail', [UiController::class, 'postDetail']);
Route::post('/post/like/{postId}', [LikeDislikeController::class, 'like']);
Route::post('/post/dislike/{postId}', [LikeDislikeController::class, 'dislike']);
Route::post('/post/comment/{postId}', [CommentController::class, 'comment']);
Route::get('/search_posts', [UiController::class, 'search']);
Route::get('/search_posts_by_category/{categoryId}', [UiController::class, 'searchByCategory']);

//Admin
Route::group(['prefix'=>'admin','middleware'=> ['auth', 'IsAdmin']],function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index']);
    //users
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{id}/edit', [UserController::class, 'edit']);
    Route::post('/users/{id}/update', [UserController::class, 'update']);
    Route::post('/users/{id}/delete', [UserController::class, 'delete']);
    //skills
    Route::resource('/skills', SkillController::class);
    //Projects
    Route::resource('/projects', ProjectController::class);
    //Student Counts
    Route::get('/studentcounts', [StudentCountController::class, 'index']);
    Route::get('/studentcounts/store', [StudentCountController::class, 'store']);
    Route::post('/studentcounts/{id}/update', [StudentCountController::class, 'update']);
    //Categories
    Route::resource('/categories', CategoryController::class);
    //Posts
    Route::resource('/posts', PostController::class);
    Route::post('/comment/{commentId}/show_hide', [PostController::class, 'showHideComment']);


});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
