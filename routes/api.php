<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobPostController;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::post('validatecompany',[CompanyController::class,'validateCompany']);
Route::post('registercompany',[CompanyController::class,'store']);

Route::post('companylist',[CompanyController::class,'showCompanyList']);

Route::middleware(['auth:sanctum'])->group(function () {
    
    Route::resource('company', CompanyController::class);
    Route::resource('jobpost', JobPostController::class);
    Route::post('logout', [AuthController::class, 'logout']);

});
