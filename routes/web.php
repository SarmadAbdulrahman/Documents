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
    // CreateUser changeUserRole  StoreUserRole  StoreUserPassword  AssignDepartmentAdmin  StoreUserDepartment
        Route::get('/','Admin\AdminController@index');
        Route::get('/CreateUser','Admin\AdminController@create');
        Route::post('/StoreUser','Admin\AdminController@StoreUser');
        Route::get('/changeUserRole','Admin\AdminController@changeUserRole');
        Route::post('/StoreUserRole','Admin\AdminController@StoreUserRole');
        Route::post('/StoreUserPassword','Admin\AdminController@StoreUserPassword');
        Route::post('/StoreUserDepartment','Admin\AdminController@StoreUserDepartment');
        Route::get('/AssignDepartmentAdmin','Admin\AdminController@AssignDepartmentAdmin');

});


//

Route::group(['prefix'=>'ClientAgent','middleware' => ['role:ClientAgent']], function () {
    // CreateUser  StoreUser   GetDetails
    Route::get('/','ClientAgent\ClientAgentController@index');
    Route::get('/CreateTicket','ClientAgent\ClientAgentController@CreateTicket');
    Route::post('/StoreTicket','ClientAgent\ClientAgentController@StoreTicket');
    Route::get('/ShowTicket','ClientAgent\ClientAgentController@ShowTicket');
    Route::get('/GetDetails','ClientAgent\ClientAgentController@GetDetails');
    Route::post('/StoreReply','ClientAgent\ClientAgentController@StoreReply');

});




 // IwDepartmentAdmin

Route::group(['prefix'=>'TaskManager','middleware' => ['role:TaskManager']], function () {
    // CreateUser  AssingTaskToUser
    Route::get('/','TaskManager\TaskManagerController@index');
    Route::post('/AssingDepartment','TaskManager\TaskManagerController@AssingDepartment');

});





Route::group(['prefix'=>'IwDepartmentAdmin','middleware' => ['role:IwDepartmentAdmin']], function () {
    // CreateUser  GetDetails  IwDepartmentAdmin AssingTaskToUser
    Route::get('/','IwDepartmentAdmin\IwDepartmentAdminController@index');
    Route::get('/GetDetails','IwDepartmentAdmin\IwDepartmentAdminController@GetDetails');
    Route::post('/StoreReply','IwDepartmentAdmin\IwDepartmentAdminController@StoreReply');
    Route::post('/AssingTaskToUser','IwDepartmentAdmin\IwDepartmentAdminController@AssingTaskToUser');

});

//IwAgent

Route::group(['prefix'=>'IwAgent','middleware' => ['role:IwAgent']], function () {
    
     Route::get('/','IwAgent\IwAgentController@index');
     Route::get('/GetDetails','IwAgent\IwAgentController@GetDetails');
     Route::post('/StoreReply','IwAgent\IwAgentController@StoreReply');
     Route::get('/profile','IwAgent\IwAgentController@profile');

});




