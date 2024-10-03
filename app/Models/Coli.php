<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coli extends Model
{
    use HasFactory;
    protected $fillable=[
        "id",
        "bureau",
        "numero",
        "ville",
        "bureau_2",
        "numero_2",
        "ville_2",
        "prix",
        "pmax",
    ];
}
