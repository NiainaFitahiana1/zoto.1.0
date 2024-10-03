<?php

namespace App\Http\Controllers\Gestion;

use App\Models\Note;
use App\Models\Article;
use App\Models\PayeRes;
use App\Charts\Abonnement;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyController extends Controller
{
    public function index(){
        $all=Article::where("user_id",Auth::user()->id)->count();
        $actifs=Article::where("user_id",Auth::user()->id)->where("etat",2)->with("type")->count();
        $nonactifs=Article::where("user_id",Auth::user()->id)->where("etat",1)->with("type")->count();
        $notes=Note::where("user_id",Auth::user()->id)->count();
        $reservation=Reservation::where("article_id",Auth::user()->id)->count();
        $reservation=PayeRes::where("statut",1)->where("reservation_id",$reservation)->count();
        $chart=new Abonnement;
        $chart->dataset('Actifs', 'pie',[$actifs]);
        $chart->dataset('Non actifs', 'pie',[$nonactifs] );
        return view("company.dashboard", compact(
            "all",
            "actifs",
            "notes",
            "nonactifs",
            "chart",
            "reservation", 
        ));
    }
    public function listeres(){
        $key=1;
        $res=Payeres::with("reservation")->where("statut",1)->get();
        return view("company.listereservation",compact(
            "res",
            "key"
        ));

    }
    public function accepter($id){
        $pay=PayeRes::find($id);
        $pay->statut=2;
        $pay->update();
        Alert::toast("Ajouté dans les taches","success");
        return redirect()->back();
    }
    public function refuser($id){
        $pay=PayeRes::find($id);
        $pay->statut=3;
        $pay->update();
        Alert::toast("Réfusée","success");
        return redirect()->back();
    }
    public function tolist(){
        $key=0;
        $all=Article::with("type")->get();
        return view("article.liste",compact(
            "all",
            "key",
        ));
    }
    public function tolistactifs(){
        $key=0;
        $all=Article::where("etat",2)->with("type")->get();
        return view("article.actifs",compact(
            "all",
            "key",
        ));
    }
    public function listnotif(){
        $notes=Note::where("user_id",Auth::user()->id)->orderby("created_at",'desc')->get();
        return view("company.notification",compact(
            "notes",
        ));
    }
    // public function index()
    // {
    //     $reservations = Reservation::all();
    //     return view('reservations.index', compact('reservations'));
    // }

    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'guest' => 'required|integer|min:0',
            'date' => 'required|date',
            'position' => 'required|string|max:255',
        ]);

        Reservation::create([
            'article_id' => $request->article_id,
            'user_id' => auth()->id(),
            'guest' => $request->guest,
            'date' => $request->date,
            'position' => $request->position,
        ]);

        return redirect()->route('reservations.index')->with('success', 'Reservation created successfully.');
    }
    public function tache($id){
        $article=Article::find($id);
        $edi=$article->id;
        $res=Reservation::where("article_id",$edi)->get();
        $voyage=Payeres::with("reservation")->where("statut",2)->get();
        return view("article.tache",compact(
            "article",
            "voyage",
        ));
    }

    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'guest' => 'required|integer|min:0',
            'date' => 'required|date',
            'position' => 'required|string|max:255',
        ]);

        $reservation->update($request->all());

        return redirect()->route('reservations.index')->with('success', 'Reservation updated successfully.');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully.');
    }
    public function approuvereservation(Request $request,$id){
        $pay = Payeres::where("statut",1)->find("id");
        $pay->statut="2";
        $pay->update();
        
    }
    public function deletenote($id){
        $note=Note::find($id);
        $note->delete();
        return redirect()->back();
    }


}
