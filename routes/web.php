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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/profile', 'PageController@profile');
Route::get('/editprofile', 'PageController@editProfile');
Route::post('/updateprofile', 'PageController@update');

Route::get('/history', 'PageController@history');



Route::get('/create', 'PageController@createEntry');
Route::post('/submitEntry', 'PageController@submitEntry');



Route::get('/updateEntry/{id}',
    ['as' => 'salesUI.updateEntry',
        'middleware' => ['auth'],
        'uses' => 'PageController@updateEntry']);

Route::post('/updateEntrySubmit/{id}',
    ['middleware' => ['auth'],
        'uses' => 'PageController@updateEntrySubmit']
);


/*****BD EX*********************************************************/

Route::get('/clientInfo', 'BDxPageController@clientInfo');

Route::get('/clientUpdate', 'BDxPageController@clientUpdate');
Route::get('/clients','BDxPageController@clients');

Route::get('/clientProfile/{id}/', 'BDxPageController@clientProfile');

Route::get('/BDMeetingList','BDxPageController@BDMeetingList');

Route::get('/BDEprofile','BDxPageController@BDEprofile');

Route::get('/editProfileBDE','BDxPageController@editProfileBDE');
Route::post('/updateProfileBDE','BDxPageController@updateProfile');

Route::get('/editClientProfile/{id}/','BDxPageController@editClientProfile');
Route::post('/updateClientProfile', 'BDxPageController@updateClient');
Route::post('/submitClientInfo','BDxPageController@submitClientInfo');


Route::post('/bdhistory','BDxPageController@submitClientInfo');


/**********************************/


/****Admin********************/


Route::get('/adminprofile','AdminController@AdminProfile');

Route::get('/AdminBDEProfile/{id}/','AdminController@AdminBDEProfile');




Route::get('/AdminClients', 'AdminController@AdminClients');

Route::get('/AdminBDEList','AdminController@AdminBDxList');

Route::get('/AdminClientProfile/{id}/', 'AdminController@AdminClientProfile');


Route::get('/AdminSEProfile/{id}/','AdminController@AdminSalesProfile' );

Route::get('/AdminSEList', 'AdminController@AdminSalesList' );

Route::get('/AdminEditClientProfile/{id}/','AdminController@AdminEditClientProfile');
Route::post('/AupdateClientProfile', 'AdminController@AupdateClient');

Route::get('/AdminMeetingList','AdminController@AdminMeetingList');
Route::get('/AdminFollowupList','AdminController@AdminFollowupList');


