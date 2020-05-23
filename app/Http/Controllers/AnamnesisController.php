<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anamnesis;

class AnamnesisController extends Controller
{
    public function index($id) {
		 $anamnesis = Anamnesis::find($id);
		 return view('SMF_Paru/Anamnesis/index',compact('anamnesis','id'));
	 }
}
