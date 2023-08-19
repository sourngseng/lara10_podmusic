<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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

// Route::get('/', function () {
//     //return view('Testing');
//     return view('Frontend.home');
// });

Route::get('/',[FrontendController::class,'index'])->name('pagehome');
// Route::get('home',[FrontendController::class,'index']);

Route::get('about',[FrontendController::class,'about'])->name('about');
Route::get('listing-page',[FrontendController::class,'listing_page'])->name('listing-page');
Route::get('detail-page',[FrontendController::class,'detail_page'])->name('detail-page');
Route::get('contact',[FrontendController::class,'contact'])->name('contact');


