<?php

namespace App\Http\Controllers\Gestion;

use App\Models\Note;
use App\Models\Paye;
use App\Models\Banque;
use App\Models\Voyage;
use App\Models\Article;
use App\Models\PayeRes;
use App\Models\Location;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PayementController extends Controller
{
    public function payement($id){
        $article=Article::with("type")->find($id);
        $location=Location::where("article_id",$id)->get();
        $banque=Banque::get();
        
        return view("article.payement", compact(
            "article",
            "location",
            "banque",
        ));
    }
    public function ajouter(Request $request){
        $validator = Validator::make($request->all(), [
            'article_id' => 'required|integer|exists:articles,id',
            'reference' => 'required|string|max:15|regex:/^[A-Za-z0-9]+$/|unique:payes,reference', // Validation d'unicité
            'envoyeur' => 'required|string|max:100',
            'receveur' => 'required|string|max:100',
            'nom_banque' => 'nullable|string|max:100',
        ], [
            'reference.unique' => 'Cette référence existe déjà. Veuillez en choisir une autre.',
            'reference.regex' => 'La référence ne peut contenir que des caractères alphanumériques.',
            // autres messages d'erreur personnalisés...
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $payement=new Paye();
        $payement->reference= $request->reference;
        $payement->nom_banque= $request->nom_banque;
        $payement->article_id= $request->article_id;
        $payement->envoyeur= $request->envoyeur;
        $payement->destines= $request->receveur;
        $payement->etat= 1;
        
        $payement->save();

        $article = Article::find($request->article_id);
        $note= new Note();
        $note->user_id= Auth::user()->id;
        $note->article_id=$request->article_id;
        $note->message="L'article ".$article->titre." sera accépté dans quelques minutes";
        $note->proprietaire=Auth::user()->name;
        $note->save();
        
        Alert::toast("Envoyé ", "success");
        return redirect()->route("dashcompany");
    }

    public function payementreservation($id){
        $reservation=Reservation::with("voyage")->find($id);
        $identi=$reservation->voyage->id;
        $voyage=Voyage::with("article")->find($identi);
        $tarif=$reservation->guest*$voyage->tarif_1;
        return view("reservation.payement",compact(
            'reservation',
            'voyage',
            'tarif',
        ));
    }
    public function payerVoyage(Request $request){
        $validator = Validator::make($request->all(), [
            'reservation_id' => 'required|integer|exists:reservations,id',
            'user_id' => 'required|integer|exists:users,id',
            'reference'=> 'string|required',
            'envoyeur'=>'string|required',
        ]);
        if ($validator->fails()) {
            // Notification d'erreur avec SweetAlert
            Alert::toast('Erreur dans les champs de saisie', 'error');
            return back()->withErrors($validator)->withInput();
        }
        $payr=new PayeRes();
        $payr->user_id=$request->user_id;
        $payr->reservation_id=$request->reservation_id;
        $payr->envoyeur=$request->envoyeur;
        $payr->reference=$request->reference;
        $payr->statut=1;
         
        $payr->save();
        Alert::toast("Réference envoyé","success");
        return redirect()->route("home");
        Alert::toast("Vous recevrez un notification ","info");

    }
}
