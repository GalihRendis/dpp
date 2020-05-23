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

Route::get('/', function () {
    return view('welcome');
});

//patient
Route::get('/patient/', 'PatientController@index');
Route::get('/patient/create', 'PatientController@create');
Route::post('patient/add_patient', 'PatientController@add_patient');



//Anamnesis
Route::get('patient/{id}/anamnesis', 'AnamnesisController@index');


//pemeriksakan fisik
Route::get('patient/{id}/pemeriksakan_fisik', 'PemeriksakanFisikController@index');


//data penunjang
Route::get('patient/{id}/data_penunjang', 'DataPenunjangController@index');


//detail
Route::get('patient/{id}/detail', 'PatientController@detail');


//dokter
Route::get('patient/{id}/dokter', 'DokterController@index');
Route::post('patient/{id}/updatedokter', 'DokterController@update');




