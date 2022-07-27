<?php

use App\Http\Controllers\ForecastsController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index.show');


Route::get('/forecasts', [ForecastsController::class, 'index'])->name('forecast.show');
Route::get('/forecasts/{id}', [ForecastsController::class, 'show'])->name('forecastSpec.show');

Route::get('/faq', function(){
    return view('details.faq');
})->name('faq.show');

Route::get('/aboutus', function(){
    return view('details.about');
})->name('about.show');
