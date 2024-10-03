<?php

namespace App\Http\Controllers\Gestion;

use App\Models\Numero;
use App\Models\Voyage;
use App\Models\Article;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    public function index($id){
        $article_id=$id;
        $article=Article::where("etat",2)->get();
        $voyage=Voyage::with("article")->find($id);
        $numero=Numero::where("article_id",$id)->get();
        return view("reservation.voyage", compact(
            "voyage",
            "article",
            "numero",
            "article_id",
        ));
    }
    public function create(Request $request)
    {
        // Validation des données d'entrée
        $validator = Validator::make($request->all(), [
            'article_id' => 'required|integer|exists:articles,id',
            'user_id' => 'required|integer|exists:users,id',
            'company_user_id' => 'required|integer|exists:users,id', // L'utilisateur de l'entreprise (company)
            'guest' => 'required|integer|min:1', // Nombre de passagers doit être au moins 1
            'voyage_id' => 'required|integer', // Type d'article doit être 'voyage', 'location', ou 'colis'
            'lieu_depart' => 'required|string|max:255',
            'date_depart' => 'required|date|after_or_equal:today', // Date de départ doit être aujourd'hui ou après
        ]);

        // Vérification des erreurs de validation
        if ($validator->fails()) {
            // Notification d'erreur avec SweetAlert
            Alert::toast('Erreur dans les champs de saisie', 'error');
            return back()->withErrors($validator)->withInput();
        }

        // Création d'une nouvelle réservation
        $reservation = new Reservation();

        // Remplissage des informations de réservation à partir de la requête
        $reservation->article_id = $request->article_id;
        $reservation->user_id = $request->user_id;
        $reservation->company_user_id = $request->company_user_id;
        $reservation->voyage_id = $request->voyage_id;
        $reservation->guest = $request->guest;
        // $reservation->type_article = $request->type_article;
        // $reservation->date_reservation = now();
        $reservation->lieu_depart = $request->lieu_depart;
        $reservation->date_depart = $request->date_depart;
        
        // Champs qui seront remplis à la deuxième étape
        $reservation->statut = 1;

        // Enregistrement de la réservation dans la base de données
        $reservation->save();

        // Notification de succès avec SweetAlert
        Alert::toast('Effectuée', 'success');

        // Redirection vers la page de paiement avec l'ID de la réservation
        return redirect()->route('reser/pay',$reservation->id);
    }


}
