<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ActionTypeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




//Route::get('/', function () {
 // return view('welcome');
//});


 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth','roles:admin'])->group(function() {

  Route::controller(AdminController::class)->group(function () {

    Route::get('/admin/dashboard', 'admin_dashboard')->name('admin.dashboard');
    Route::get('/admin/employee/add','add_employee')->name('admin.add.employee');
    Route::post('/admin/employee/store', 'store_employee')->name('admin.store.employee');
    Route::get('/admin/employee','show_admin_employee')->name('show.admin.employee');
    Route::get('/admin/logout','AdminLogout')->name('admin.logout');
    Route::post('/customer/{customer}/change-employee', 'changeEmployee')->name('customer.change.employee');


});

});

Route::middleware(['auth'])->group(function() {


Route::controller(EmployeeController::class)->group(function(){

    Route::get('/employee/customers', 'view_customers')->name('employee.customers');
    Route::post('/employee/store_customers', 'store_customers')->name('employee.store_customers');
    Route::get('/employee/logout','EmployeeLogout')->name('employee.logout');


  });
  Route::controller(ActionTypeController::class)->group(function(){

    Route::get('/action/type', 'index')->name('action.type.index');
    Route::get('/action/type/employee', 'view_employee')->name('action.type.employee');
    Route::post('/action/type', 'store')->name('action.type.store');

  });

  Route::controller(CustomerController::class)->group(function(){

    Route::get('/customer/index', 'index')->name('customer.index');
    Route::post('/cutomer/add', 'store')->name('customer.store');

  });


  Route::controller(ReportController::class)->group(function(){

    Route::get('/dashboard', 'index')->name('reports.index');
    Route::post('/reports/index', 'storeSelectedAction')->name('reports.store.action');

  });
});
