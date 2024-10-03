<?php

namespace App\Http\Controllers\Client;

use App\Models\Fiara;
use App\Models\Article;
use App\Models\LocRese;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class LocationController extends Controller
{
    public function index(){
        $article = Article::where("type_id", 2)
        ->where("etat", 2)
        ->with('locations') 
        ->with('type') // Charger la relation voyages
        ->get();

        return view("description.locationvoiture",compact(
            "article",
        ));
    }
    public function showpage($id){
        $article = Location::with('fiaras')
        ->find($id);
        return view("reservation.voiture",compact(
            "article",
        ));
    }
    public function louer(Request $request){
        $validator = Validator::make($request->all(), [
            'article_id' => 'required|integer',
            'nom' => 'required|string',
            'date' => 'required|date',
        ]);
        if ($validator->fails()) {
            Alert::toast($validator, "error");
            return back()->withErrors($validator)->withInput();
        }
        $location = new LocRese();
        $location->location_id=$request->article_id;
        $location->nom=$request->nom;
        $location->date=$request->date;
        $location->user_id=1;

        $location->save();

        $indice=$location->location_id;
        Alert::toast("Réservé","success");
        return redirect()->route('reser/pay',$indice)->with("indice");
    }
    
}
