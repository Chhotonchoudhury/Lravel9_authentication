<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
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
//admin all route
Route::controller(Admincontroller::class)->group(function (){
    Route::get('/admin/logout' ,'destroy' )->name('admin.logout');
});


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';
