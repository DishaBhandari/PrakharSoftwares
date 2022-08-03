<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControllers;
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

Route::get('/', [HomeControllers::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
    Route::get('/addnav',[HomeControllers::class,'nav'])->name('addnav');
    Route::get('/allnav',[HomeControllers::class,'allnav'])->name('allnav');
    Route::get('/delete/nav/{id}',[HomeControllers::class,'delete'])->name('allnav');
    Route::post('/addnavform',[HomeControllers::class,'addnavform'])->name('addnavform');
});
