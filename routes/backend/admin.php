<?php

use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\DashboardController;


// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


// blgo
// Route::resource('tag', 'TagController');
Route::resource('post', 'PostController');
Route::resource('category', 'CategoryController');

Route::resource('document-category', 'DocumentCategoryController');
Route::resource('document', 'DocumentController');


Route::delete('post/image/{id}', 'PostController@deleteImage');
Route::resource('announcement', 'AnnouncementController');
// Route::resource('category', 'CategoryController');

Route::delete('announcement/image/{id}', 'AnnouncementController@deleteImage');


Route::resource('forum/category', 'ForumCategoryController');


// teams controller
Route::resource('team', 'TeamController');

Route::resource('founding_members', 'founding_members_Controller');

Route::resource('supervisoryboard', 'Supervisory_Board_Controller');
Route::resource('advisory', 'Advisory_Board');
Route::resource('boardofdirectory', 'BoardOfDirectorsController');


// activity
Route::resource('activity', 'ActivityController');
Route::delete('activity/image/{id}', 'ActivityController@deleteImage');

// activity Pages
Route::resource('activitytype', 'ActivityTypeController');


// Units Pages
Route::resource('unittype', 'UnitTypeController');


// sectors and fields
Route::resource('sector', 'SectorController');
Route::resource('field', 'FieldController');


//gallery

Route::resource('gallery', 'GalleryController');
Route::delete('gallery/image/{id}', 'GalleryController@deleteImage');

//advert
Route::resource('advert', 'AdvertController');
Route::delete('advert/image/{id}', 'AdvertController@deleteImage');


// contacts form
Route::get('contact_forms', 'Contact_FormsController@index')->name('contact_forms.index');
Route::get('contact_forms/show/{id}', 'Contact_FormsController@show');
Route::delete('contact_forms/{id}', 'Contact_FormsController@destroy');


// settings
Route::get('setting', 'SettingController@edit')->name('setting.edit');
Route::post('setting', 'SettingController@updateSiteInfo')->name('setting.UpdateSiteInfo');


// static pages
Route::get('static', 'StaticPagesController@edit')->name('static.edit');
Route::post('static/genaral', 'StaticPagesController@updategeneral')->name('static.updategeneral');
Route::post('static/org', 'StaticPagesController@updateorg')->name('static.updateorg');
Route::post('static/privacy', 'StaticPagesController@updateprivacy')->name('static.updateprivacy');
Route::post('static/terims', 'StaticPagesController@updateterims')->name('static.updateterims');


// About Controller
Route::get('about', 'AboutController@edit')->name('about.edit');
Route::post('about', 'AboutController@update')->name('about.update');

//Event Controller
Route::get('events/{id}', 'EventController@show')->where('id', '[0-9]+');
Route::resource('events', 'EventController');
Route::post('events/image-upload', 'EventController@image_upload');
Route::delete('events/image/{id}', 'EventController@deleteImage');



//anlaşmalı firmalar
Route::resource('company', 'CompanyController');
Route::get('/company_delete/{id}', [CompanyController::class, 'delete'])->name('delete.company');
// slider
Route::resource('slider', 'SliderController');

Route::resource('sss', 'SssController');

// testimonials
Route::resource('testimonial', 'TestimonialController');

//Dues
Route::resource('dues', 'DuesController');
//Deposites
Route::resource('deposites', 'DepositesController');
//Shoppings
Route::resource('shoppings', 'ShoppingsController');
//Fiannceone
Route::resource('financeones', 'FinanceonesController');
//Fianncetwo
Route::resource('financetwos', 'FinancetwosController');
//Fianncetotal
Route::resource('financetotals', 'FinancetotalsController');



//Shopping
Route::resource('shopping', 'ShoppingController');

Route::resource('productorder', 'ProductOrder');
