<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_penyakit_jantung extends Model
{
    protected $fillable = [
        'nama_pasien', 'NIP', 'alamat','No_Hp','keluhan'
    ];
}
