<?php

namespace App\Models;

use App\Models\Coli;
use App\Models\Paye;
use App\Models\Type;
use App\Models\User;
use App\Models\Voyage;
use App\Models\Location;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'photo',
        'numero_service',
        'user_id',
        'type_id',
        'etat',
        'jour',
        'envoyeur',
    ];
    public function type()
    {
        return $this->belongsTo(Type::class);
    } 
    public function user()
    {
        return $this->belongsTo(User::class);
    }    
    public function voyages()
    {
        return $this->hasMany(Voyage::class, 'article_id');
    } 
    public function locations()
    {
        return $this->hasMany(Location::class, 'article_id');
    }
    public function colis()
    {
        return $this->hasMany(Coli::class, 'article_id');
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'article_id');
    }
    public function paye()
    {
        return $this->hasMany(Paye::class, 'article_id');
    }
    
}
