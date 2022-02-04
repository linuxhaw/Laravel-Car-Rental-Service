<?php

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

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

Auth::routes();
Route::get('/', 'dashboardController@index');



Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('carlisting', function () {
    return view('carlisting');
});

Route::get('carlisting',        			array('as'=>'carlisting','uses'=>'WelcomeController@index'));

Route::get('booking/{id}',        			array('as'=>'booking','uses'=>'WelcomeController@create'));

Route::post('booking',        			array('as'=>'booking','uses'=>'WelcomeController@store'));


Route::group(['prefix' => 'backend','middleware' => ['auth']], function () {  

    Route::get('dashboard',        			array('as'=>'dashboard','uses'=>'dashboardController@index'));

    Route::get('car',               array('as'=>'car','uses'=>'CarController@index'));

    Route::get('car_create',               array('as'=>'car_create','uses'=>'CarController@create'));

    Route::get('car_list',               array('as'=>'car_list','uses'=>'CarController@show'));
    // Route::get('car/create',               array('as'=>'car/create','uses'=>'CarController@index'));
    Route::post('car/store',               array('as'=>'car/store','uses'=>'CarController@store'));

    // Route::get('car/edit/{id}',               array('as'=>'car/edit','uses'=>'CarController@create'));
    Route::get('car_edit/{id}',               array('as'=>'car_edit','uses'=>'CarController@edit'));

    Route::post('car/update/{id}',               array('as'=>'car_update','uses'=>'CarController@update'));

    Route::get('car/delete/{id}',               array('as'=>'car_delete','uses'=>'CarController@destroy'));

    Route::get('customer',               array('as'=>'customer','uses'=>'CustomerController@index'));

    Route::get('owner',               array('as'=>'owner','uses'=>'OwnerController@index'));

    Route::get('rent',               array('as'=>'rent','uses'=>'RentController@index'));

    Route::get('report',               array('as'=>'report','uses'=>'ReportController@index'));

    Route::get('report/previewpdf/{type?}',               array('as'=>'report','uses'=>'ReportController@pdfPreview'));

    Route::get('register_create',               array('as'=>'registration_create','uses'=>'RegisterController@create'));

    Route::post('register/store',               array('as'=>'store','uses'=>'RegisterController@store'));

    Route::get('profile',                array('as'=>'profile','uses'=>'ProfileController@index'));

    Route::post('profile/{id}',                array('as'=>'profile/update','uses'=>'ProfileController@update'));

    Route::get('change-password', 'PasswordController@index');

    Route::post('change-password', 'PasswordController@store')->name('change.password');
});



Route::group(['prefix' => 'ownerpage','middleware' => ['auth']], function () {  

    Route::get('dashboard',        			array('as'=>'dashboard','uses'=>'OwnerpageController@index'));

    Route::get('create',        			array('as'=>'create','uses'=>'OwnerpageController@create'));

    Route::post('store',        			array('as'=>'store','uses'=>'OwnerpageController@store'));

    Route::get('car_edit/{id}',        			array('as'=>'car_edit','uses'=>'OwnerpageController@edit'));

    Route::post('car/update/{id}',               array('as'=>'car_update','uses'=>'OwnerpageController@update'));

    Route::get('car_delete/{id}',        			array('as'=>'car_delete','uses'=>'OwnerpageController@destroy'));
    
    Route::get('rental_list',               array('as'=>'rental_list','uses'=>'OwnerpageController@show'));

    Route::get('profile',                array('as'=>'profile','uses'=>'OwnerpageProfileController@index'));

    Route::post('profile/{id}',                array('as'=>'profile/update','uses'=>'OwnerpageProfileController@update'));

    Route::get('change-password', 'OwnerpagePasswordController@index');

    Route::post('change-password', 'OwnerpagePasswordController@store')->name('change.password');

});



Route::group(['prefix'=> 'frontend','middleware'=>['auth']], function (){

    Route::get('/profile',                array('as'=>'profile','uses'=>'UserProfileController@index'));

    Route::post('/profile/{id}',                array('as'=>'profile/update','uses'=>'UserProfileController@update'));

    Route::get('/change-password', 'UserPasswordController@index');

    Route::post('/change-password', 'UserPasswordController@store')->name('change.password');

    Route::get('/activities',                array('as'=>'activities','uses'=>'ActivitiesController@show'));
    
});

/*
sufee-admin-dashboard-master Sample Routes
*/
Route::get('/sampletemplateview', function () {
    return view('sampletemplate_views.index');
});

Route::get('/sampletemplateview/ui-buttons', function () {
    return view('sampletemplate_views.ui-buttons');
});

/*
Testing Routes for email sending
*/
Route::get('email', array('as'=>'email','uses'=>'MailController@index'));

Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendbasicemail2','MailController@basic_email2');

Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendhtmlemail2','MailController@html_email2');

Route::get('sendattachmentemail','MailController@attachment_email');
Route::get('sendattachmentemail2','MailController@attachment_email2');
/*
Testing Routes for email sending
*/


/*
Testing Routes for upload
*/
Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');
/*
Testing Routes for upload
*/

/*
Testing Routes for Ajax
*/
Route::get('ajax',function(){
return view('message');
});
Route::post('/getmsg','AjaxController@index'); 	
/*
Testing Routes for Ajax
*/

Route::get('/error',function(){
	abort(404);
});
Auth::routes();

Route::get('/home', 'HomeController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
