<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemeriksakan_Fisik;

class PemeriksakanFisikController extends Controller
{
    public function index($id) {
		 $pemeriksakan_fisik = Pemeriksakan_Fisik::find($id);
		 return view('SMF_Paru/Pemeriksakan_Fisik/index',compact('pemeriksakan_fisik','id'));
	 }
}
