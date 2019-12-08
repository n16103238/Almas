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
Route::group(['middleware'=>['auth']],function(){
  Route::group(['middleware'=>['_admin']],function(){
    Route::get('/admin_dashboard', 'DashboardController@admin_dashboard')->name('admin_dashboard');
  });
});

Route::group(['middleware'=>['auth']],function(){
  Route::group(['middleware'=>['_pharmacist']],function(){
    Route::get('/pharmacist_dashboard', 'DashboardController@pharmacist_dashboard')->name('pharmacist_dashboard');
  });
});



//Dashboard
//Route::get('/dashboard/admin_dashboard', 'DashboardController@admin_dashboard')->name('admin_dashboard');
//Route::get('/dashboard/pharmacist_dashboard', 'DashboardController@pharmacist_dashboard')->name('pharmacist_dashboard');



//Invoice
Route::get('/invoice/add_invoice', 'InvoiceController@add_invoice')->name('add_invoice');
Route::get('/invoice/view_invoice', 'InvoiceController@view_invoice')->name('view_invoice');


//Medicine
Route::get('/medicine_list', 'MedicineController@medicine_list')->name('medicine_list');
Route::get('/add_medicine', 'MedicineController@add_medicine')->name('add_medicine');
Route::post('/add_medicine', 'MedicineController@create_medicine')->name('create_medicine');

//Category
Route::get('/medicine_category', 'MedicineController@medicine_category')->name('medicine_category');
Route::get('/add_category', 'MedicineController@add_category')->name('add_category');
Route::post('/create_category', 'MedicineController@create')->name('create_category');
//Category update
Route::get('/category/update/{id}', 'MedicineController@update_category')->name('update_category');
Route::post('/update_category/{id}', 'MedicineController@update')->name('update.category');
//Category delete
Route::post('/delete_category/{id}', 'MedicineController@delete')->name('delete.category');




//Role
Route::get('/role_list', 'RoleController@role_list')->name('role_list');
Route::get('/add_role', 'RoleController@add_role')->name('add_role');
Route::post('/add_role', 'RoleController@create_role')->name('create_role');

//Users
Route::get('/user_list', 'UserController@user_list')->name('user_list');
Route::get('/user_update/{user}', 'UserController@user_update')->name('user_update');
Route::post('/user_update/{user}', 'UserController@update')->name('update');


//Report
Route::get('/report/add_prescription', 'PharmacistController@add_prescription')->name('add_prescription');

//Pharmacist
Route::get('/pharmacist/add_prescription', 'PharmacistController@add_prescription')->name('add_prescription');
Route::get('/pharmacist/view_prescription', 'PharmacistController@view_prescription')->name('view_prescription');
