<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\ConnectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\InscrireagenceController;
use App\Http\Controllers\InsentrepriseController;


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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/', [AcceuilController::class,"index"])->name('acceuil');
Route::get('/agence', [AgenceController::class,"index"])->name('agence');
Route::get('/entreprise', [EntrepriseController::class,"index"])->name('entreprise');
Route::get('/contact', [ContactController::class,"index"])->name('contact');
Route::get('/inscrire_entreprise', [InsentrepriseController::class,"create"])->name('inscrire_entreprise');
Route::get('/connect', [ConnectController::class,"index"])->name('connect');
// Route::resource('inscrire_agence',InscrireagenceController::class);
Route::get('/inscrire_agence',[InscrireagenceController::class, 'create'])->name('inscrire_agence.index');
Route::post('/inscrire_agence/store',[InscrireagenceController::class, 'store_agence']); 
Route::post('/inscrire_entreprise/store', [InsentrepriseController::class,'store_entreprise']);
Route::get('/voirplus/{id?}',[InscrireagenceController::class, 'show'])->name('show');

