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
Route::get('/mentee-register', function ($id = null){
    return view('auth.mentee-signup');
    })->name('mentee-register');

Route::prefix('admin')->group(function () {
    Route::get('/list-mentor', [App\Http\Controllers\AdminController::class, 'showMentors']);
    Route::get('/list-voucher', [App\Http\Controllers\AdminController::class, 'showCodes']);
    Route::get('/verifikasi-mentor/{id}', [App\Http\Controllers\AdminController::class, 'showMentorInfo'])->name('verifikasi-mentor');
    Route::get('/verify/{id}', [App\Http\Controllers\AdminController::class, 'verifyMentor'])->name('verify');
    Route::get('/reject/{id}', [App\Http\Controllers\AdminController::class, 'rejectMentor'])->name('reject');
    Route::post('/addcode', [App\Http\Controllers\AdminController::class, 'addCode'])->name('addcode');
    Route::get('/tambah-voucher', function() {
        return view('admin-tambah-voucher');
    });
});

Route::prefix('mentor')->group(function () {
    Route::get('/list-mentee', [App\Http\Controllers\MentorController::class, 'showMentees']);
    // Route::get('/detail-mentee/{id}', [App\Http\Controllers\MentorController::class, 'showMenteeInfo']);
    Route::post('/detail-mentee/', [App\Http\Controllers\MentorController::class, 'showMenteeInfo'])->name('detail-mentee');
    Route::get('/setting',  [App\Http\Controllers\MentorController::class, 'setting']);
    Route::get('/update',  [App\Http\Controllers\MentorController::class, 'updateInfo'])->name('update-info-mentor');
    Route::post('/stop-session', [App\Http\Controllers\MentorController::class, 'showEndSession']);
    Route::post('/request-end-session', [App\Http\Controllers\MentorController::class, 'requestEndSession'])->name('request-end-session');
});

Route::prefix('mentee')->group(function(){
    Route::get('/list-mentor', [App\Http\Controllers\MenteeController::class, 'showMentors']);
    Route::get('/redeem-voucher', function() {
        return view('mentee-redeem-voucher');
    });
    Route::post('/redeem', [App\Http\Controllers\MenteeController::class, 'redeem'])->name('redeem-voucher');
});

Route::get('/detail-mentor/{id}', [App\Http\Controllers\UserController::class, 'showMentorDetail']);
Route::get('/order/{id}', [App\Http\Controllers\MenteeController::class, 'showOrder']);
Route::get('/order', [App\Http\Controllers\MenteeController::class, 'order'])->name('order');



Route::get('/confirm-stop-session', function() {
    return view('mentee-verification-stop-session');
});