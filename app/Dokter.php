<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $fillable = [
        'Patient_id','nama', 'NIP','Alamat'
    ];
}
