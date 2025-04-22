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
use App\Http\Controllers\Website\CaseStudyController;
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
Route::get('/home', [HomeController::class, 'HomeNew'])->name('homenew');
Route::get('/home2', [HomeController::class, 'Home2'])->name('home2');
Route::get('/myHome', [HomeController::class, 'myHome'])->name('myHome');


Route::fallback(function () {
    return view('errors.404');
});


Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/about', [HomeController::class, 'About'])->name('about');

Route::get('/services', [HomeController::class, 'Services'])->name('services');
Route::get('/service/seo', [ServiceController::class, 'seo'])->name('seo');
Route::get('/service/website', [ServiceController::class, 'website'])->name('website');
Route::get('/service/social-media', [ServiceController::class, 'socialMedia'])->name('socialMedia');
Route::get('/service/digital-marketing', [ServiceController::class, 'digitalMarketing'])->name('digitalMarketing');
Route::get('/service/content-marketing', [ServiceController::class, 'contentMarketing'])->name('contentMarketing');
Route::get('/service/sem', [ServiceController::class, 'sem'])->name('sem');
Route::get('/service/photograpy-videograpy', [ServiceController::class, 'photoVideography'])->name('photoVideography');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/inside', [PortfolioController::class, 'portfolioInside'])->name('portfolioinside');
Route::get('/case-study', [CaseStudyController::class, 'index'])->name('case-study');
Route::get('/work-culture', [WorkCultureController::class, 'index'])->name('workculture');
Route::get('/careers', [HomeController::class, 'careers'])->name('careers');

Route::get('/blog', [BlogWebController::class, 'index'])->name('blog');
Route::get('/blog-inner/{slug}', [BlogWebController::class, 'innerBlog'])->name('blog-inner');
Route::get('/categoryBlog/{slug}', [BlogWebController::class, 'categoryBlog'])->name('categoryBlog');
Route::get('/tagBlog/{slug}', [BlogWebController::class, 'tagBlog'])->name('tagBlog');

Route::get('/industries/education', [IndustryController::class, 'education'])->name('education');
Route::get('/industries/healthcare', [IndustryController::class, 'healthcare'])->name('healthcare');
Route::get('/industries/FMCG', [IndustryController::class, 'FMCG'])->name('FMCG');
Route::get('/industries/news-media', [IndustryController::class, 'newsMedia'])->name('newsMedia');
Route::get('/industries/real-estate', [IndustryController::class, 'realEstate'])->name('realEstate');
Route::get('/industries/logistics', [IndustryController::class, 'logistics'])->name('logistics');
Route::get('/industries/fashion-lifestyle', [IndustryController::class, 'fashionLifestyle'])->name('fashionLifestyle');
Route::get('/industries/gaming', [IndustryController::class, 'gaming'])->name('gaming');
Route::get('/industries/home-interior', [IndustryController::class, 'homeInterior'])->name('homeInterior');
Route::get('/industries/automation', [IndustryController::class, 'automation'])->name('automation');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/privacy-and-policy', [HomeController::class, 'privacyAndPolicy'])->name('privacyAndPolicy');
Route::get('/terms-and-condition', [HomeController::class, 'termsAndcondition'])->name('termsAndcondition');

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
});
