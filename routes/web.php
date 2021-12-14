<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthenticationController;


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

Auth::routes(['verify' => true]);


Route::get('/', [AuthenticationController::class, 'loginPage'])->name('auth-login');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('index', [DashboardController::class, 'dashboardIndex'])->name('dashboard-index');
    Route::get('listpage', [DashboardController::class, 'dashboardList'])->name('dashboard-list');
    Route::get('profilepage', [DashboardController::class, 'dashboardProfile'])->name('dashboard-profile');
});







