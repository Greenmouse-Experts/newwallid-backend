<?php

use Illuminate\Support\Facades\Route;

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


// Auth
Auth::routes();
Route::get('/register/account-type', 'Auth\RegisterController@accountTypeView');
Route::get('/register/organization', 'Auth\RegisterController@organizationView');
Route::post('/register/organization', 'Auth\RegisterController@createOrganization');
Route::get('/email/verify', 'Auth\RegisterController@verifyEmail')->name('email.verify');


// Pages
Route::get('/', 'General\PagesController@index');
Route::get('/faq', 'General\PagesController@faq');
Route::get('/about', 'General\PagesController@about');
Route::get('/pricing', 'General\PagesController@pricing');
Route::get('/contact', 'General\PagesController@contact');
Route::get('/account-created', 'General\PagesController@created');
Route::get('/password-reset-success', 'General\PagesController@created_password_success');

Route::get('/payments/verify', 'General\PagesController@paymentResponse');
Route::get('/payments/verify/subscription', 'General\PagesController@SubscriptionPaymentResponse');


// Dashboard
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


 // Orgs
Route::group(['middleware' => ['auth'], 'prefix' => 'organization'], function() {

    Route::get('/', 'Organization\Dashboard@index');
    Route::get('/{path}', 'Organization\Dashboard@index')->where(['/path' => '([A-Z\d-\/_.]+)?']);
    Route::get('/{path}/{path2}', 'Organization\Dashboard@index')->where([
        '/path' => '([A-Z\d-\/_.]+)?',
        '/path2' => '([A-Z\d-\/_.]+)?']);
    Route::get('/{path}/{path2}/{path3}', 'Organization\Dashboard@index')->where([
        '/path' => '([A-Z\d-\/_.]+)?',
        '/path2' => '([A-Z\d-\/_.]+)?',
        '/path3' => '([A-Z\d-\/_.]+)?']);


});


// Individual
Route::group(['middleware' => ['auth'], 'prefix' => 'individual'], function() {
    Route::get('/', 'Individual\DashboardController@index');
    Route::get('/{path}', 'Individual\DashboardController@index')->where(['/path' => '([A-Z\d-\/_.]+)?']);
    Route::get('/{path}/{path2}', 'Individual\DashboardController@index')->where([
        '/path' => '([A-Z\d-\/_.]+)?',
        '/path2' => '([A-Z\d-\/_.]+)?']);
    Route::get('/{path}/{path2}/{path3}', 'Individual\DashboardController@index')->where([
        '/path' => '([A-Z\d-\/_.]+)?',
        '/path2' => '([A-Z\d-\/_.]+)?',
        '/path3' => '([A-Z\d-\/_.]+)?']);
});



// General
Route::get('ticket-plans', 'General\PagesController@ticketPlan');
Route::get('create-ticket', 'General\PagesController@ticket')->middleware('auth');

// Admin
Route::group(['prefix' => 'admin'], function() {

    Route::get('/login', 'Auth\LoginController@adminView');
    Route::post('/login', 'Auth\LoginController@adminLogin');

    Route::group(['namespace' => 'Admin','middleware' => 'auth:admin'], function() {

        Route::get('/', 'HomeController@index');
        Route::get('/{path}', 'HomeController@index')->where(['/path' => '([A-Z\d-\/_.]+)?']);

        Route::get('/{path}/{path2}', 'HomeController@index')->where([
        '/path' => '([A-Z\d-\/_.]+)?',
        '/path2' => '([A-Z\d-\/_.]+)?']);

    Route::get('/{path}/{path2}/{path3}', 'HomeController@index')->where([
        '/path' => '([A-Z\d-\/_.]+)?',
        '/path2' => '([A-Z\d-\/_.]+)?',
        '/path3' => '([A-Z\d-\/_.]+)?']);
    });
});

Route::prefix('test')->group(function() {
    Route::get('url', 'TestController@signedUrl');
    Route::get('email', 'TestController@email');
    Route::get('notify', 'TestController@notify');
    Route::get('unique', 'TestController@unique');
    Route::get('user', 'TestController@getuser');
});
