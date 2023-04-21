<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController ; 
use App\Http\Controllers\AffairesController ; 

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
    return view('index');
});
//Route::get('/MyClients',[ClientsController::class,'index']);



Route::resource('/MyClients',ClientsController::class) ; 
Route::resource('/MyClients/Affaires/cases',AffairesController::class) ; 

Route::get('/MyClients/Affaires/createCase', [AffairesController::class, 'create']);


//Route::get('/MyClients/cases', [MyClientsController::class, 'cases']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
