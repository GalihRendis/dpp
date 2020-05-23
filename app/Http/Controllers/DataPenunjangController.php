<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data_Penunjang;

class DataPenunjangController extends Controller
{
     public function index($id) {
		 $data_penunjang = Data_Penunjang::find($id);
		 return view('SMF_Paru/Data_Penunjang/index',compact('data_penunjang','id'));
	 }

}
