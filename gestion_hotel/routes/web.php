<?php

use App\Models\TypeRoom;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TypeRoomController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ImageRoomController;
use App\Http\Controllers\RoomAdminController;
use App\Http\Controllers\ReservationController;

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
// web.php


// Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/verify', 'VerificationController@show')->name('verification.notice');
Route::post('/verify', 'VerificationController@resend')->name('verification.resend');
Route::get('/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');


Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/faq', function () {
    return view('pages.faq');
});
Route::get('/profil', function () {
    return view('pages.profil');
});
Route::get('/test', function () {
    return view('test.login');
});

Route::name('contactUs.')->prefix('contactUs/')->controller(ContactUsController::class)
->group(function(){
    Route::get('/','index')->name('index');
    Route::get('show/{id}','show')->name('show');
    Route::get('create','create')->name('create');
    Route::post('store','store')->name('store');
    Route::post('update/{id}','update')->name('update');
    Route::get('delete/{id}','delete')->name('delete');
});
Route::name('users.')->prefix('users/')->middleware('admin')->controller(UserController::class)
->group(function(){
    Route::get('/','index')->name('index');
    Route::get('show/{id}','show')->name('show');
    Route::get('create/{type?}','create')->name('create');
    Route::post('store','store')->name('store');
    Route::post('update/{id}','update')->name('update');
    Route::get('delete/{id}','delete')->name('delete');
});
Route::name('reservations.')->prefix('reservations/')->controller(ReservationController::class)
->group(function(){
    Route::get('/','index')->name('index')->middleware('admin');
    Route::get('show/{id}','show')->name('show');
    Route::get('create/{type?}','create')->name('create');
    Route::post('store','store')->name('store');
    Route::post('update/{id}','update')->name('update');
    Route::get('delete/{id}','delete')->name('delete');
});
Route::name('typeRooms.')->prefix('typeRooms/')->middleware('admin')->controller(TypeRoomController::class)
->group(function(){
    Route::get('/','index')->name('index');
    Route::get('show/{id}','show')->name('show');
    Route::get('create','create')->name('create');
    Route::post('store','store')->name('store');
    Route::post('update/{id}','update')->name('update');
    Route::get('delete/{id}','delete')->name('delete');
});
Route::name('imageRooms.')->prefix('imageRooms/')->middleware('admin')->controller(ImageRoomController::class)
->group(function(){
    Route::post('store','store')->name('store');
    Route::get('delete/{id}','delete')->name('delete');
});
Route::name('questions.')->prefix('questions/')->middleware('admin')->controller(QuestionController::class)
->group(function(){
    Route::get('/','index')->name('index');
    Route::get('show/{id}','show')->name('show');
    Route::get('create','create')->name('create');
    Route::post('store','store')->name('store');
    Route::post('update/{id}','update')->name('update');
    Route::get('delete/{id}','delete')->name('delete');
});
Route::name('roomsAdmin.')->prefix('roomsAdmin/')->middleware('admin')->controller(RoomAdminController::class)
->group(function(){
    Route::get('/','index')->name('index');
    Route::get('show/{id}','show')->name('show');
    Route::get('create','create')->name('create');
    Route::post('store','store')->name('store');
    Route::post('update/{id}','update')->name('update');
    Route::get('delete/{id}','delete')->name('delete');
});
Route::name('rooms.')->prefix('rooms/')->controller(RoomController::class)
->group(function(){
    Route::get('/','index')->name('index');
    Route::get('show/{id}','show')->name('show');
    Route::get('create','create')->name('create');
    Route::post('store','store')->name('store');
    Route::post('update/{id}','update')->name('update');
    Route::get('delete/{id}','delete')->name('delete');
    Route::get('galary','galary')->name('galary');
});
Route::name('login.')->prefix('login/')->controller(SessionController::class)
->group(function(){
    Route::get('/','create')->name('create')->middleware('guest');
    Route::post('store','store')->name('store')->middleware('guest');
    Route::get('destroy','destroy')->name('destroy')->middleware('auth');
    Route::get('/new','new')->name('new')->middleware('auth');
});
Route::name('register.')->prefix('register/')->controller(RegisterController::class)
->group(function(){
    Route::get('/','create')->name('create')->middleware('guest');
    Route::post('store','store')->name('store')->middleware('guest');
});
