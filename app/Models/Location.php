<?php

namespace App\Models;

use App\Models\Fiara;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;
    protected $fillable=[
        "id",
        "voiture",
        "article_id",
        "jour_max",
        "prix_1",
        "prix_2",
    ]; 
    public function fiaras()
    {
        return $this->hasMany(Fiara::class, 'location_id');
    }
}
