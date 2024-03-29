<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class,'index']);

Route::get('/add_doctor_view', [AdminController::class,'addView']);

Route::post('/upload_doctor', [AdminController::class,'upload']);

Route::get('/home', [HomeController::class,'redirect']);

Route::get('/news', [HomeController::class,'blog']);

Route::post('/appointment', [HomeController::class,'appointment']);

Route::post('/add_post', [AdminController::class, 'add_post']);

Route::get('/add_news', [AdminController::class,'addNews']);

Route::get('/show_news', [AdminController::class,'show_news']);

Route::get('/delete_post/{id}', [AdminController::class,'delete_post']);

Route::get('/update_post/{id}', [AdminController::class,'update_post']);

Route::post('/update_news/{id}', [AdminController::class,'update_news']);

Route::get('/myappointment', [HomeController::class,'myappointment']);

Route::get('/cancel_appoint/{id}', [HomeController::class,'cancel_appoint']);

Route::get('/showappointment', [AdminController::class,'showappointment']);


Route::get('/approved/{id}', [AdminController::class,'approved']);

Route::get('/canceled/{id}', [AdminController::class,'canceled']);

Route::get('/showdoctor', [AdminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}', [AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}', [AdminController::class,'updatedoctor']);

Route::post('/editdoctor/{id}', [AdminController::class,'editdoctor']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
