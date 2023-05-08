<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MemberController;

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

Route::get('/member', function () {
    return view('welcome');
});

//追記
Route::group(['prefix'=>'member'], function () {
    Route::get('/top',[MemberController::class,'top']);
    Route::get('/create', [MemberController::class,'create']);
    Route::post('/store', [MemberController::class,'store'])->name('member.store');
    Route::get('/show/{id}', [MemberController::class,'show'])->name('member.show');
    Route::get('/edit/{id}', [MemberController::class,'edit'])->name('member.edit');
    Route::post('/update/{id}', [MemberController::class,'update'])->name('member.update');
    Route::get('/destroy/{id}', [MemberController::class,'destroy'])->name('member.destroy');
});
