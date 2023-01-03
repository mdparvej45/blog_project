<?php

use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::GET('/', function (){
    return view('add_post');
});
Route::GET('/add-post-here', [BlogController::class, 'post'])-> name('post.add');
Route::GET('/all-posts-here', [BlogController::class, 'posts'])->name('post.all');
Route::POST('/store-post', [BlogController::class, 'post_store'])-> name('post.store');

