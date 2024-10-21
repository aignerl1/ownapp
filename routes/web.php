<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::redirect('/', '/countries');

// my routes:

Route::middleware(['auth'])->group(function(){

Route::get('countries', 'App\Http\Controllers\CountryController@index')->name('countries.index');
Route::get('countries/create', 'App\Http\Controllers\CountryController@create')->name('countries.create');
Route::post('countries', 'App\Http\Controllers\CountryController@store')->name('countries.store');
Route::get('countries/show/{country}', 'App\Http\Controllers\CountryController@show')->name('countries.show');
Route::get('/countries/{id}/edit', 'App\Http\Controllers\CountryController@edit')->name('countries.edit');
Route::patch('countries/update/{country}', 'App\Http\Controllers\CountryController@update')->name('countries.update');
Route::delete('countries/delete/{country}', 'App\Http\Controllers\CountryController@destroy')->name('countries.destroy');
Route::get('countries/search/search', 'App\Http\Controllers\CountryController@search')->name('countries.search');
Route::view('error', 'error')->name('error');
Route::post('countries/sum', 'App\Http\Controllers\CountryController@sum')->name('countries.sum');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
