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
Route::get('/our-team', [HomeController::class, 'About'])->name('team');

Route::get('/services', [HomeController::class, 'Services'])->name('services');
Route::get('/service/seo', [ServiceController::class, 'seo'])->name('seo');
Route::get('/service/website', [ServiceController::class, 'website'])->name('website');
Route::get('/service/social-media', [ServiceController::class, 'socialMedia'])->name('socialMedia');
Route::get('/service/digital-marketing', [ServiceController::class, 'digitalMarketing'])->name('digitalMarketing');
Route::get('/service/content-marketing', [ServiceController::class, 'contentMarketing'])->name('contentMarketing');
Route::get('/service/sem', [ServiceController::class, 'sem'])->name('sem');
Route::get('/service/photography-videography', [ServiceController::class, 'photoVideography'])->name('photoVideography');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/social-media', [PortfolioController::class, 'portfolioInside'])->name('portfolioSocio');

Route::get('/portfolio/euro/social-media-work', [PortfolioController::class, 'euro'])->name('euro');
Route::get('/portfolio/bumchumps/social-media-work', [PortfolioController::class, 'bumchumps'])->name('bumchumps');
Route::get('/portfolio/jivana/social-media-work', [PortfolioController::class, 'jivana'])->name('jivana');
Route::get('/portfolio/road-to-safety/social-media-work', [PortfolioController::class, 'roadToSafety'])->name('roadToSafety');
Route::get('/portfolio/nodwin/social-media-work', [PortfolioController::class, 'nodwin'])->name('nodwin');
Route::get('/portfolio/lime/social-media-work', [PortfolioController::class, 'lime'])->name('limesocio');
Route::get('/portfolio/button-dabao-desh-banao/social-media-work', [PortfolioController::class, 'buttonbabaoDeshBanao'])->name('buttonbabaoDeshBanaoSocio');
Route::get('/portfolio/castrol/social-media-work', [PortfolioController::class, 'castrol'])->name('castrolSocial');
Route::get('/portfolio/mission-insure-india/social-media-work', [PortfolioController::class, 'missionInsureIndia'])->name('missionInsureIndiaSocial');
Route::get('/portfolio/real-estate-awards/social-media-work', [PortfolioController::class, 'realEstateAward'])->name('realEstateAwardsocio');
Route::get('/portfolio/cosplay-genie/social-media-work', [PortfolioController::class, 'cosplayGenie'])->name('cosplayGenieSocio');
Route::get('/portfolio/smart-cities-of-india/social-media-work', [PortfolioController::class, 'smartCityOfIndia'])->name('smartCityOfIndia');
Route::get('/portfolio/mahindra-first-choice-services/social-media-work', [PortfolioController::class, 'mahidraFirstChoice'])->name('mahidraFirstChoiceSocio');
Route::get('/portfolio/the-professional-couriers/social-media-work', [PortfolioController::class, 'theProffessionalCouriers'])->name('theProffessionalCouriers');
Route::get('/portfolio/team-cashless-india/social-media-work', [PortfolioController::class, 'teamCashlessIndia'])->name('teamCashlessIndiaSocio');
Route::get('/portfolio/sportz-consult/social-media-work', [PortfolioController::class, 'sportzConsult'])->name('sportzConsultSocio');
Route::get('/portfolio/ayushakti/social-media-work', [PortfolioController::class, 'ayushaktisocoialM'])->name('ayushaktisocoialM');
Route::get('/portfolio/ai-awards/social-media-work', [PortfolioController::class, 'aiawards'])->name('aiawardsSocial');
Route::get('/portfolio/smarter-india/social-media-work', [PortfolioController::class, 'smarterindia'])->name('smarterindiaSocio');
Route::get('/portfolio/grill-box/social-media-work', [PortfolioController::class, 'grillbox'])->name('grillboxSocial');
Route::get('/portfolio/kolkata-rolls/social-media-work', [PortfolioController::class, 'kolkatarolls'])->name('kolkatarollsSocio');
Route::get('/portfolio/hollywood-opticians/social-media-work', [PortfolioController::class, 'hollywoodopticians'])->name('hollywoodopticiansSocial');
Route::get('/portfolio/foresight-opticals/social-media-work', [PortfolioController::class, 'foresightopticals'])->name('foresightopticalsSocial');
Route::get('/portfolio/inifd-vashi/social-media-work', [PortfolioController::class, 'inifdvashi'])->name('inifdvashiSocial');
Route::get('/portfolio/profinet/branding-work', [PortfolioController::class, 'profinet'])->name('profinet');
Route::get('/portfolio/ayushakti/website-work', [PortfolioController::class, 'ayushaktiweb'])->name('ayushaktiweb');
Route::get('/portfolio/electrocare/website-work', [PortfolioController::class, 'electrocareweb'])->name('electrocareweb');
Route::get('/portfolio/offthehookgrabandgo/website-work', [PortfolioController::class, 'offthehookgrabandgo'])->name('offthehookgrabandgo');
Route::get('/portfolio/offthehooknanaimo/website-work', [PortfolioController::class, 'offthehooknanaimo'])->name('offthehooknanaimo');
Route::get('/portfolio/barebonesfishhouse/website-work', [PortfolioController::class, 'barebonesfishhouse'])->name('barebonesfishhouse');
Route::get('/portfolio/kinnaltoys/website-work', [PortfolioController::class, 'kinnaltoys'])->name('kinnaltoys');
Route::get('/portfolio/trollerfishandchips/website-work', [PortfolioController::class, 'trollerfishandchips'])->name('trollerfishandchips');
Route::get('/portfolio/lime/website-work', [PortfolioController::class, 'limeweb'])->name('limeweb');
Route::get('/portfolio/ayushakti-usa/website-work', [PortfolioController::class, 'ayushaktiusaweb'])->name('ayushaktiusaweb');
Route::get('/portfolio/dr-smita-naram/website-work', [PortfolioController::class, 'drsmitanaramweb'])->name('drsmitanaramweb');
Route::get('/portfolio/real-estate-awards/website-work', [PortfolioController::class, 'realEAweb'])->name('realEAweb');
Route::get('/portfolio/portraiture-by-pari/website-work', [PortfolioController::class, 'portraitureByPariWeb'])->name('portraitureByPariWeb');
Route::get('/portfolio/profinet/website-work', [PortfolioController::class, 'profinetWeb'])->name('profinetWeb');
Route::get('/portfolio/aainos/website-work', [PortfolioController::class, 'aainosWeb'])->name('aainosWeb');
Route::get('/portfolio/hollywood-opticians/branding-work', [PortfolioController::class, 'hollywoodOpticiansBranding'])->name('hollywoodOpticiansBranding');
Route::get('/portfolio/foresight-opticals/branding-work', [PortfolioController::class, 'foresightOpticalsBranding'])->name('foresightOpticalsBranding');

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

Route::get('/industries', [IndustryController::class, 'home'])->name('industry_home');
Route::get('/industry/{segment}', [IndustryController::class, 'single'])->name('industry_single');

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
