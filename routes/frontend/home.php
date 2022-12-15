<?php


use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\member_post;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\MembersController;
use App\Http\Controllers\Frontend\FrontPagesController;
use App\Http\Controllers\Frontend\SssController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\DuesController;
use App\Http\Controllers\Frontend\User\DepositesController;
use App\Http\Controllers\Frontend\User\FinanceonesController;
use App\Http\Controllers\Frontend\User\FinancetwosController;
use App\Http\Controllers\Frontend\TeknikDokumanlarController;
use App\Http\Controllers\Frontend\User\ShoppingController;



/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('iletisim', [ContactController::class, 'index'])->name('contact');

Route::get('hakkimizda', [AboutController::class, 'index'])->name('about');

Route::get('sss', [SssController::class, 'sss'])->name('sss');

Route::get('teknik-dokumanlar', 'FrontPagesController@document')->name('teknik-dokumanlar');
Route::get('teknik-dokumanlar/kategori/{id}', 'FrontPagesController@sub_category')->name('sub_category');
Route::get('teknik-dokumanlar/detay/{id}', 'FrontPagesController@document_detay')->name('document_detay');



Route::get('nereden-alinir', 'FrontPagesController@nereden_alinir')->name('nereden-alinir');

//Route::get('teknik-dokumanlar', [TeknikDokumanlarController::class, 'index'])->name('teknik-dokumanlar');
//Route::get('teknik-dokumanlar', [TeknikDokumanlarController::class, 'index'])->name('detay');
//
//// news
//Route::get('news', 'FrontPagesController@news')->name('news');
////getting all activities by  cliking in unittype
//Route::get('news/unit/{unittype}', 'FrontPagesController@unit_type_news')->name('unit_type_news');
//// activity single
//Route::get('news/single/{post}', 'FrontPagesController@news_single')->name('new');


Route::get('about/members', [MembersController::class, 'index'])->name('members');
Route::get('about/members/{member}', [MembersController::class, 'member'])->name('member');



Route::get('about/board-of-directors', [FrontPagesController::class, 'board_of_directors'])->name('board_of_directors');


// gallery
Route::get('videolar', [FrontPagesController::class, 'gallery'])->name('gallery');





//getting organizational-structure
Route::get('about/organizational-structure', 'FrontPagesController@organizational_structure')->name('organizational_structure');


//getting organizational-structure
Route::get('about/executive-management', 'FrontPagesController@executive_management')->name('executive_management');
Route::get('about/privacy_policy', 'FrontPagesController@privacy_policy')->name('privacy_policy');


//getting organizational-structure
Route::get('about/founding_members', 'FrontPagesController@founding_members')->name('founding_members');

//Denetleme Kurulu
Route::get('about/supervisoryboard', 'FrontPagesController@supervisoryboard')->name('supervisoryboard');
Route::get('about/advisory', 'FrontPagesController@advisory')->name('advisory');
Route::get('about/boardofdirectory', 'FrontPagesController@boardofdirectory')->name('boardofdirectory');



//getting bylaws
Route::get('about/bylaws', 'FrontPagesController@bylaws')->name('bylaws');



Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');



// activities
Route::get('activities', 'FrontPagesController@activities')->name('activities');

//getting all activities by  cliking in activitytype
Route::get('activities/{activitytype}', 'FrontPagesController@activitytype')->name('activitytype');

//getting all activities by  cliking in unittype
Route::get('units/{unittype}', 'FrontPagesController@unittype')->name('unittype');

// activity single
Route::get('activities/single/{activity}', 'FrontPagesController@activity')->name('activity');





// events
Route::get('/etkinlikler', 'FrontPagesController@events')->name('events');

Route::get('/member_postings', 'FrontPagesController@member_posting')->name('member_postings');


// event single
Route::get('/etkinlikler/detay/{event?}', 'FrontPagesController@event')->name('event');

Route::get('/member_postings/single/{member_posting?}', 'FrontPagesController@member_posting_single')->name('member_posting');





Route::get('/markets', 'FrontPagesController@markets')->name('markets');
Route::get('/markets/single/{market?}', 'FrontPagesController@market')->name('market');


Route::get('/companies', 'FrontPagesController@companies')->name('companies');
Route::get('companies/companie-detail/{companie?}', 'FrontPagesController@companie')->name('companie');

Route::get('/shopping', 'FrontPagesController@shopping')->name('shopping');
Route::get('/shopping/shopping-detail/{shoppings?}', 'FrontPagesController@shoppings')->name('shoppings');



// news
Route::get('blog', 'FrontPagesController@news')->name('news');
// activity single
Route::get('blog/detay/{post}', 'FrontPagesController@news_single')->name('new');

// announcements
Route::get('duyurular', 'FrontPagesController@announcements')->name('announcements');
// activity single
Route::get('duyurular/detay/{announcement}', 'FrontPagesController@announcements_single')->name('announcement');




Route::get('sss', 'FrontPagesController@sss')->name('sss');

Route::get('productorder', 'FrontPagesController@productorder')->name('productorder');




//getting terms-of-use
Route::get('/terms-of-use', 'FrontPagesController@terms_of_use')->name('terms_of_use');

//getting terms-of-use
Route::get('/privacy-policy', 'FrontPagesController@privacy_policy')->name('privacy_policy');








/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');
        Route::get('dues', [DuesController::class, 'index'])->name('dues');
        Route::get('showdues/{id}', [DuesController::class, 'show'])->name('showdues');
        Route::get('deposites', [DepositesController::class, 'index'])->name('deposites');
        Route::get('showdeposites/{id}', [DepositesController::class, 'show'])->name('showdeposites');
        Route::get('financeones', [FinanceonesController::class, 'index'])->name('financeones');
        Route::get('showfinanceones/{id}', [FinanceonesController::class, 'show'])->name('showfinanceones');
        Route::get('financetwos', [FinancetwosController::class, 'index'])->name('financetwos');
        Route::get('showfinancetwos/{id}', [FinancetwosController::class, 'show'])->name('showfinancetwos');
        Route::get('financetotals', [FinancettotalsController::class, 'index'])->name('financetotals');
        Route::get('showfinancetotals/{id}', [FinancettotalsController::class, 'show'])->name('showfinancetotals');
        Route::get('shopping', [ShoppingController::class, 'index'])->name('shopping');
        Route::get('showshopping', [ShoppingController::class, 'show'])->name('showshopping');

        // User Profile Specific
        Route::patch('profile/updatePersonalInfo', [ProfileController::class, 'updatePersonalInfo'])->name('profile.updatePersonalInfo');
        Route::patch('profile/updateCompanyInfo', [ProfileController::class, 'updateCompanyInfo'])->name('profile.updateCompanyInfo');
        Route::patch('profile/updateContactInfo', [ProfileController::class, 'updateContactInfo'])->name('profile.updateContactInfo');

    });
});
