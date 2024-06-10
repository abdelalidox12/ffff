<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservationvol extends Model
{
    use HasFactory;
    protected $fillable =[

        'id_vols' ,

        'Name' ,
        'phone'  ,
        'email'  ,
        'sex',
        'prix' ,
    ];
}
