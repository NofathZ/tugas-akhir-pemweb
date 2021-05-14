<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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

Route::get('/mentor-register', function(){
    return view('auth.mentor-signup');
})->name('mentor-register');
Route::post('/add-mentor', [App\Http\Controllers\RegisterController::class, 'addMentor'])->name('add-mentor');
Route::get('/mentee-register', function (){
    return view('auth.mentee-signup');
})->name('mentee-register');
Route::post('/add-mentee', [App\Http\Controllers\RegisterController::class, 'addMentee'])->name('add-mentee');

Route::prefix('admin')->group(function () {
    Route::get('/list-mentor', [App\Http\Controllers\AdminController::class, 'showMentors']);
    Route::get('/list-voucher', [App\Http\Controllers\AdminController::class, 'showCodes']);
    Route::post('/addcode', [App\Http\Controllers\AdminController::class, 'addCode'])->name('addcode');
    Route::get('/tambah-voucher', function() {
        return view('admin-tambah-voucher');
    });
});

Route::prefix('mentor')->group(function () {
    Route::get('/list-mentor', function() {
        return view('layouts.mentor');
    });
});