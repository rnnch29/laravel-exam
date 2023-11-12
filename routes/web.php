<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('blog',[AdminController::class,'index'])->name('blog');

Route::get('create',[AdminController::class,'create']);

Route::get('blog/{name}', function ($name) {
    return "<h1>บทความ{$name}</h1>";
});

Route::post('insert',[AdminController::class,'insert']);

Route::get('delete/{id}',[AdminController::class,'delete'])->name('delete');

Route::get('change/{id}',[AdminController::class,'change'])->name('change');

Route::get('edit/{id}',[AdminController::class,'edit'])->name('edit');
Route::post('update/{id}',[AdminController::class,'update'])->name('update');



Route::get('admin/user/kong', function () {
    return "<h1>ยินดีต้อนรับ Admin</h1>";
})->name('login');


//404 not found page
Route::fallback(function () {
    return "<h1>ไม่พบหน้าเว็บ</h1>";
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
