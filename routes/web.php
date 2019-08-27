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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/index', function () {
    return view('index');
});

Route::post('/regis/custom', [
    'uses' => 'RegController@store',
    'as' => 'regis.custom'
]);

Route::post('/login/custom', [
	'uses' => 'LogController@login',
	'as' => 'login.custom'
]);

Route::resource('user', 'UserController')->middleware('usr');

Route::resource('team', 'TeamController');

Route::resource('ideaaction', 'IdeController');

Route::resource('itcase', 'ItcaseController');

Route::get('/dpembayaran', 'AdminController@pembayaran')->name('dpembayaran')->middleware('admeen');

Route::get('/dteam', 'AdminController@team')->name('dteam')->middleware('admeen');

Route::get('/dteam/kbmsi', 'AdminController@teamsi')->name('dteam.kbmsi')->middleware('admeen');

Route::get('/dpeserta', 'AdminController@peserta')->name('dpeserta')->middleware('admeen');

Route::get('/dpeserta/kbmsi', 'AdminController@peskbmsi')->name('dpeserta.kbmsi')->middleware('admeen');

Route::get('/dreset', function () {
    return view('dreset');
})->middleware('admeen');

Route::get('/profile', function () {
    return view('profile');
})->middleware('usr');

Route::get('/seminar', function () {
    return view('seminar');
});
