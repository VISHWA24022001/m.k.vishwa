<?php


use App\Http\Controllers\loginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return redirect()->route('login');
// });

Route::get('/', function () {
    return view('welcome');
});


Route::view('home', 'home')->middleware('auth')->name('home');
Route::view('login', 'auth.login')->middleware('guest')->name('login');
Route::post('authenticate',[loginController::class,'authenticate']);
Route::get('logout',[loginController::class,'logout'])->name('logout');


Route::resource('products', ProductController::class)->middleware('auth');



