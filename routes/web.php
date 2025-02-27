<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\HomeSettingsController;
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
    return view('Pages.home');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('home-settings', [HomeSettingsController::class, 'index'])->name('voyager.home-settings');
    Route::post('home-settings', [HomeSettingsController::class, 'update'])->name('voyager.home-settings.update');
});



