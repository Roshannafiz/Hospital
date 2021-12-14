<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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


//_______________________ All Frontend View __________________//
Route::get('/', [HomeController::class, 'index']);
Route::get('/aboutus', [HomeController::class, 'aboutus']);
Route::get('/doctors', [HomeController::class, 'doctors']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth', 'verified');
//_______________________ All Frontend View __________________//


Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/myappointment', [HomeController::class, 'myappointment']);

Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);



Route::get('/add_doctor_view', [AdminController::class, 'addview']);
Route::post('/upload_doctor', [AdminController::class, 'upload']);

Route::get('/showappointment', [AdminController::class, 'showappointment']);
Route::get('/approved/{id}', [AdminController::class, 'approved']);

Route::get('/cancel/{id}', [AdminController::class, 'cancel']);
Route::get('/showdoctor', [AdminController::class, 'showdoctor']);

Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);
Route::get('/updatedoctor/{id}', [AdminController::class, 'updatedoctor']);

Route::post('/editdoctor/{id}', [AdminController::class, 'editdoctor']);
Route::get('/add_blog', [AdminController::class, 'addblog']);

Route::post('/upload_blog', [AdminController::class, 'uploadblog']);
Route::get('/show_blog', [AdminController::class, 'showblog']);

Route::get('/deleteblog/{id}', [AdminController::class, 'deleteblog']);
Route::get('/updateblog/{id}', [AdminController::class, 'updateblog']);

Route::post('/editblog/{id}', [AdminController::class, 'editblog']);
Route::get('/active/{id}', [AdminController::class, 'active']);

Route::get('/inactive/{id}', [AdminController::class, 'inactive']);



//_____________ For Email Route___
Route::get('/emailview/{id}', [AdminController::class, 'emailview']);
Route::post('/sendemail/{id}', [AdminController::class, 'sendemail']);




Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
