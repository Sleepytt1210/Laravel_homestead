<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('index');


/**
 * Blogs routing
 */
Route::patch('/blog/{id}', [BlogController::class, 'patch'])->name('blog.patch');

Route::resource('blog', BlogController::class)->except('index');


/**
 * Users routing
 */
Route::get('/user', [UserController::class, 'show'])->name('user.info');

# Update user page
Route::put('/user', [UserController::class, 'update'])->name('user.update');

# Get user avatar
Route::get('/user/avatar', [UserController::class, 'avatarShow'])->name('user.avatar');

# Update user avatar
Route::put('/user/avatar', [UserController::class, 'avatarUpdate'])->name('user.avatar.update');

# Get user blog 
Route::get('/user/blog', [UserController::class, 'blog'])->name('user.blog');

# Delete a user's blog
Route::delete('/user/blog/{id}', [UserController::class, 'blog'])->name('user.blog.delete');

# User's comment
Route::post('/blog/{id}/comment', CommentController::class)->name('blog.comment');

/**
 * Temp Authentication
 */
Route::get('/login/page', function () {return view('auth.login');})->name('login.page');

Route::get('/register/page', function () {return view('auth.register');})->name('register.page');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::any('/test', [TestController::class, 'test']);