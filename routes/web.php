<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Mail\UserWelcomeMail;
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

Auth::routes();

//temporary endpoint for the mails
Route::get('/email', function(){
    return new UserWelcomeMail();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//profile routes
Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');

//posts routes
Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create']);
Route::post('/p', [App\Http\Controllers\PostsController::class, 'store']);
Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show']);
Route::get('/posts/', [App\Http\Controllers\PostsController::class, 'index']);

//follow routes
Route::post('/follows/{user}', [App\Http\Controllers\FollowsController::class, 'store']);

