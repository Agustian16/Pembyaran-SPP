<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController as SC;

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


// ~ Siwa Route
Route::prefix('siswa')->group(function(){
    Route::get('/',[SC::class,'index'])->name('siswa.index');
    Route::Post('/store',[SC::class,'store'])->name('siswa.store'); 
    Route::get('/create',[SC::class,'create'])->name('siswa.create');
    Route::delete('/{nisn}/destroy',[SC::class,'destroy'])->name('siswa.destroy');
    Route::get('/{nisn}/show',[SC::class,'show'])->name('siswa.show');
    Route::get('/{nisn}/edit',[SC::class,'edit'])->name('siswa.edit');
    Route::put('/{nisn}/update',[SC::class])->name('siswa.update');
});
// ~ End Of Siwa Route

