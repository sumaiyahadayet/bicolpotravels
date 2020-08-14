<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/unsubscribe', function () {
    return view('unsubscribe');
});
Auth::routes();
Route::get('/admin/dashboard', function () {

    return view('admin.dashboard.index');
})->name('dashboard');
Route::get('/admin/banner', function () {
    return view('admin.banner.index');
})->name('banner');
Route::get('/admin/team', function () {
    return view('admin.team.index');
})->name('team');
Route::get('/admin/service', function () {
    return view('admin.service.index');
})->name('service');
Route::get('/admin/contact', function () {
    return view('admin.contact.index');
})->name('contact');
Route::get('/admin/phone', function () {
    return view('admin.phone.index');
})->name('phone');
Route::get('/admin/email', function () {
    return view('admin.email.index');
})->name('email');
Route::get('/admin/fb', function () {
    return view('admin.fb.index');
})->name('fb');
Route::get('/admin/skype', function () {
    return view('admin.skype.index');
})->name('skype');
Route::get('/admin/support', function () {
    return view('admin.support.index');
})->name('support');
Route::get('/admin/event', function () {
    return view('admin.event.index');
})->name('event');
Route::get('/admin/about', function () {
    return view('admin.about.index');
})->name('about');
Route::get('/admin/bg', function () {
    return view('admin.bg.index');
})->name('bg');
Route::get('/admin/pack', function () {
    return view('admin.pack.index');
})->name('pack');
Route::get('/admin/client', function () {
    return view('admin.client.index');
})->name('client');
Route::get('/admin/emaild', function () {
    return view('admin.emaild.index');
})->name('emaild');
Route::get('/admin/user_details', function () {
    return view('admin.user_details.index');
})->name('user_details');
Route::get('admin/sendemail', 'SendmailController@index')->name('sendemail');;
Route::post('admin/sendemail/send', 'SendmailController@send');
Route::get('admin/sendemail/delete-user/{id}', 'Sendmail2Controller@Delete')->name('dalete-user');

Route::get('/insert-email', 'Controller@InsertEmail')->name('insert-email');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/contact', 'ContactController@index')->name('contact');
Route::get('/admin/pack', 'PackController@index')->name('pack');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/admin/banner', 'BannerController@index')->name('banner');
Route::get('/admin/add-banner', 'BannerController@AddView')->name('add-banner');
Route::post('/admin/add-banner', 'BannerController@AddBanner')->name('submit-add-banner');
Route::get('/admin/edit-banner/{id}', 'BannerController@Edit')->name('edit-banner');
Route::post('/admin/update-banner', 'BannerController@Update')->name('update-banner');
Route::get('/admin/delete-banner/{id}', 'BannerController@Delete')->name('dalete-banner');

Route::get('/admin/user_details', 'UserController@index')->name('user_details');
Route::get('/admin/add-user_details', 'UserController@AddView')->name('add-user_details');
Route::post('/admin/add-user_details', 'UserController@AddUser')->name('submit-add-user_details');
Route::get('/admin/edit-user_details/{id}', 'UserController@Edit')->name('edit-user_details');
Route::post('/admin/update-user_details', 'UserController@Update')->name('update-user_details');
Route::get('/admin/delete-user_details/{id}', 'UserController@Delete')->name('dalete-user_details');

Route::get('/admin/team', 'TeamController@index')->name('team');
Route::get('/admin/add-team', 'TeamController@AddView')->name('add-team');
Route::post('/admin/add-team', 'TeamController@AddTeam')->name('submit-add-team');
Route::get('/admin/edit-team/{id}', 'TeamController@Edit')->name('edit-team');
Route::post('/admin/update-team', 'TeamController@Update')->name('update-team');
Route::get('/admin/delete-team/{id}', 'TeamController@Delete')->name('dalete-team');

Route::get('/admin/service', 'ServiceController@index')->name('service');
Route::get('/admin/add-service', 'ServiceController@AddView')->name('add-service');
Route::post('/admin/add-service', 'ServiceController@AddService')->name('submit-add-service');
Route::get('/admin/edit-service/{id}', 'ServiceController@Edit')->name('edit-service');
Route::post('/admin/update-service', 'ServiceController@Update')->name('update-service');
Route::get('/admin/delete-service/{id}', 'ServiceController@Delete')->name('dalete-service');

Route::get('/admin/phone', 'PhoneController@index')->name('phone');
Route::get('/admin/add-phone', 'PhoneController@AddView')->name('add-phone');
Route::post('/admin/add-phone', 'PhoneController@AddPhone')->name('submit-add-phone');
Route::get('/admin/edit-phone/{id}', 'PhoneController@Edit')->name('edit-phone');
Route::post('/admin/update-phone', 'PhoneController@Update')->name('update-phone');
Route::get('/admin/delete-phone/{id}', 'PhoneController@Delete')->name('dalete-phone');

Route::get('/admin/email', 'EmailController@index')->name('email');
Route::get('/admin/add-email', 'EmailController@AddView')->name('add-email');
Route::post('/admin/add-email', 'EmailController@AddEmail')->name('submit-add-email');
Route::get('/admin/edit-email/{id}', 'EmailController@Edit')->name('edit-email');
Route::post('/admin/update-email', 'EmailController@Update')->name('update-email');
Route::get('/admin/delete-email/{id}', 'EmailController@Delete')->name('dalete-email');

Route::get('/admin/fb', 'FbController@index')->name('fb');
Route::get('/admin/add-fb', 'FbController@AddView')->name('add-fb');
Route::post('/admin/add-fb', 'FbController@AddFb')->name('submit-add-fb');
Route::get('/admin/edit-fb/{id}', 'FbController@Edit')->name('edit-fb');
Route::post('/admin/update-fb', 'FbController@Update')->name('update-fb');
Route::get('/admin/delete-fb/{id}', 'FbController@Delete')->name('dalete-fb');

