<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'Nama', 'No_RM', 'Tanggal_Lahir','Alamat','Tanggal_Asesmen','Jam_Asesmen'
    ];
}
