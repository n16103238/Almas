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


//Medicine
Route::get('/medicine_list', 'MedicineController@medicine_list')->name('medicine_list');
Route::get('/add_medicine', 'MedicineController@add_medicine')->name('add_medicine');
Route::post('/add_medicine', 'MedicineController@create_medicine')->name('create_medicine');
//Medicine Update
Route::get('/medicine/update/{id}', 'MedicineController@update_medicine')->name('update_medicine');
Route::post('/update_medicine/{id}', 'MedicineController@update')->name('update.medicine');
//Medicine Delete
Route::post('/delete_medicine', 'MedicineController@delete')->name('delete.medicine');



//Category
Route::get('/medicine_category', 'CategoryController@medicine_category')->name('medicine_category');
Route::get('/add_category', 'CategoryController@add_category')->name('add_category');
Route::post('/create_category', 'CategoryController@create')->name('create_category');
//Category update
Route::get('/category/update/{id}', 'CategoryController@update_category')->name('update_category');
Route::post('/update_category/{id}', 'CategoryController@update')->name('update.category');
//Category delete
Route::post('/delete_category', 'CategoryController@delete')->name('delete.category');

//Role
Route::get('/role_list', 'RoleController@role_list')->name('role_list');
Route::get('/add_role', 'RoleController@add_role')->name('add_role');
Route::post('/add_role', 'RoleController@create_role')->name('create_role');
//Role update
Route::get('/role/update/{id}', 'RoleController@update_role')->name('update_role');
Route::post('/update_role/{id}', 'RoleController@update')->name('update.role');
//Role delete
Route::post('/delete_role', 'RoleController@delete')->name('delete.role');

//Users
Route::get('/user_list', 'UserController@user_list')->name('user_list');
Route::get('/user_update/{user}', 'UserController@user_update')->name('user_update');
Route::post('/user_update/{user}', 'UserController@update')->name('update');

//Staff
Route::get('/staff_list', 'StaffController@staff_list')->name('staff_list');
Route::get('/add_staff', 'StaffController@add_staff')->name('add_staff');
Route::post('/create_staff', 'StaffController@create')->name('create_staff');
//Staff update
Route::get('/staff/update/{id}', 'StaffController@update_staff')->name('update_staff');
Route::post('/update_staff/{id}', 'StaffController@update')->name('update.staff');
//Staff delete
Route::post('/delete_staff', 'StaffController@delete')->name('delete.staff');


//Reports---Sales----!
Route::get('/reports', 'ReportController@reports')->name('reports');
Route::get('/add_reports', 'ReportController@add_reports')->name('add_reports');
Route::post('/create_reports', 'ReportController@create_reports')->name('create_reports');
//Reports---Sales Details----!
Route::get('/details', 'ReportController@details')->name('details');
Route::get('/add_reports_details', 'ReportController@add_reports_details')->name('add_reports_details');
Route::post('/create_reports_details', 'ReportController@create_reports_details')->name('create_reports_details');
//Reports---Expense----!
Route::get('/reports2', 'ReportController@reports2')->name('reports2');
Route::get('/add_reports2', 'ReportController@add_reports2')->name('add_reports2');
Route::post('/create_reports2', 'ReportController@create_reports2')->name('create_reports2');


//Profiles
Route::get('/profile', 'ProfileController@index')->name('profile_information');
Route::post('/profile', 'ProfileController@add_information')->name('add_information');
//Profile Update
Route::post('/update_profile', 'ProfileController@update_information')->name('update_information');


//***********Pharmacist Dashboard***********
//POS sales
Route::get('/sales', 'SalesController@sales')->name('sales');
Route::post('/add_sales', 'SalesController@add_sales')->name('add_sales');
//pos sales details
Route::get('/sales_details', 'SalesController@sales_details')->name('sales_details');
Route::post('/add_sales_details', 'SalesController@add_sales_details')->name('add_sales_details');
Route::get('/sales_confirm/{id}', 'SalesController@confirm')->name('confirm');


//Expenses
Route::get('/expense_list', 'ExpenseController@expense_list')->name('expense_list');
Route::get('/add_expense', 'ExpenseController@add_expense')->name('add_expense');
Route::post('/create_expense', 'ExpenseController@create_expense')->name('create_expense');
//Expenses update
Route::get('/expense/update/{id}', 'ExpenseController@update_expense')->name('update_expense');
Route::post('/update_expense/{id}', 'ExpenseController@update')->name('update.expense');
//Expenses delete
Route::post('/delete_expense', 'ExpenseController@delete')->name('delete.expense');

//Stock
Route::get('/stock', 'StockController@stock')->name('stock');
Route::get('/add_stock', 'StockController@add_stock')->name('add_stock');
Route::post('/create_stock', 'StockController@create')->name('create_stock');
