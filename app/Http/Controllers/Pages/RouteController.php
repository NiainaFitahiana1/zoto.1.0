<?php

namespace App\Http\Controllers\Pages;

use App\Models\Coli;
use App\Models\User;
use App\Models\Numero;
use App\Models\Voyage;
use App\Models\Article;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class RouteController extends Controller
{
    public function index(){
        $article=Article::where("etat",2)->with("type")->with("user")->paginate(8);
        return view("welcome", compact(
            "article",
        ));
    }
    public function descript(){
        return view("welcome.description");
    }
    public function versarticle(Request $request){
        $query = $request->input('query');
        $articles = Article::where('titre', 'LIKE', "%{$query}%")
                            ->where("etat",2)
                            ->with("type")
                            ->with("user")
                            ->get();
        $article=Article::where("etat",2)->with("type")->with("user")->paginate(8);
        return view("article.article", compact(
            "article",
            "articles",
            "query",
        ));
    }
    public function showarticle($id){
        $article=Article::find($id);
        $voyage=Voyage::where("article_id",$id)->get();
        $numeros=Numero::where("article_id",$id)->get();
        $location=Location::where("article_id",$id)->get();
        $colis=Coli::where("article_id",$id)->get();
        
        return view("article.avant",compact(
            "article",
            "voyage",
            "numeros",
            "location",
            "colis",
        ));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Recherche dans le titre et le contenu de l'article
        $articles = Article::where('titre', 'LIKE', "%{$query}%")
                            ->get();

        // Retourner les résultats à une vue
        return view('articles.search-results', compact('articles', 'query'));
    }

    public function compte(){
        return view("all.compte");
    }
    public function supprimercompte($id){
        $article=Article::where("user_id",$id)->get();
        $article->delete();
        $s=User::find($id);
        $user->delete();

        Alert::toast("Votre compte est bien supprimé","success");
    }
}