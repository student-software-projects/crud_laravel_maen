<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\company\CompanyController;
//compañias
Route::get('company',[CompanyController::class,'index'])->name('company.index');
Route::get('company/create',[CompanyController::class,'create'])->name('company.create');
Route::post('company',[CompanyController::class,'store'])->name('company.store');
Route::get('company/{id}',[CompanyController::class,'show'])->name('company.show');
Route::get('company/edit/{id}',[CompanyController::class,'edit'])->name('company.edit');
Route::put('company/{id}',[CompanyController::class,'update'])->name('company.update');
Route::delete('company/{id}',[CompanyController::class,'destroy'])->name('company.destroy');
// productos
//Route::get('product',[CompanyController::class,'index'])->name('company.index');
Route::get('product/create',[CompanyController::class,'create'])->name('product.create');

