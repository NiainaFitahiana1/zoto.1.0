<?php

namespace App\Http\Controllers\Client;

use App\Models\Voyage;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoyageController extends Controller
{
    public function index(){
        // Récupérer les articles de type 1 et ayant l'état 2, avec les voyages associés
        $article = Article::where("type_id", 1)
            ->where("etat", 2)
            ->with('voyages') 
            ->with('type') // Charger la relation voyages
            ->get();
    
        return view("description.voyage", compact("article"));
    }
}
