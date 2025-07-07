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

Route::group(['namespace' => 'Front'], function() {
   Route::get('/', 'EmployeeController@index')->name('employee.index');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function() {
   Route::get('/', 'EmployeeController@index')->name('admin.employees.index');
   Route::get('/employees/create', 'EmployeeController@create')->name('admin.employees.create');
   Route::post('/employees', 'EmployeeController@store')->name('admin.employees.store');
   Route::get('/employees/{employee}/edit', 'EmployeeController@edit')->name('admin.employees.edit');
   Route::get('/employees/{employee}', 'EmployeeController@show')->name('admin.employees.show');
   Route::patch('/employees/{employee}', 'EmployeeController@update')->name('admin.employees.update');
   Route::delete('/employees/{employee}', 'EmployeeController@destroy')->name('admin.employees.destroy');

   Route::group(['namespace' => 'Company'], function () {
       Route::get('/companies', 'IndexController')->name('admin.company.index');
       Route::get('/companies/create', 'CreateController')->name('admin.company.create');
       Route::post('/companies', 'StoreController')->name('admin.company.store');
//       Route::post('/companies/{company}', 'ShowController')->name('admin.company.show');
       Route::get('/companies/{company}/edit', 'EditController')->name('admin.company.edit');
       Route::patch('/companies/{company}', 'UpdateController')->name('admin.company.update');
       Route::delete('/companies/{company}', 'DestroyController')->name('admin.company.destroy');
   });
});
