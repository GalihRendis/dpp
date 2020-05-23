<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_Asesmen extends Model
{
    protected $fillable = [
        'Patient_id', 'Anamnesis_id', 'Data_Penunjang_id','Pemeriksakan_Fisik_id','Dokter_id'
    ];
}
