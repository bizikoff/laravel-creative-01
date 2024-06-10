<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome.index');

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');

Route::post('/posts', [PostController::class, 'store'])->name('post.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::patch('/posts/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy');

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
