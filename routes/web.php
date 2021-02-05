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

Route::get('/condirion', function () {
    return view('condirion');
});
Route::get('/monprodil', function () {
            return view('client.monprofil');
});

Route::get('/contact', function () {
    return view('admin.contact');
});
Route::get('/profil', function () {
    return view('client.profil');
});

Auth::routes();

//Se connecter et un_compte profil
Route::get('/Seconnecter', 'ControllerClient@Se_connecter');
Route::get('/monprofil/{id}', 'ControllerClient@profil');
Route::get('/Créer un compte', 'ControllerClient@un_compte');
Route::get('/verifier', 'ControllerClient@un_compte_verifier');
Route::get('/editprofil/{id}/{notification}', 'ControllerClient@editprofil')->name('editprofil');
Route::PUT('/editprofil/{id}', 'ControllerClient@updatprofil');
Route::PUT('/showprofil/{id}', 'AdminController@valide');
Route::get('/refuse/{id}', 'AdminController@refuse');
Route::get('/homee', 'ControllerClient@homepage');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/client', 'AdminController@showclient');
Route::get('/showp/{id}/{notification}', 'AdminController@showp')->name('showp');
Route::get('/createar', 'AdminController@create_archive');
Route::post('/addd', 'AdminController@add_archive');
Route::post('/profil', 'ControllerClient@addprofil');
Route::get('/creatprofil', 'ControllerClient@creatprofil');
