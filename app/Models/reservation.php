<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable =[

        'id_chambres' ,
        'Date_debut' ,
        'date_depart' ,
        'Name' ,
        'phone'  ,
        'email'  ,
        'sex',
        'prix' ,
    ];
}
