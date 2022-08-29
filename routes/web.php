<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
//     return view('welcome');
// });

Route::get('/',[EmployeeController::class, 'index'])->name('pegawai');
Route::get('/tambahdatapegawai',[EmployeeController::class, 'tambahdatapegawai'])->name('tambahdatapegawai');

Route::post('/insertdatapegawai',[EmployeeController::class, 'insertdatapegawai'])->name('insertdatapegawai');

Route::get('/tampilkandatapegawai/{id}',[EmployeeController::class, 'tampilkandatapegawai'])->name('tampilkandatapegawai');
Route::post('/updatedatapegawai/{id}',[EmployeeController::class, 'updatedatapegawai'])->name('updatedatapegawai');
Route::get('/deletedatapegawai/{id}',[EmployeeController::class, 'deletedatapegawai'])->name('deletedatapegawai');

//Export PDF
Route::get('/exportpdf',[EmployeeController::class, 'exportpdf'])->name('exportpdf');

