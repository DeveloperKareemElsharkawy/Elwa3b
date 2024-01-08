<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Auth\ForgetPasswordController;
use App\Http\Controllers\API\Auth\ResetPasswordController;
use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\WorkersController;
use App\Http\Controllers\API\CategoriesController;
use App\Http\Controllers\API\OrdersController;
use App\Http\Controllers\API\SettingsController;

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

Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('social-auth', [AuthController::class, 'socialAuth']);
    Route::post('register', [AuthController::class, 'register']);
    Route::get('logout', [AuthController::class, 'logOut']);
    Route::get('states', [AuthController::class, 'states']);
    Route::get('religions', [AuthController::class, 'religions']);

    Route::post('verify-reset-code', [ForgetPasswordController::class, 'verifyResetCode']);
    Route::post('send-reset-code', [ForgetPasswordController::class, 'sendResetCode']);
    Route::post('resend-reset-code', [ForgetPasswordController::class, 'sendResetCode']);
    Route::post('reset-password', [ResetPasswordController::class, 'setNewPassword']);
});

Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'getProfile']);
    Route::post('/', [ProfileController::class, 'updateProfile']);
    Route::post('/update-password', [ProfileController::class, 'updatePassword']);
});

Route::get('home', [HomeController::class, 'index']);
Route::get('workers-list', [WorkersController::class, 'getWorkers']);
Route::get('top-workers', [HomeController::class, 'topWorkers']);
Route::get('new-workers', [HomeController::class, 'newWorkers']);

Route::prefix('categories')->group(function () {
    Route::get('', [CategoriesController::class, 'getCategories']);
    Route::get('{category_di}/workers', [CategoriesController::class, 'categoryWorkers']);
});

Route::get('search', [WorkersController::class, 'searchWorkers']);
Route::get('filter-data', [WorkersController::class, 'filterData']);

Route::get('worker/{worker_id}/toggle-favorite', [WorkersController::class, 'toggleWorkerFavorite']);
Route::get('worker/{worker_id}', [WorkersController::class, 'getWorker']);
Route::get('my-favorites', [WorkersController::class, 'myFavorites']);

Route::prefix('orders')->group(function () {
    Route::post('/create', [OrdersController::class, 'makeOrder']);
    Route::get('/', [OrdersController::class, 'getOrders']);
    Route::get('/{order_id}', [OrdersController::class, 'getOrder']);
 });

Route::prefix('settings')->group(function () {
    Route::post('contact', [SettingsController::class, 'contact']);
    Route::get('contact-info', [SettingsController::class, 'contactInfo']);
    Route::get('socials-links', [SettingsController::class, 'socialsLinks']);
    Route::get('my-notifications', [SettingsController::class, 'myNotifications']);
    Route::get('read-notifications', [SettingsController::class, 'readNotifications']);
    Route::get('about-us', [SettingsController::class, 'aboutUs']);
    Route::get('terms-conditions', [SettingsController::class, 'termsConditions']);
});
