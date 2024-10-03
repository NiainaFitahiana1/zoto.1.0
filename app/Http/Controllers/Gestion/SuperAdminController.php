<?php

namespace App\Http\Controllers\Gestion;

use App\Models\Note;
use App\Models\Paye;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class SuperAdminController extends Controller
{
    public function index(){
        $all=Paye::where("etat",1)->count();
        $article=Article::where("etat",2)->get();
        $counta=Article::where("etat",2)->count();

        $countav=Article::where("etat",2)->where("type_id",1)->count();
        $countal=Article::where("etat",2)->where("type_id",2)->count();
        $countac=Article::where("etat",2)->where("type_id",3)->count();

        $user=User::find(Auth::user()->id)->with("role");
        $nb=User::where("role_id",2)->count();
        $nblist=User::where("role_id",2)->count();
        return view("admin.dashboard", compact(
            "all",
            "article",
            "nb",
            "nblist",
            "counta",
            "user",
            "countav",
            "countal",
            "countac",
        ));
    }
    public function listcompany(){
        $key=1;
        $company=User::where('role_id',2)->get();
        return view("admin.listCompany",compact(
            "company",
            "key",
        ));
    }
    public function deleteentreprise($id){
        $entr=User::find($id);
        $entr->role_id=1;

        $entr->save();
        $note=new Note();
        $note->message="Votre entreprise est réjeté ";
        $note->user_id=$entr->id;
        $note->article_id=1;
        $note->proprietaire=$entr->name;

        $note->save();
        $article=Article::where("user_id",$entr->id)->all();
        $article->etat=1;
        $article->save();
        Alert::toast("Supprimé","success");

        return redirect()->back();
    }
    public function verifier(){
        $key=0;
        $all = Paye::with("article")
        ->where("etat",1)
        ->orderBy('created_at', 'desc')
        ->get();
        return view("admin.verifie",compact(
            "all",
            "key"
        ));
    }
    public function activer(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'montant' => 'required|integer',
            'article_id' => 'required|integer',
        ]);
        if ($validator->fails()) {
            Alert::toast("Une erreur s'est produite","error");
            return back()->withErrors($validator)->withInput();
        }
        $paye=Paye::find($id);
        $paye->etat=2;
        $paye->save();

        $montant=$request->montant;
        $article=Article::find($request->article_id);
        $article->delais=($article->delais) +( $montant/1000);
        $article->etat=2;
        $article->update();

        $note= new Note();
        $note->user_id= Auth::user()->id;
        $note->proprietaire= Auth::user()->name;
        $note->article_id=$request->article_id;
        $note->message="L'article ".$article->titre." est maintenant affiché pendant ".$article->delais." Jours!";
        $note->save();
        
        Alert::toast("Affiché pendant ".$article->delais." jours","success");
        return redirect()->route("dashadmin");
    }
    public function listearticle(){
        $all=Article::where("etat",2)->with("paye")->with("user")->get();
        return view("article.liste",compact(
            "all",
        ));
    }
    public function desactiver(Request $request,$id){
        $article=Article::find($id);
        $article->etat=3;
        $article->update();
        $note=new Note();
        $note->message= "L'article ".$article->titre." a été desactivé par l'administrateur";
        $note->user_id=$article->user_id;
        $note->proprietaire="none";
        $note->save();
        Alert::toast("Article désactivée","success");

        return redirect()->back();

    }
    public function supprimer(Request $request,$id){
        $article=Article::find($id);
        $article->etat=3;
        $article->delete();
        $note=new Note();
        $note->message= "L'article ".$article->titre." à supprimé par l'administrateur";
        $note->user_id=$article->user_id;
        $note->proprietaire="none";
        $note->save();
        Alert::toast("Article supprimé","success");

        return redirect()->back();

    }
    
}
