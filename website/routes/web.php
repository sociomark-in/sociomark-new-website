<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('Frontend/dashboard');
});


Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/about', [HomeController::class, 'About'])->name('about');
Route::get('/services', [HomeController::class, 'Services'])->name('services');
Route::get('/contact', [HomeController::class, 'Contact'])->name('contact');

// admin

Route::get('/admin/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/admin/register', [AuthController::class, 'register'])->name('storeregister');

Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);

Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['admin:admin,hr,business,user'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/addservices', [ServicesController::class, 'addServices'])->name('addservices');
    Route::get('/categories', [CategoryController::class, 'index'])->name('categoryForm');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categoryStore');
    Route::get('/blogList', [BlogController::class, 'index'])->name('showblogs');
    Route::get('/blog', [BlogController::class, 'create'])->name('blogForm');
    Route::post('/blog', [BlogController::class, 'store'])->name('blogStore');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('editBlog');
    Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blogUpdate'); // Notice 'blogUpdate'
    Route::delete('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('deleteBlog');
});
