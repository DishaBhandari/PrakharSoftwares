<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\loadPage;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\HomeUpdateContrller;
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

Route::domain('admin.in')->group(function () {
    Route::get('/hello', function () {
        //
    });

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
        Route::get('/addnav', [HomeControllers::class, 'nav'])->name('addnav');
        Route::get('/allnav', [HomeControllers::class, 'allnav'])->name('allnav');
        Route::get('/delete/nav/{id}', [HomeControllers::class, 'delete'])->name('allnav');
        Route::post('/addnavform', [HomeControllers::class, 'addnavform'])->name('addnavform');
        Route::get('/addService', [ServiceController::class, 'addService'])->name('addService');
        Route::post('/addServiceform', [ServiceController::class, 'postService'])->name('addServiceform');
        Route::post('/services/saveimage', [ServiceController::class, 'create']);
        Route::post('/services/delete', [ServiceController::class, 'delete']);
        Route::get('allService', [ServiceController::class, 'allService']);
        Route::get('updatehome', [HomeUpdateContrller::class, 'index']);
        Route::get('updateslide', [HomeUpdateContrller::class, 'updateslide']);
        Route::get('addslide', [HomeUpdateContrller::class, 'addslide']);
        Route::get('editslide/{id}', [HomeUpdateContrller::class, 'editslide']);
        Route::post('addSlideform', [HomeUpdateContrller::class, 'addSlideform'])->name('addSlideform');
        Route::post('updateSlideform', [HomeUpdateContrller::class, 'updateSlideform'])->name('updateSlideform');
        Route::post('updateHomeAboutform', [HomeUpdateContrller::class, 'updateHomeAboutform'])->name('updateHomeAboutform');
        Route::post('addTestimonialForm', [HomeUpdateContrller::class, 'addTestimonialForm'])->name('addTestimonialForm');
        Route::post('updateTestimonialForm', [HomeUpdateContrller::class, 'updateTestimonialForm'])->name('updateTestimonialForm');
        Route::post('addbrandForm', [HomeUpdateContrller::class, 'addbrandForm'])->name('addbrandForm');
        Route::get('homeEditAbout', [HomeUpdateContrller::class, 'homeEditAbout'])->name('homeEditAbout');
        Route::get('upadetHomeTestimonial', [HomeUpdateContrller::class, 'upadetHomeTestimonial']);
        Route::get('addTestimonial', [HomeUpdateContrller::class, 'addTestimonial']);
        Route::get('updateHomeBrand', [HomeUpdateContrller::class, 'updateHomeBrand']);
        Route::get('addBrand', [HomeUpdateContrller::class, 'addBrand']);
        Route::get('editTestimonial/{id}', [HomeUpdateContrller::class, 'editTestimonial']);
        Route::get('deleteTestimonial/{id}', [HomeUpdateContrller::class, 'deleteTestimonial']);
        Route::get('deletebrand/{id}', [HomeUpdateContrller::class, 'deletebrand']);

        Route::get('/test', [ServiceController::class, 'index'])->name('addService');
    });
});
