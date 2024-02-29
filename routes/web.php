<?php

use App\Http\Controllers\POSController;
use App\Http\Controllers\FBController;
use App\Http\Controllers\BHController;
use App\Http\Controllers\HCController;
use App\Http\Controllers\BKController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [POSController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [FBController::class, 'index']);
    Route::get('/beauty-health', [BHController::class, 'index']);
    Route::get('/home-care', [HCController::class, 'index']);
    Route::get('/baby-kid', [BKController::class, 'index']);
});

Route::get('/user/{id}/name/{name}', function ($id, $name) {
    return 'My id is '.$id.', and my name is '.$name;
});
    
Route::get('/transaction', function () {
    return view('transaction', ['name' => 'Wilo']);
});