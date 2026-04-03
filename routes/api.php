<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\InventoryController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\SaleController;
use App\Http\Controllers\Api\PurchaseController;
use App\Http\Controllers\Api\ClosingStatementController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\SalaryController;
use App\Http\Controllers\Api\ExpenseController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('inventories', InventoryController::class);

Route::apiResource('locations', LocationController::class);
Route::apiResource('sales', SaleController::class);
Route::apiResource('purchases', PurchaseController::class);
Route::apiResource('closing-statements', ClosingStatementController::class);
Route::apiResource('employees', EmployeeController::class);
Route::apiResource('salaries', SalaryController::class);
Route::apiResource('expenses', ExpenseController::class);