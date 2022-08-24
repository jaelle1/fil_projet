<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\ConnectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\InscriptionagController;
use App\Http\Controllers\InscriptionentreController;

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
    return view('acceuil');
});
Route::get('acceuil', [AcceuilController::class,"index"])->name('acceuil');
Route::get('agence', [AgenceController::class,"index"])->name('agence');
Route::get('entreprise', [EntrepriseController::class,"index"])->name('entreprise');
Route::get('contact', [ContactController::class,"index"])->name('contact');
Route::get('inscrire_entreprise', [InscriptionentreController::class,"index"])->name('inscrire_entreprise');
Route::get('inscrir_agence', [InscriptionagController::class,"index"])->name('inscrir_agence');
Route::get('connect', [ConnectController::class,"index"])->name('connect');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
