<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'LoginController@getLogin')->middleware('guest');
Route::post('/yoyo', 'LoginController@postLogin');
Route::get('/logout', 'LoginController@logout');;

Route::group(['middleware' => 'auth:admin'], function(){
	Route::get('/admin', 'tembisController@konbis');
	Route::get('/sp', 'tembisController@konbis');
	Route::get('/sp/{id}/detilsp1', 'tembisController@detilspadmin');
	Route::get('/progress', 'tembisController@detilprogressadmin');
	Route::get('/sp/tambah', 'tembisController@tambah');
	Route::get('/sp/tambahaset', 'tembisController@tambahaset');
	Route::get('/sp/tambahkategori', 'tembisController@tambahkategori');
	Route::post('/sp/store', 'tembisController@store2');
	Route::post('/sp/store2', 'tembisController@store3');
	Route::post('/sp/store3', 'tembisController@store4');
	Route::post('/sp/store4', 'tembisController@store5');
	Route::get('/sp/{id}/delete', 'tembisController@delete2');
	Route::get('/sp/{id}/tambahdetil', 'tembisController@tambahdetil');
	Route::get('/muser', 'tembisController@user');
	Route::get('/mkategori', 'tembisController@kategori');
	Route::get('/maset', 'tembisController@aset');
});

Route::group(['middleware' => 'auth:user'], function(){
	Route::get('/user', 'tembisController@konbisuser');
	Route::get('/sp/{id}/detilsp2', 'tembisController@detilspuser');
});
	

Route::get('dashboard', 'tembisController@dash');
Route::get('/dashboard/tambah', 'tembisController@tambah');
Route::post('/dashboard/store', 'tembisController@store');
Route::get('/dashboard/{data_id}/edit', 'tembisController@edit');
Route::post('/dashboard/{data_id}/update', 'tembisController@update');
Route::get('/dashboard/{data_id}/delete', 'tembisController@delete');

Route::get('filter', 'tembisController@filter')->name('tembis.filter');
Route::get('/dashboard/sksp/{data_id}', 'tembisController@sortsksp')->name('tembis.sortsksp');
Route::get('/dashboard/jsp/{data_id}', 'tembisController@sortjsp')->name('tembis.sortjsp');

Route::get('/history', 'tembisController@history');

Route::get('/report', 'tembisController@report');

/*Route::get('/user', 'tembisController@dtuser');*/



Route::get('/approve', function () {
    return view('approve');

});

Route::get('/pesan', function () {
    return view('/admin/pesan');
});

Route::post('/detil', function () {
    return view('/fix/detil');
});



