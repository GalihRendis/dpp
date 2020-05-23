<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use App\Patient;
use App\Asesmen;

class DokterController extends Controller
{
    public function index($id) {
		 $patient = Patient::find($id);
		 $dokter = Dokter::all()->toArray();
		 return view('SMF_Paru/Dokter/index')->with(compact('dokter'))->with(compact('id'))->with(compact('patient'));
	 }
	 public function update(Request $request) {
		 $asesmen = new Asesmen;
		 $asesmen->Patient_id = $request->get('id');
		 $asesmen->Dokter_id =  $request->get('Dokter_id');
		 $asesmen->save();
		 return redirect('patient')->with('success','Dokter Sudah Di tambahkan');
	}

}
