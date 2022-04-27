<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HasilPanenController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\NominalController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\CustomersController;
use App\Models\KelompokTani;
use App\Http\Controllers\PanenController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/Pembeli', [PembeliController::class, 'index'])->name('Pembeli');

Route::get('/Nominal', [NominalController::class, 'index'])->name('Nominal');

Route::get('/Provider', [ProviderController::class, 'index'])->name('Provider');
Route::get('/Customers', [CustomersController::class, 'index'])->name('Customers');
Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('panen', PanenController::class);
Route::get('/addpanen', [PanenController::class, 'create']);
Route::post('/addpanen/store', [PanenController::class, 'store']);
Route::get('/daftarpetani', [PetaniController::class, 'index']);
Route::get('/addPetani', [Petanicontroller::class, 'create']);
