<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paye extends Model
{
    use HasFactory;
    protected $fillable=[
        "id",
        "nom_banque",
        "envoyeur",
        "etat",
        "article_id",
    ];
    
    public function article()
    {
        return $this->belongsTo(Article::class);
    } 
}
