<?php

use App\Http\Controllers\TutorialController;
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

Route::get('/', [TutorialController::class,'index']);
Route::post('/uploads', [TutorialController::class,'uploads'])->name('uploads');
Route::post('/store', [TutorialController::class,'store'])->name('store');