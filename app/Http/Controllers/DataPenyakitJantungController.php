<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_penyakit_jantung;

class DataPenyakitJantungController extends Controller
{
    //http get pasien
    public function index(){
    	return data_penyakit_jantung::all();
    }

    //http post
    public function Add_Data_Pasien(request $request){
    	$pasien = new data_penyakit_jantung;
    	$pasien->nama_pasien=$request->nama_pasien;
    	$pasien->NIP=$request->NIP;
    	$pasien->alamat=$request->alamat;
    	$pasien->No_Hp=$request->No_Hp;
    	$pasien->keluhan=$request->keluhan;
    	$pasien->save();

    	return "Data Berhasil Masuk";
    }
}
