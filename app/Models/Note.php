<?php

namespace App\Models;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'message',
        'article_id',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
