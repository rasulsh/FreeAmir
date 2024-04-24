<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;



Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');

Route::resource('subjects', Controllers\SubjectController::class);
Route::resource('transactions', Controllers\TransactionController::class);
Route::resource('invoices', Controllers\InvoiceController::class);
Route::resource('products', Controllers\ProductController::class);
Route::resource('product-groups', Controllers\ProductGroupController::class);
Route::resource('customers', Controllers\CustomerController::class);
Route::resource('customer-groups', Controllers\CustomerGroupController::class);
Route::resource('bank-accounts', Controllers\BankAccountController::class);
Route::resource('banks', Controllers\BankController::class);
Route::resource('configs', Controllers\ConfigController::class);
Route::group(['prefix' => 'management'], function () {
    Route::resource('users', Controllers\Management\UserController::class);
    Route::resource('permissions', Controllers\Management\PermissionController::class)->except(['show']);
    Route::resource('roles', Controllers\Management\RoleController::class)->except(['show']);
});
