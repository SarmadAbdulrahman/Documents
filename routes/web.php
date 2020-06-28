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

Route::get('/', function () {
    return view('welcome');
});


// https://dotnet.microsoft.com/apps/aspnet/mvc

Route::get('/arabic','Helper\HelperController@arabic');
Route::get('/english','Helper\HelperController@english');

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');





/*
|--------------------------------------------------------------------------
| Web Routes SystemAdministrator
|--------------------------------------------------------------------------
| this is for SystemAdministrator of the system
|
|
|   ClientAgent
|
*/


Route::group(['prefix'=>'SystemAdministrator','middleware' => ['role:SystemAdministrator']], function () {
    // CreateUser
        Route::get('/','Admin\AdminController@index');
        Route::get('/CreateUser','Admin\AdminController@create');
        Route::post('/StoreUser','Admin\AdminController@StoreUser');


});




Route::group(['prefix'=>'ClientAgent','middleware' => ['role:ClientAgent']], function () {
    // CreateUser  StoreUser   GetDetails
    Route::get('/','ClientAgent\ClientAgentController@index');
    Route::get('/CreateTicket','ClientAgent\ClientAgentController@CreateTicket');
    Route::post('/StoreTicket','ClientAgent\ClientAgentController@StoreTicket');
    Route::get('/ShowTicket','ClientAgent\ClientAgentController@ShowTicket');
    Route::get('/GetDetails','ClientAgent\ClientAgentController@GetDetails');
    Route::post('/StoreReply','ClientAgent\ClientAgentController@StoreReply');


});











