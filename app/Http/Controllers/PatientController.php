<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
  	 public function index() {
		 $patients = Patient::all()->toArray();
		 return view('SMF_Paru.Patient.index', compact('patients'));
	 }

	 public function create() {
	     return view('SMF_Paru.Patient.create');
	 }

	  public function add_patient(Request $request)
   {
       $data = new Patient();
       $data->Nama = $request->Nama;
       $data->No_RM = $request->No_RM;
       $data->Tanggal_Lahir = $request->Tanggal_Lahir;
       $data->Alamat = $request->Alamat;
       $data->Tanggal_Asesmen = $request->Tanggal_Asesmen;
       $data->Jam_Asesmen = $request->Jam_Asesmen;
       $data->save();
       return  redirect('patient')->with('success','Patient Sudah Ditambahkan!!!!');
   }


}
