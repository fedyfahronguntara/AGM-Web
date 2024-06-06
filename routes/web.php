<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('home');
Route::get('fullday', [App\Http\Controllers\PageController::class, 'fullday'])->name('fullday');
Route::get('transfer', [App\Http\Controllers\PageController::class, 'transfer'])->name('transfer');
Route::get('order', [App\Http\Controllers\PageController::class, 'order'])->name('order');
Route::post('search', [App\Http\Controllers\PageController::class, 'search'])->name('search');
Route::get('posts', [App\Http\Controllers\PageController::class, 'posts'])->name('posts');
Route::get('posts/{post:slug}', [App\Http\Controllers\PageController::class, 'detailPost'])->name('posts.show');
Route::get('paket-travel', [App\Http\Controllers\PageController::class, 'package'])->name('package');
Route::get('detail/{travelPackage:slug}', [App\Http\Controllers\PageController::class, 'detail'])->name('detail');
Route::post('cardetail/{car:id}', [App\Http\Controllers\PageController::class, 'cardetail'])->name('cardetail');
Route::post('orderdetail/{car:id}', [App\Http\Controllers\PageController::class, 'orderdetail'])->name('orderdetail');
Route::post('booking', [App\Http\Controllers\PageController::class, 'booking'])->name('booking');

Route::get('kontak-kami', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
// Route::post('kontak-kami', [App\Http\Controllers\PageController::class, 'getEmail'])->name('contact.email');
Route::get('/ordersearch', [App\Http\Controllers\PageController::class, 'searchForm'])->name('search.form');
Route::post('/ordersearch', [App\Http\Controllers\PageController::class, 'ordersearch'])->name('ordersearch');
Route::post('/feedback', [App\Http\Controllers\PageController::class, 'feedback'])->name('feedback');

Route::group(['middleware' => 'auth'], function() {

    Route::group(['middleware' => 'isAdmin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);
        Route::resource('cars', \App\Http\Controllers\Admin\CarController::class);
        Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class);
        Route::resource('feedbacks', \App\Http\Controllers\Admin\FeedbackController::class);
        Route::resource('travel-packages', \App\Http\Controllers\Admin\TravelPackageController::class);
        Route::resource('travel-packages.galleries', \App\Http\Controllers\Admin\GalleryController::class);
    });
    
});