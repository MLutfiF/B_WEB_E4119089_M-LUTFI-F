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
    return view('welcome');
});
Route::resource('user', 'ManagementUserController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/profile', function ($id) {
    //
})->middleware(CheckAge::class);

Route::get('/', function ($id) {
    //
})->middleware('web');

Route::group(['middleware' => ['web']], function () {
    //
});

Route::middleware(['web', 'subcsribed'])->group(function () {
    //
});

Route::put('post/{id}', function ($id) {
    //
})->middleware('role:editor');