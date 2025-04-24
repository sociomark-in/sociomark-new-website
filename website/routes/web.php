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

Route::get('/portfolio/euro/social-media-work', [PortfolioController::class, 'euro'])->name('euro');
Route::get('/portfolio/bumchumps/social-media-work', [PortfolioController::class, 'bumchumps'])->name('bumchumps');
Route::get('/portfolio/jivana/social-media-work', [PortfolioController::class, 'jivana'])->name('jivana');
Route::get('/portfolio/road-to-safety/social-media-work', [PortfolioController::class, 'roadToSafety'])->name('roadToSafety');
Route::get('/portfolio/nodwin/social-media-work', [PortfolioController::class, 'nodwin'])->name('nodwin');
Route::get('/portfolio/lime/social-media-work', [PortfolioController::class, 'lime'])->name('lime');
Route::get('/portfolio/button-dabao-desh-banao/social-media-work', [PortfolioController::class, 'buttonbabaoDeshBanao'])->name('buttonbabaoDeshBanao');
Route::get('/portfolio/castrol/social-media-work', [PortfolioController::class, 'castrol'])->name('castrol');
Route::get('/portfolio/mission-insure-india/social-media-work', [PortfolioController::class, 'missionInsureIndia'])->name('missionInsureIndia');
Route::get('/portfolio/real-estate-awards/social-media-work', [PortfolioController::class, 'realEstateAward'])->name('realEstateAward');
Route::get('/portfolio/cosplay-genie/social-media-work', [PortfolioController::class, 'cosplayGenie'])->name('cosplayGenie');
Route::get('/portfolio/smart-cities-of-india/social-media-work', [PortfolioController::class, 'smartCityOfIndia'])->name('smartCityOfIndia');
Route::get('/portfolio/mahindra-first-choice-services/social-media-work', [PortfolioController::class, 'mahidraFirstChoice'])->name('mahidraFirstChoice');
Route::get('/portfolio/the-professional-couriers/social-media-work', [PortfolioController::class, 'theProffessionalCouriers'])->name('theProffessionalCouriers');
Route::get('/portfolio/team-cashless-india/social-media-work', [PortfolioController::class, 'teamCashlessIndia'])->name('teamCashlessIndia');
Route::get('/portfolio/sportz-consult/social-media-work', [PortfolioController::class, 'sportzConsult'])->name('sportzConsult');
Route::get('/portfolio/ayushakti/social-media-work', [PortfolioController::class, 'ayushaktisocoialM'])->name('ayushaktisocoialM');




Route::get('/case-study', [CaseStudyController::class, 'index'])->name('case-study');
Route::get('/case-study/stemrxbio', [CaseStudyController::class, 'stemrxbio'])->name('stemrxbio');
Route::get('/case-study/expert4travel', [CaseStudyController::class, 'expert4travel'])->name('expert4travel');
Route::get('/case-study/the-professional-couriers', [CaseStudyController::class, 'theProfessionalCouriers'])->name('the-professional-couriers');
Route::get('/case-study/eduauraa', [CaseStudyController::class, 'eduauraa'])->name('eduauraa');
Route::get('/case-study/shahenaz', [CaseStudyController::class, 'shahenaz'])->name('shahenaz');
Route::get('/case-study/okinawascooters', [CaseStudyController::class, 'okinawascooters'])->name('okinawascooters');
Route::get('/case-study/ayushakti', [CaseStudyController::class, 'ayushakti'])->name('ayushakti');
Route::get('/case-study/nodwin-gaming', [CaseStudyController::class, 'nodwinGaming'])->name('nodwinGaming');
Route::get('/case-study/lime', [CaseStudyController::class, 'lime'])->name('lime');
Route::get('/case-study/button-dabao-desh-banao', [CaseStudyController::class, 'buttondabaodeshbanao'])->name('buttondabaodeshbanao');
Route::get('/case-study/road-to-safety-initiative', [CaseStudyController::class, 'roadtosafetyinitiative'])->name('roadtosafetyinitiative');
Route::get('/case-study/acetattoz', [CaseStudyController::class, 'acetattoz'])->name('acetattoz');
Route::get('/case-study/smarter-india', [CaseStudyController::class, 'smarterIndia'])->name('smarterIndia');
Route::get('/case-study/real-estate-awards', [CaseStudyController::class, 'realestateawards'])->name('realestateawards');


Route::get('/work-culture', [WorkCultureController::class, 'index'])->name('workculture');
Route::get('/careers', [HomeController::class, 'careers'])->name('careers');

Route::get('/blog', [BlogWebController::class, 'index'])->name('blog');
Route::get('/blog-inner/{slug}', [BlogWebController::class, 'innerBlog'])->name('blog-inner');
Route::get('/categoryBlog/{slug}', [BlogWebController::class, 'categoryBlog'])->name('categoryBlog');
Route::get('/tagBlog/{slug}', [BlogWebController::class, 'tagBlog'])->name('tagBlog');

Route::get('/industry/education', [IndustryController::class, 'education'])->name('education');
Route::get('/industry/healthcare', [IndustryController::class, 'healthcare'])->name('healthcare');
Route::get('/industry/fmcg', [IndustryController::class, 'FMCG'])->name('FMCG');
Route::get('/industry/news-media', [IndustryController::class, 'newsMedia'])->name('newsMedia');
Route::get('/industry/real-estate', [IndustryController::class, 'realEstate'])->name('realEstate');
Route::get('/industry/logistics', [IndustryController::class, 'logistics'])->name('logistics');
Route::get('/industry/fashion-lifestyle', [IndustryController::class, 'fashionLifestyle'])->name('fashionLifestyle');
Route::get('/industry/gaming', [IndustryController::class, 'gaming'])->name('gaming');
Route::get('/industry/home-interior', [IndustryController::class, 'homeInterior'])->name('homeInterior');
Route::get('/industry/automation', [IndustryController::class, 'automation'])->name('automation');

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
