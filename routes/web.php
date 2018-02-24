<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostController');
Route::resource('pem','PemainController');
Route::resource('man','ManagementController');
Route::resource('pre','PrestasiController');

Route::resource('fv','FtvController');
Route::resource('bkt','BakatController');
Route::resource('brt','BeritaController');
Route::resource('etr','EntertainmentController');
Route::resource('ktn','KartunController');
Route::resource('snt','SinetronController');
Route::resource('kln','KulinerController');
Route::resource('lyr','LayarlebarController');
Route::resource('wst','WisataController');
Route::resource('cw','CrewController');