<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

*/

//Retrieve All Employees Records
Route::get('/employees', 'EmployeeController@all')->name('employees.all');

//Create An Employee Record
Route::post('/employees', 'EmployeeController@store')->name('employees.store');

//Retrieve An Employee ID Record
Route::get('/employees/{id}', 'EmployeeController@show')->name('employees.show');


//Update An Employee ID Record
//Route::put('/employees/{id}', 'EmployeeController@update')->name('employees.update');

//Remove An Employee Record
//Route::delete('/employees/{id}', 'EmployeeController@destory')->name('employees.destroy');


