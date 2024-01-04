<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;

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
Route::get('/', [HomeController::class, 'index']);
Route::get('/test', [TestController::class, 'index']);
Route::get('/delete-test', [TestController::class, 'indexdelete']);
Route::post('/test', [TestController::class, 'post']);
Route::delete('/delete-test', [TestController::class, 'deleteTest'])->name('delete.test');
Route::get('/gioi-thieu', [InfoController::class, 'index'])->name('info');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin-login');
    Route::get('/home', [AdminController::class, 'getHome'])->name('admin-home');
    Route::post('/home', [AdminController::class, 'postAdmin'])->name('admin-home');
    Route::get('/home/list-product', [AdminController::class, 'getProducts'])->name('admin-products');
    Route::get('/home/product-add', [AdminController::class, 'getFormProductAdd'])->name('admin-products-add');
    Route::post('/home/product-add', [AdminController::class, 'postFormProductAdd'])->name('admin-products-add');
    Route::get('/home/new-add', [AdminController::class, 'getFormNewAdd'])->name('admin-news-add');
    Route::post('/home/new-add', [AdminController::class, 'postFormNewAdd'])->name('admin-news-add');
    Route::get('/home/list-new', [AdminController::class, 'getNews'])->name('admin-news');
});
Route::prefix('/tin-tuc')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('news');
    Route::get('/chi-tiet-{id}', [NewsController::class, 'getNews'])->name('full-new');
});
Route::prefix('/san-pham')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products');
    Route::get('/chi-tiet-{id}', [ProductController::class, 'getProduct'])->name('full-product');
});