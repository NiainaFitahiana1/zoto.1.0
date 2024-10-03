<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voyage extends Model
{
    use HasFactory;
    protected $fillable=[
        "article_id",
        "point_A",
        "point_B",
        "tarif_1",
        "tarif_3",
        "tarif_2",
    ];
    public function article()
    {
        return $this->belongsTo(Article::class);
    } 
    
    

}
