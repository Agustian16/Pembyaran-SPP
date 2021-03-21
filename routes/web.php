<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController as SC;
use App\Http\Controllers\KelasController as KC;
use App\Http\Controllers\SppController as SPC;
use App\Http\Controllers\PembayaranController as PC;
use App\Http\Controllers\PetugasController as PTGC;
use App\Http\Controllers\LoginController as LC;
use App\Http\Middleware\CekLevel;

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

// ! Route Login
Route::get('/',[LC::class,'index'])->name('login.index');
Route::post('/postlogin',[LC::class,'postLogin'])->name('postlogin');
Route::get('/logout',[LC::class,'logout'])->name('logout');
// ! End of Route Login


// ~ Siswa Route
Route::middleware('ceklevel:admin')->prefix('siswa')->group(function(){
    Route::get('/',[SC::class,'index'])->name('siswa.index');
    Route::Post('/store',[SC::class,'store'])->name('siswa.store'); 
    Route::get('/create',[SC::class,'create'])->name('siswa.create');
    Route::get('/{nisn}/show',[SC::class,'show'])->name('siswa.show');
    Route::get('/{nisn}/edit',[SC::class,'edit'])->name('siswa.edit');
    Route::put('/{nisn}/update',[SC::class,'update'])->name('siswa.update');
    Route::delete('/{nisn}/destroy',[SC::class,'destroy'])->name('siswa.destroy');
});
// ~ End Of Siswa Route

Route::middleware('ceklevel:admin')->prefix('kelas')->group(function(){
        Route::get('/',[KC::class,'index'])->name('kelas.index');
        Route::Post('/store',[KC::class,'store'])->name('kelas.store');
        Route::get('/create',[KC::class,'create'])->name('kelas.create');
        Route::get('/{id_kelas}/show',[KC::class,'show'])->name('kelas.show');
        Route::get('/{id_kelas}/edit',[KC::class,'edit'])->name('kelas.edit');
        Route::put('/{id_kelas}/update',[KC::class,'update'])->name('kelas.update');
        Route::delete('/{id_kelas}/destroy',[KC::class,'destroy'])->name('kelas.destroy');
    });
    
    
// Route::group(['middleware' => ['auth', 'ceklevel:admin']], function(){
//     // * Kelas Route
//     Route::get('/',[KC::class,'index'])->name('kelas.index');
//     Route::Post('/store',[KC::class,'store'])->name('kelas.store');
//     Route::get('/create',[KC::class,'create'])->name('kelas.create');
//     Route::get('/{id_kelas}/show',[KC::class,'show'])->name('kelas.show');
//     Route::get('/{id_kelas}/edit',[KC::class,'edit'])->name('kelas.edit');
//     Route::put('/{id_kelas}/update',[KC::class,'update'])->name('kelas.update');
//     Route::delete('/{id_kelas}/destroy',[KC::class,'destroy'])->name('kelas.destroy');
//     // * End of Kelas Route
    
// });

// ^ SPP Route
Route::middleware('ceklevel:admin')->prefix('spp')->group(function(){
    Route::get('/',[SPC::class,'index'])->name('spp.index');
    Route::Post('/store',[SPC::class,'store'])->name('spp.store');
    Route::get('/create',[SPC::class,'create'])->name('spp.create');
    Route::get('/{id}/show',[SPC::class,'show'])->name('spp.show');
    Route::get('/{id}/edit',[SPC::class,'edit'])->name('spp.edit');
    Route::patch('/{id}/update',[SPC::class,'update'])->name('spp.update');
    Route::delete('/{id}/destroy',[SPC::class,'destroy'])->name('spp.destroy');
});
// ^ End Of SPP Route

// ! Pembayaran Route
Route::middleware('ceklevel:petugas,admin')->prefix('pembayaran')->group(function(){
    Route::get('/',[PC::class,'index'])->name('pembayaran.index');
    Route::get('/create',[PC::class,'create'])->name('pembayaran.create');
    Route::Post('/store',[PC::class,'store'])->name('pembayaran.store'); 
    Route::get('/{id}/show',[PC::class,'show'])->name('pembayaran.show');
    Route::get('/{id}/edit',[PC::class,'edit'])->name('pembayaran.edit');
    Route::put('/{id}/update',[PC::class,'update'])->name('pembayaran.update');
    Route::delete('/{id}/destroy',[PC::class,'destroy'])->name('pembayaran.destroy');
});
// ! End Of Pembayaran Route

// ~ Petugas Route\
Route::middleware('ceklevel:admin')->prefix('petugas')->group(function(){
    Route::get('/',[PTGC::class,'index'])->name('petugas.index');
    Route::get('/create',[PTGC::class,'create'])->name('petugas.create');
    Route::post('/store',[PTGC::class,'store'])->name('petugas.store');
    Route::get('/{id}/show',[PTGC::class,'show'])->name('petugas.show');
    Route::get('/{id}/edit',[PTGC::class,'edit'])->name('petugas.edit');
    Route::get('/update',[PTGC::class,'update'])->name('petugas.update');
    Route::delete('/{id}/destroy',[PTGC::class,'destroy'])->name('petugas.destroy');
});
// ~ End of Petugas Route