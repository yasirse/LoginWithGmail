<?php

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\GoogleController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('logout', [GoogleController::class, 'logout']);
Route::get('/dd',[demo::class,'index']);
Route::get('/about1','App\Http\Controllers\demo@about');
Route::get('/about',[demo::class,'about']);
Route::get('/course',SingleActionController::class);
Route::get('/course',SingleActionController::class);
Route::resource('photo',ResourceController::class);
Route::get('/customer',function(){
    $customers=Customer::all();
   Echo "<pre>";
   print_r($customers);
});

Route::get('/login5',[RegisterController::class,'login1']);
Route::get('/register5',[RegisterController::class,'index']);
Route::post('/register5',[RegisterController::class,'register']);

Route::get('viewrecords5','App\Http\Controllers\StudViewController@index');
Route::get('/login5','App\Http\Controllers\RegisterController@login1');
Route::post('/login5',[RegisterController::class,'login']);
Route::get('/logout5',[RegisterController::class,'logout']);