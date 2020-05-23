<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesmen extends Model
{
    protected $fillable = [
        'Patient_id','Dokter_id'
    ];
}
