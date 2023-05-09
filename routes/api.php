<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CareerDevelopmentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobInterviewController;
use App\Http\Controllers\JobPostController;
use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('companylist',[CompanyController::class,'showCompanyList']);

Route::middleware(['auth:sanctum'])->group(function () {
    
    Route::resource('company', CompanyController::class);

    Route::resource('jobpost', JobPostController::class);
    Route::post('applyjob/{id}',[JobPostController::class,'applyJob']);

    Route::post('acceptinterview/{id}',[JobInterviewController::class,'acceptInterview']);
    Route::post('declineinterview/{id}',[JobInterviewController::class,'declineInterview']);
    
    Route::get('myprofile',[AuthController::class,'myProfile']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::patch('updateprofile/{id}',[AuthController::class,'updateProfile']);


    Route::resource('jobapplication',JobApplicationController::class);
    Route::resource('jobinterview',JobInterviewController::class);
    Route::resource('careerdev',CareerDevelopmentController::class);

});
