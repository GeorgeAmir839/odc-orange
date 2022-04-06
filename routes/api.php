<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\EnrollController;

use App\Http\Middleware\Admin;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\ApiResponseTrait;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/************Api users*************/
Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::post('loginadmin', [UserController::class,'loginadmin']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth:api',"Admin");
//category api routes
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::post('/categories/{id}', [CategoryController::class, 'update']);
Route::post('/category/{id}', [CategoryController::class, 'destroy']);
//course api routes
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}', [CourseController::class, 'show']);
Route::post('/courses', [CourseController::class, 'store']);
Route::post('/courses/{id}', [CourseController::class, 'update']);
Route::post('/courses/{id}', [CourseController::class, 'destroy']);
//enroll api routes
Route::get('/enroll', [EnrollController::class, 'index']);
Route::get('/enroll/{id}', [EnrollController::class, 'show']);
Route::post('/enroll', [EnrollController::class, 'store']);
Route::post('/enroll/{id}', [EnrollController::class, 'update']);
Route::post('/enroll/{id}', [EnrollController::class, 'destroy']);