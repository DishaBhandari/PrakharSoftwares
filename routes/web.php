<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\loadPage;
use App\Http\Controllers\Admin\ServiceController;
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
Route::get('/about', [loadPage::class, 'about']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
    Route::get('/addnav', [HomeControllers::class, 'nav'])->name('addnav');
    Route::get('/allnav', [HomeControllers::class, 'allnav'])->name('allnav');
    Route::get('/delete/nav/{id}', [HomeControllers::class, 'delete']);
    Route::get('/edit/nav/{id}', [HomeControllers::class, 'edit']);
    Route::POST('/update/nav', [HomeControllers::class, 'update'])->name('update');
    Route::post('/addnavform', [HomeControllers::class, 'addnavform'])->name('addnavform');
    Route::get('/addnav',[HomeControllers::class,'nav'])->name('addnav');
    Route::get('/allnav',[HomeControllers::class,'allnav'])->name('allnav');
    Route::get('/delete/nav/{id}',[HomeControllers::class,'delete'])->name('allnav');
    Route::post('/addnavform',[HomeControllers::class,'addnavform'])->name('addnavform');

    Route::get('/addService',[ServiceController::class,'addService'])->name('addService');
    Route::post('/addServiceForm',[ServiceController::class,'postService'])->name('postAddService');
    Route::post('/services/saveimage',[ServiceController::class,'create']);
    Route::post('/services/delete',[ServiceController::class,'delete']);

    Route::get('/test',[ServiceController::class,'index'])->name('addService');
});
