<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

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

// Route :: get('/user/{id?}/{aktif?}', function ($id = "1",$aktif = "Y") {
//     // return view ('welcome');
//     return "<h1>Gua anak sholeh guys $id $aktif</h1> ";
// })->where('id','[a-z]*');

// // Route ::view('/', 'welcome');

Route ::put('/simpan', function () {
    return "<h1>ini adalah project pertama saya</h1>";
});

Route ::get('crud', function () {
    return view('crud');
});

Route ::put('/gas', function () {
    return "<h1>ini pilihan keduamu</h1>";
});

Route ::get('crud', function () {
    return view('crud');
});

Route ::put('/gaya', function () {
    return "<h1>ini adalah pelajaran peratama saya</h1>";
});

Route ::get('crud', function () {
    return view('crud');
});

// Route::prefix('master-data')->group( function(){
//     Route::get('/data-karyawan',[CrudController::class,'index'])->name('dashboard');
//     Route::get('/data-kerja',[CrudController::class,'edit'])->name('dashboard');
//     Route::get('/data-guru',[CrudController::class,'edit2'])->name('dashboard');

// });

Route::name('master-data.')->prefix('master-data')->group( function(){
    Route::get('/data-karyawan',[CrudController::class,'index'])->name('data-karyawan');
    Route::get('/data-kerja',[CrudController::class,'edit'])->name('data-kerja');
    Route::get('/data-guru',[CrudController::class,'edit2'])->name('data-guru');
    Route::get('/data-pribadi',[CrudController::class,'edit3'])->name('data-pribadi');

});

Route::get('/dashboard',[CrudController::class,'edit4'])->name('dashboard');