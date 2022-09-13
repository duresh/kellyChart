<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\siteController;
use App\Http\Controllers\StockController;

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
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('about', [siteController::class, 'about1'])->name('about');
Route::get('resume', [siteController::class, 'resume1'])->name('resume');
Route::get('services', [siteController::class, 'services1'])->name('services');
Route::get('portfolio', [siteController::class, 'portfolio1'])->name('portfolio');
Route::get('contact', [siteController::class, 'contact1'])->name('contact');
Route::get('stock/add',[StockController::class,'create'])->name('stock.create');
Route::get('stocks',[StockController::class,'index'])->name('stock.index');
Route::get('stock/chart',[StockController::class,'chart'])->name('stock.chart');
Route::post('stock/add',[StockController::class,'store'])->name('stock.store');
