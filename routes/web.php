<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\LoanplanController;
use App\Http\Controllers\Admin\MasterBankController;
use App\Http\Controllers\Admin\MasterBranchCenterController;
use App\Http\Controllers\Admin\MasterBranchController;
use App\Http\Controllers\Admin\MasterDesignationController;
use App\Http\Controllers\Admin\MasterGroupController;
use App\Http\Controllers\Admin\MasterLeaveController;
use App\Http\Controllers\Admin\MasterMixedController;
use App\Http\Controllers\Admin\MasterSeriesController;
use App\Http\Controllers\Admin\MasterSessionController;
use App\Http\Controllers\Admin\MasterSsttingController;
use App\Http\Controllers\Admin\MasterStaffBranchController;
use App\Http\Controllers\Admin\MasterStateController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login')->middleware('guest:admin');

Route::post('/admin/login/store', [AuthenticatedSessionController::class, 'store'])->name('admin.login.store');

Route::group(['middleware' => 'admin'], function() {

    Route::get('/admin', [HomeController::class, 'index'])->name('admin.dashboard');

    Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

    Route::resource('/admin/loanplan', LoanplanController::class);
    Route::resource('/admin/Mastergroup', MasterGroupController::class);
    Route::resource('/admin/Masterstate', MasterStateController::class);
    Route::resource('/admin/Masterbank', MasterBankController::class);
    Route::resource('/admin/Masterbranch', MasterBranchController::class);
    Route::resource('/admin/Masterstaffbranch', MasterStaffBranchController::class);
    Route::resource('/admin/Masterbranchcenter', MasterBranchCenterController::class);
    Route::resource('/admin/Masterleavemaster', MasterLeaveController::class);
    Route::resource('/admin/designation', MasterDesignationController::class);
    Route::resource('/admin/mixed', MasterMixedController::class);
    Route::resource('/admin/session', MasterSessionController::class);
    Route::resource('/admin/profile', MasterSsttingController::class);
    Route::resource('/admin/series', MasterSeriesController::class);

});
