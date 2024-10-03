<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'reservation_id',
        'article_id',
        'titre',
        'designation',
        'etat',
    ];
    public function article()
    {
        return $this->belongsTo(Article::class);
    } 
}