Route::get('/admin/skype', 'SkypeController@index')->name('skype');
Route::get('/admin/add-skype', 'SkypeController@AddView')->name('add-skype');
Route::post('/admin/add-skype', 'SkypeController@AddSkype')->name('submit-add-skype');
Route::get('/admin/edit-skype/{id}', 'SkypeController@Edit')->name('edit-skype');
Route::post('/admin/update-skype', 'SkypeController@Update')->name('update-skype');
Route::get('/admin/delete-skype/{id}', 'SkypeController@Delete')->name('dalete-skype');

Route::get('/admin/support', 'SupportController@index')->name('support');
Route::get('/admin/add-support', 'SupportController@AddView')->name('add-support');
Route::post('/admin/add-support', 'SupportController@AddSupport')->name('submit-add-support');
Route::get('/admin/edit-support/{id}', 'SupportController@Edit')->name('edit-support');
Route::post('/admin/update-support', 'SupportController@Update')->name('update-support');
Route::get('/admin/delete-support/{id}', 'SupportController@Delete')->name('dalete-support');

Route::get('/admin/event', 'EventController@index')->name('event');
Route::get('/admin/add-event', 'EventController@AddView')->name('add-event');
Route::post('/admin/add-event', 'EventController@AddEvent')->name('submit-add-event');
Route::get('/admin/edit-event/{id}', 'EventController@Edit')->name('edit-event');
Route::post('/admin/update-event', 'EventController@Update')->name('update-event');
Route::get('/admin/delete-event/{id}', 'EventController@Delete')->name('dalete-event');

Route::get('/admin/offer', 'OfferController@index')->name('offer');
Route::get('/admin/add-offer', 'OfferController@AddView')->name('add-offer');
Route::post('/admin/add-offer', 'OfferController@AddOffer')->name('submit-add-offer');
Route::get('/admin/edit-offer/{id}', 'OfferController@Edit')->name('edit-offer');
Route::post('/admin/update-offer', 'OfferController@Update')->name('update-offer');
Route::get('/admin/delete-offer/{id}', 'OfferController@Delete')->name('dalete-offer');

Route::get('/admin/about', 'AboutController@index')->name('about');
Route::get('/admin/add-about', 'AboutController@AddView')->name('add-about');
Route::post('/admin/add-about', 'AboutController@AddAbout')->name('submit-add-about');
Route::get('/admin/edit-about/{id}', 'AboutController@Edit')->name('edit-about');
Route::post('/admin/update-about', 'AboutController@Update')->name('update-about');
Route::get('/admin/delete-about/{id}', 'AboutController@Delete')->name('dalete-about');

Route::get('/admin/bg', 'BgController@index')->name('bg');
Route::get('/admin/add-bg', 'BgController@AddView')->name('add-bg');
Route::post('/admin/add-bg', 'BgController@AddBg')->name('submit-add-bg');
Route::get('/admin/edit-bg/{id}', 'BgController@Edit')->name('edit-bg');
Route::post('/admin/update-bg', 'BgController@Update')->name('update-bg');
Route::get('/admin/delete-bg/{id}', 'BgController@Delete')->name('dalete-bg');

Route::get('/admin/emaild', 'EmaildController@index')->name('emaild');
Route::get('/admin/add-emaild', 'EmaildController@AddView')->name('add-emaild');
Route::post('/admin/add-emaild', 'EmaildController@AddEmaild')->name('submit-add-emaild');
Route::get('/admin/edit-emaild/{id}', 'EmaildController@Edit')->name('edit-emaild');
Route::post('/admin/update-emaild', 'EmaildController@Update')->name('update-emaild');
Route::get('/admin/delete-emaild/{id}', 'EmaildController@Delete')->name('dalete-emaild');

Route::get('/admin/dompack', 'DompackController@index')->name('dompack');
Route::get('/admin/add-dompack', 'DompackController@AddView')->name('add-dompack');
Route::post('/admin/add-dompack', 'DompackController@AddDompack')->name('submit-add-dompack');
Route::get('/admin/edit-dompack/{id}', 'DompackController@Edit')->name('edit-dompack');
Route::post('/admin/update-dompack', 'DompackController@Update')->name('update-dompack');
Route::get('/admin/delete-dompack/{id}', 'DompackController@Delete')->name('dalete-dompack');

Route::get('/admin/intpack', 'IntpackController@index')->name('intpack');
Route::get('/admin/add-intpack', 'IntpackController@AddView')->name('add-intpack');
Route::post('/admin/add-intpack', 'IntpackController@AddIntpack')->name('submit-add-intpack');
Route::get('/admin/edit-intpack/{id}', 'IntpackController@Edit')->name('edit-intpack');
Route::post('/admin/update-intpack', 'IntpackController@Update')->name('update-intpack');
Route::get('/admin/delete-intpack/{id}', 'IntpackController@Delete')->name('dalete-intpack');

Route::get('/admin/client', 'CLientController@index')->name('client');
Route::get('/admin/add-client', 'CLientController@AddView')->name('add-client');
Route::post('/admin/add-client', 'CLientController@AddCLient')->name('submit-add-client');
Route::get('/admin/edit-client/{id}', 'CLientController@Edit')->name('edit-client');
Route::post('/admin/update-client', 'CLientController@Update')->name('update-client');
Route::get('/admin/delete-client/{id}', 'CLientController@Delete')->name('dalete-client');
