<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservationvoyage extends Model
{
    use HasFactory;

    protected $fillable =[

        'id_voyages' ,
        'Name' ,
        'phone'  ,
        'email'  ,
        'sex',
        'prix' ,
    ];
}
