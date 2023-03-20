<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/about',  'Index')->name('about.page');

Route::controller(DemoController::class)->group(function () {
    Route::get('/about',  'Index')->name('about.page');
    Route::get('/contact',  'ContactUs')->name('contact.page');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
   // Route::delete('/admin/logout', [ProfileController::class, 'destroy'])->name('admin.logout');
});



Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout',  'destroy')->name('admin.logout');
    //Route::get('/contact',  'ContactUs')->name('contact.page');
});

require __DIR__.'/auth.php';
