<?php

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

Auth::routes();

// HomePage Mentee
Route::get('/', function () {
    return view('welcome'); // nanti ganti
});

Route::get('/registers', [App\Http\Controllers\AdminController::class, 'addCode'])->name('addcode');

Route::post('/home', [App\Http\Controllers\AdminController::class, 'insert'])->name('adddata');
Route::get('/mentor-register', [App\Http\Controllers\AdminController::class, 'tesRegister'])->name('mentor-register');
Route::post('/add-mentor', [App\Http\Controllers\AdminController::class, 'registerMentor'])->name('add-mentor');


// // Detail Mentor page (params id is mentor_id)
// Route::get('/mentor-list', function () { 
//     return view('welcome'); // nanti ganti
// });

// // Detail Mentor page (params id is mentor_id)
// Route::get('/detail/{id}', function () { 
//     return view('welcome'); // nanti ganti
// });

// // Setting Data For Mentee
// Route::get('/account/{id}', function () { 
//     return view('welcome'); // nanti ganti
// });

// // Setting Data For Mentee
// Route::get('/setting/{id}', function () { 
//     return view('welcome'); // nanti ganti
// });

// // Setting Data For Mentor
// Route::get('/mentor/setting/{id}', function () { 
//     return view('welcome'); // nanti ganti
// });

// // HomePage Mentor
// Route::prefix('mentor')->group(function() {
//     Route::get('/', function () {
//         return view('welcome'); // nanti ganti
//     });
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->group(function () {
    Route::get('/list-mentor', function() {
        return view('admin-list-mentor');
    });
    Route::get('/list-voucher', function() {
        return view('admin-list-voucher');
    });
    Route::get('/tambah-voucher', function() {
        return view('admin-tambah-voucher');
    });
});

Route::prefix('mentor')->group(function () {
    Route::get('/list-mentor', function() {
        return view('layouts.mentor');
    });
});