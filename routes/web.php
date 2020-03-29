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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
use App\Mail\FeedbackMail;
use Illuminate\Support\Facades\Mail;

Route::get('/feedback', function () {
    Mail::to('S1368557@student.mcckc.edu')->send(new FeedbackMail());
    return new FeedbackMail();
});

Route::get('/', 'PagesController@index')->name('landingPage');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::resource('algorithms', 'AlgorithmsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

