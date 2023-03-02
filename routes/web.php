<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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


route::get('/', [HomeController::class,'home']);

route::get('/home', [HomeController::class,'login']);

route::get('/adddoctor',[AdminController::class,'adddoctor']);

route::post('/upload_doctor',[AdminController::class,'upload'])->name('upload');


route::post('/appointment',[HomeController::class,'appointment'])->name('appointment');

route::get('/myappointment',[HomeController::class,'myappointment'])->name('myappointment');


 route::get('/cancelappointment/{id}',[HomeController::class,'cancelappointment']);

 route::get('/show_admin_appi',[AdminController::class,'show_admin_appi']);


 route::get('/cancel/{id}',[AdminController::class,'cancel']);


 route::get('/aprove/{id}',[AdminController::class,'aprove']);


 route::get('/doctor',[AdminController::class,'doctor']);


 route::get('/update/{id}',[AdminController::class,'update']);

 route::get('/delete/{id}',[AdminController::class,'delete']);

 route::post('/updateadd/{id}',[AdminController::class,'updateadd']);

 route::get('/searchappointment',[HomeController::class,'searchappointment']);

 route::get('/search_appi_admin',[AdminController::class,'search_appi_admin']);

 route::get('/searchdoctor',[AdminController::class,'searchdoctor']);

 route::get('/add_bloge',[AdminController::class,'add_bloge']);

 route::post('/upload_bloag',[AdminController::class,'upload_bloag']);

 route::get('/show_admian_bloge',[AdminController::class,'show_admian_bloge']);

 route::get('/delete_blog/{id}',[AdminController::class,'delete_blog']);

 route::any('/send_mail/{id}',[AdminController::class,'send_mail']);

 route::any('/send_email_touser/{id}',[AdminController::class,'send_email_touser']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
