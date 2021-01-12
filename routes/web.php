<?php

use App\Http\Controllers\SslCommerzPaymentController;
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

// *******Frontend Routes*******//
Route::get('student/login', 'HomeController@stdlogin')->name('student.login');
Route::get('student/registration', 'HomeController@stdreg')->name('student.registration');

Route::group(['middleware'=>['student','auth']], function (){
    Route::get('/', 'HomeController@home')->name('user.home');

    /*Route::get('/', 'HomeController@index')->name('login');*/

    Route::get('schedule','ScheduleController@schedule')->name('schedule');
    Route::get('service','ServiceController@service')->name('service');
    Route::get('stuffinfo/{id}','ServiceController@stuffinfo')->name('stuffinfo');

    //********* Bus Traking ******//
    Route::get('locate_bus','FacilitiesController@locatebus')->name('locate_bus');
    Route::get('cityroute/{id}','FacilitiesController@cityroute')->name('cityroute');

    //********* Information ******//
    Route::get('about','InfoController@about')->name('about');
    Route::get('developers','InfoController@developers')->name('developers');
    Route::get('trnasportinfo','InfoController@trnasportinfo')->name('trnasportinfo');


    Route::get('gallery','GalleryController@gallery')->name('gallery');
    Route::get('blog','BlogController@blog')->name('blog');
    Route::get('post/{id}/details','BlogController@details')->name('post.details');
    Route::get('contact','ContactController@contact')->name('contact');

    //********** User  *********//

    Route::get('profile/{id}','UserController@profile')->name('student.profile');
    Route::post('profile/update','UserController@profileupdate')->name('profile.update');
    Route::get('ticket_list','UserController@ticketlist')->name('ticket_list');

    //********Online Ticket*******//

    Route::get('online_ticket','TicketController@ticket')->name('online_ticket');
    Route::post('available_bus','TicketController@availablebus')->name('available_bus');

    Route::get('bus_location','TicketController@buslocation')->name('bus_location');
    Route::get('seat/{price}','TicketController@seat')->name('seat');

    Route::post('passanger_info','TicketController@passangerinfo')->name('passanger_info');

    Route::get('add-to-cart/{id}', 'AddToCardController@addToCart')->name('add-cart');
    Route::get('remove/{id}', 'AddToCardController@removeFromCart')->name('remove');
    //add to card
    /*Route::get('/', 'AddToCardController@index')->name('products');
    Route::get('/cart', 'AddToCardController@cart')->name('cart');
    Route::get('/add-to-cart/{product}', 'AddToCardController@addToCart')->name('add-cart');
    */


    Route::get('/success', [SslCommerzPaymentController::class, 'successMessage']);
    Route::post('/successInfo', [SslCommerzPaymentController::class, 'successInfo']);

    Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('pay');
    Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

    Route::post('/success', [SslCommerzPaymentController::class, 'success']);
    Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
    Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

    Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


});

Auth::routes([
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

/*Route::get('/home', 'HomeController@index')->name('home');*/

// *******Admin Panel Routes*******//
Route::get('admin/login', 'Admin\DashboardController@login')->name('admin.login');

Route::group(['prefix'=>'admin', 'middleware'=>['admin','auth'], 'namespace'=>'Admin'], function (){
    Route::get('dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::get('orders', 'OrderController@index')->name('admin.order');
    Route::get('payment', 'OrderController@payment')->name('admin.payment');
    Route::resource('user', 'UserController');
    Route::resource('role', 'RoleController');
    Route::resource('slider', 'SliderController');
    Route::resource('video', 'VideoController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('tag', 'TagController');
    Route::resource('post', 'PostController');
    Route::resource('service', 'ServiceController');
    Route::resource('bus_category', 'BusCategoryController');
    Route::resource('route', 'RouteController');
    Route::resource('bus', 'BusController');
    Route::resource('stuff', 'StuffController');
    Route::resource('stoppages', 'StoppagesController');
    Route::resource('schedules', 'ScheduleController');
});
