<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContatListController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\BlogWebController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Website\IndustryController;
use App\Http\Controllers\Website\WorkCultureController;
use App\Http\Controllers\Admin\AdminWorkCultureController;
use App\Http\Controllers\Website\PortfolioController;
use App\Http\Controllers\Website\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('Frontend/dashboard');
});
Route::get('/test', function () {
    return view('Frontend/test');
});


Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/home', [HomeController::class, 'HomeNew'])->name('homenew');
Route::get('/home2', [HomeController::class, 'Home2'])->name('home2');
Route::get('/about', [HomeController::class, 'About'])->name('about');
Route::get('/blog', [BlogWebController::class, 'index'])->name('blog');
// Route::get('/blog-inner/{id}', [BlogWebController::class, 'innerBlog'])->name('blog-inner');
// Route::get('/blog-category/{id}', [BlogWebController::class, 'categoryBlog'])->name('categoryBlog');
// Route::get('/blog-tag/{id}', [BlogWebController::class, 'tagBlog'])->name('tagBlog');
// Route::get('/blog-category/{categoryName}', [BlogWebController::class, 'categoryBlog'])->name('categoryBlog');

Route::get('/blog-inner/{slug}', [BlogWebController::class, 'innerBlog'])->name('blog-inner');
Route::get('/categoryBlog/{slug}', [BlogWebController::class, 'categoryBlog'])->name('categoryBlog');
Route::get('/tagBlog/{slug}', [BlogWebController::class, 'tagBlog'])->name('tagBlog');
Route::get('/services', [HomeController::class, 'Services'])->name('services');
Route::get('/service/seo', [ServiceController::class, 'index'])->name('seo');
Route::get('/work-culture', [WorkCultureController::class, 'index'])->name('workculture');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/inside', [PortfolioController::class, 'portfolioInside'])->name('portfolioinside');
Route::get('/industries/ecommerce', [IndustryController::class, 'index'])->name('industry');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

// admin

Route::get('/admin/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/admin/register', [AuthController::class, 'register'])->name('storeregister');

Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);

Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['admin:admin,hr,business,user'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/addservices', [ServicesController::class, 'addServices'])->name('addservices');
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
    Route::resource('blogs', BlogController::class);
    Route::get('Admin/Work-gallary/create', [AdminWorkCultureController::class, 'create']);
    Route::get('admin/enquiryList', [ContatListController::class,'index'])->name('contactList');
    // Route::get('/categories', [CategoryController::class, 'Create'])->name('categoryForm');
    // Route::post('/categories', [CategoryController::class, 'store'])->name('categoryStore');
    // Route::get('/blogList', [BlogController::class, 'index'])->name('showblogs');
    // Route::get('/blog', [BlogController::class, 'create'])->name('blogForm');
    // Route::post('/blog', [BlogController::class, 'store'])->name('blogStore');
    // Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('editBlog');
    // Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blogUpdate'); // Notice 'blogUpdate'
    // Route::delete('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('deleteBlog');
});
