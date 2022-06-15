<?php

use App\Http\Controllers\predictInvestmentController;
use App\Http\Controllers\predictStockController;
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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/predictStock', [predictStockController::class, 'index'])->name('predictStock');
Route::post('/predictStock', [predictStockController::class, 'store'])->name('predictStock');

Route::get('/predictInvestment', [predictInvestmentController::class, 'index'])->name('predictInvestment');
Route::post('/predictInvestment', [predictInvestmentController::class, 'store'])->name('predictInvestment');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
