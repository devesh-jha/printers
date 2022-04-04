<?php

use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\EmpsalaryController;
use App\Http\Controllers\Backend\ExpenseController;
use App\Http\Controllers\Backend\FormController;
use App\Http\Controllers\Backend\IncomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SaleController;
use App\Http\Controllers\Backend\VendorController;
use App\Models\Expense;
use Illuminate\Support\Facades\Log;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {


    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('vendor',VendorController::class);

Route::resource('product',ProductController::class);
Route::resource('form',FormController::class);
Route::post('form/create', [FormController::class, 'fetchProduct']);
Route::resource('expense',ExpenseController::class);
Route::resource('income',IncomeController::class);
Route::resource('employee',EmployeeController::class);
Route::resource('empsalary',EmpsalaryController::class);
Route::resource('sale',SaleController::class);

Route::get('invoice/{sale:id}', [SaleController::class,'viewInvoice'])->name('sale.view');
