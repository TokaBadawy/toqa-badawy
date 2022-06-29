<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Admin\ProductController;

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
Route::prefix('Project')->name('Project.')->middleware('auth')->group(function(){
  Route::get('/',ProjectController::class)->name('index');
 Route::prefix('products')->name('products.')->controller(ProductController::class)->group(function(){

Route::get('/','index')->name('index');
Route::get('//create','create')->name('create');
Route::get('//edit/{id}','edit')->name('edit');
Route::post('//store','store')->name('store');
Route::put('//update/{id}','update')->name('update');
Route::patch('/update/{id}/status/{status}','updateStatus')->name('updateStatus');
Route::delete('//destroy/{id}','destroy')->name('destroy');

});
});
// composer require laravel/ui
//




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
