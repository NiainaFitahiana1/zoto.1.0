<?php

namespace App\Models;

use App\Models\User;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PayeRes extends Model
{
    use HasFactory;
    protected $fillable=[
        "reservation_id",
        "user_id",
        "statut",
        "reference",
        "envoyeur",
    ];
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    } 
    public function user()
    {
        return $this->belongsTo(User::class);
    } 
}
