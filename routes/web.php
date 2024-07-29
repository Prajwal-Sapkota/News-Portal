<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ClientSideController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsGalleryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
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


Route::get('/', [ClientSideController::class,'index'])->name('index');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', UserController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('banners', BannerController::class);
    Route::resource('members', MemberController::class);
    Route::resource('news-categories', NewsCategoryController::class);
    Route::resource('news', NewsController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('news-galleries', NewsGalleryController::class);
});


