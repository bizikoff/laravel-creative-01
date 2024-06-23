<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;

Route::aliasMiddleware('admin', AdminMiddleware::class);

Route::get('/', function () {
    return view('welcome');
})->name('welcome.index');

Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {
    Route::get('/posts', 'IndexController')->name('post.index');
    Route::get('/posts/create', 'CreateController')->name('post.create');

    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('post.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::group(['namespace' => 'Post'], function() {
        Route::get('/posts', 'IndexController')->name('admin.post.index');
    });
});

Route::get('/devices', [DeviceController::class, 'index'])->name('device.index');
Route::get('/devices/create', [DeviceController::class, 'create'])->name('device.create');
Route::post('/devices', [DeviceController::class, 'store'])->name('device.store');
Route::get('/devices/{device}', [DeviceController::class, 'show'])->name('device.show');
Route::get('/devices/{device}/edit', [DeviceController::class, 'edit'])->name('device.edit');
Route::patch('/devices/{device}', [DeviceController::class, 'update'])->name('device.update');
Route::delete('/devices/{device}', [DeviceController::class, 'destroy'])->name('device.destroy');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::patch('/news/{news}', [NewsController::class, 'update'])->name('news.update');
Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');

Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
