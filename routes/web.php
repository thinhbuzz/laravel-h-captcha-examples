<?php
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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/single', function () {
    return view('single');
});
Route::post('/single', function (Request $request) {
    $request->validate([
        'h-captcha-response' => 'required|captcha'
    ]);

    return 'Data is valid';
});
Route::get('/multiple', function () {
    return view('multiple');
});
Route::post('/multiple', function (Request $request) {
    $request->validate([
        'h-captcha-response' => 'required|captcha'
    ]);

    return 'Data is valid';
});
Route::get('/custom-js', function () {
    return view('custom-js');
});
Route::post('/custom-js', function (Request $request) {
    $request->validate([
        'h-captcha-response' => 'required|captcha'
    ]);

    return 'Data is valid';
});
Route::get('/difference-key', function () {
    return view('difference-key');
});
Route::post('/difference-key', function (Request $request) {
    $request->validate([
        'h-captcha-response' => 'required|captcha:secret:' . env('CAPTCHA_SECRET2')
    ]);

    return 'Data is valid';
});
Route::get('/custom-request-method', function () {
    return view('custom-request-method');
});
Route::post('/custom-request-method', function (Request $request) {
    $request->validate([
        'h-captcha-response' => 'required|captcha:request_method:\App\CustomRequestCaptcha@custom'
    ]);

    return 'Data is valid';
});
