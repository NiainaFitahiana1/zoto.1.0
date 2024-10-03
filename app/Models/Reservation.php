<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Voyage;
use App\Models\Article;
use App\Models\PayeRes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_id',
        'user_id',
        'company_user_id',
        'voyage_id',
        'guest',
        'type_article',
        'date_reservation',
        'lieu_depart',
        'date_depart',
        'statut',
    ];
     /**
     * Relation avec l'article (Many-to-One).
     */
    

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
    public function Voyage()
    {
        return $this->belongsTo(Voyage::class);
    }

    /**
     * Relation avec l'utilisateur qui a fait la réservation (Many-to-One).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relation avec l'utilisateur représentant la compagnie (role_id = 3) (Many-to-One).
     */
    public function companyUser()
    {
        return $this->belongsTo(User::class, 'company_user_id');
    }
    public function payeres()
    {
        return $this->belongsTo(Payeres::class, 'reservation_id');
    }
    
    /**
     * Vérifie si la réservation est confirmée.
     */
    public function isConfirmed()
    {
        return $this->statut_reservation === 'confirmée';
    }

    /**
     * Vérifie si la réservation est annulée.
     */
    public function isCancelled()
    {
        return $this->statut_reservation === 'annulée';
    }

    /**
     * Retourne le montant total formaté.
     */
    public function getFormattedTotalAttribute()
    {
        return number_format($this->montant_total, 2, ',', ' ') . ' MGA';
    }

    /**
     * Retourne la date de réservation formatée.
     */
    public function getFormattedReservationDateAttribute()
    {
        return Carbon::parse($this->date_reservation)->format('d/m/Y');
    }

    /**
     * Méthode pour calculer la durée de la réservation (si applicable).
     */
    public function getDuration()
    {
        if ($this->date_depart && $this->date_retour) {
            return \Carbon\Carbon::parse($this->date_retour)->diffInDays(\Carbon\Carbon::parse($this->date_depart));
        }

        return null;
    }

}
