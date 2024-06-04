<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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
// Frontend
// Route::get('/', 'App\Http\Controllers\Personal_infor_Controller@index');
// Route::get('/personal_infor', 'App\Http\Controllers\Personal_infor_Controller@index');


// Route::get('/register', function () {
//     return view('register');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });


// Backend
// Trang admin
// Route::get('/admin', 'App\Http\Controllers\AdminController@index');
// Route::get('/dashboard', 'App\Http\Controllers\AdminController@show_dashboard');
// Route::get('/logout', 'App\Http\Controllers\AdminController@logout');
// Route::post('/admin-dashboard', 'App\Http\Controllers\AdminController@dashboard');


// login
Route::get('/login', 'App\Http\Controllers\CheckoutController@login');
Route::post('/login-customer', 'App\Http\Controllers\CheckoutController@login_customer');

// Register
Route::get('/register', 'App\Http\Controllers\CheckoutController@register');
Route::post('/add-customer', 'App\Http\Controllers\CheckoutController@add_customer');


// // update-profle
// Route::post('/update-customer/{customer_id}', 'App\Http\Controllers\CheckoutController@update_customer');

// Route::get('/pages.personal_infor', 'App\Http\Controllers\CheckoutController@personal_infor');

// group này xác định các route cần có customer_id thì mới truy cập được
Route::group(['middleware' => 'customer'], function () {
    // update-profle
    Route::post('/update-customer/{customer_id}', 'App\Http\Controllers\CheckoutController@update_customer');
    // Các route yêu cầu đăng nhập
    Route::get('/personal_infor', 'App\Http\Controllers\CheckoutController@personal_infor');

    // logout
    Route::get('/logout', 'App\Http\Controllers\CheckoutController@logout');

    // Đổi mật khẩu
    Route::get('/change_pass', 'App\Http\Controllers\CheckoutController@Change_pass');
    Route::post('/change_pass', 'App\Http\Controllers\CheckoutController@check_change_pass');

    Route::get('/order_management', 'App\Http\Controllers\CheckoutController@Order_management');

    Route::post('/upload-avatar/{customer_id}', 'App\Http\Controllers\CheckoutController@upload_avatar');
});
// Hàm lấy quận từ thành phố.
Route::post('/get-districts', 'App\Http\Controllers\CheckoutController@fetchDistrict')->name('fetch_d');

// Quên mật khẩu
Route::get('/forgot-password', 'App\Http\Controllers\CheckoutController@forgot_password');
Route::post('/forgot-password', 'App\Http\Controllers\CheckoutController@check_forgot_password');

Route::get('/verify_otp', 'App\Http\Controllers\CheckoutController@verify_otp');
Route::post('/verify_otp', 'App\Http\Controllers\CheckoutController@check_verify_otp');

Route::get('/reset-password', 'App\Http\Controllers\CheckoutController@reset_password');
Route::post('/reset-password', 'App\Http\Controllers\CheckoutController@check_reset_password'); 


// Email
// Route::get('/test-mail', 'App\Http\Controllers\CheckoutController@send_mail');
// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
 
//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');
// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();
 
//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
