<?php

namespace App\Http\Controllers\Gestion;

use App\Models\Note;
use App\Models\PayeRes;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    public function index(){
        $nbactivites=Reservation::where("user_id",Auth::user()->id)->count();
        $nb=PayeRes::where("statut",2)->count();
        $nba=Note::where("user_id",Auth::user()->id)->count();
        return view("user.tableau",compact(
            "nbactivites",
            "nba",
            "nb",
        ));
    }
    public function tolist(){
        $activites=Reservation::with("voyage")->with("article")->where("user_id",Auth::user()->id)->orderby("created_at",'desc')->get();
        // $location=Reservation_voiture::where("p")
        return view("user.listereservatio",compact(
            "activites",
            
        ));
    }
    public function tonotification(){
        $notes=Note::where("user_id",Auth::user()->id)->orderby("created_at",'desc')->get();
        return view("user.note",compact(
            "notes",
        ));
    }
    public function eventlist(){
        $liste=PayeRes::with("reservation")->where("statut",2)->where("user_id",Auth::user()->id)->get();
        return view ("user.event",compact(
            "liste",
        ));
        
    }
    public function annulerevent($id){
        $liste=PayeRes::with("reservation")->find($id);
        $liste->delete();

        $note=new Note();
        $note->message="Evenement annule";
        $note->user_id=Auth::user()->id;
        $note->article_id=$liste->reservation->article_id;
        $note->proprietaire=Auth::user()->name;

        $note->save();
        Alert::toast("Evenement annulé","success");
        return redirect()->back();
    }
    public function suprimerevent($id){
        $liste=Reservation::with("article")->find($id);
        $liste->delete();

        $note=new Note();
        $note->message="Reservation supprimé ";
        $note->user_id=Auth::user()->id;
        $note->article_id=$liste->article_id;
        $note->proprietaire=Auth::user()->name;

        $note->save();
        Alert::toast("Réservation supprimé","success");
        return redirect()->back();
    }
}
