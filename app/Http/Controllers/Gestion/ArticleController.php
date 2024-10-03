<?php

namespace App\Http\Controllers\Gestion;

use Exception;
use App\Models\Coli;
use App\Models\Dest;
use App\Models\Type;
use App\Models\Fiara;
use App\Models\Numero;
use App\Models\Voyage;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Location;
use App\Models\Classement;
use Illuminate\Http\Request;
use App\Models\ListeDestination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function avantcreate(){
        $type=Type::get();
        return view("article.choix", compact(
            "type",
        ));
    }
    public function createphase1(Request $request){
        try{
            
        $validator = Validator::make($request->all(), [
            'titre' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'type_id'=> 'required|integer',
            'photo' => 'required|image|mimes:gif,png,webp,jpg,jpeg|max:2048'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $article = new Article();
        $article->titre = $request->titre;
        $article->description = $request->description;
        $article->type_id = $request->type_id;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("assets/uploads"), $filename);
            $article->photo = $filename;
        }

        $article->etat= 1;
        $article->user_id = 1;


        $article->save();
        Alert::success('', 'Article crée avec succès');
        return redirect()->route("addsupp",$article->id)->with("sucess",$article->id);
        }
        catch (Exception $e) {
            Alert::error("",$e->getmessage());
            return redirect()->back()->with('error', 'Erreur' . $e->getMessage())->withInput();
        }

    }
    public function editarticle($id){
        $article=Article::find($id);
        return view("article.edit", compact(
            "article",
        ));
    }
    public function updatearticle(Request $request,$id){
        try{
            $rules = [
                'titre' => 'required|string|max:255',
                'description' => 'required|string|max:2000',
                'type_id' => 'required|integer',
            ];
            
            if ($request->hasFile('photo')) {
                $rules['photo'] = 'image|mimes:gif,png,webp,jpg,jpeg|max:2048';
            }
            
            $validator = Validator::make($request->all(), $rules);
            
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $article=Article::find($id);
            if ($request->hasFile('photo')) {
                $image = $request->file('photo');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path("assets/uploads"), $filename);
                $article->photo = $filename;
            }
            
            $article->titre = $request->input('titre');
            $article->description = $request->input('description');
            $article->type_id = $request->input('type_id');
            
            $article->save();
            
        Alert::toast('Mise à jour effectué', 'success');
        return redirect()->route("addsupp",$article->id)->with("sucess",$article->id);
        }
        catch (Exception $e) {
            Alert::error("",$e->getmessage());
            return redirect()->back()->with('error', 'Erreur' . $e->getMessage())->withInput();
        }

    }
    public function suppadd($id){
        $key=0;
        $article=Article::find($id);
        $numero=Numero::where("article_id",$id)->get();
        $voyage=Voyage::where("article_id",$id)->get();
        $location=Location::where("article_id",$id)->with('fiaras')->get();
        $contact=Contact::where("article_id",$id)->get();
        $colis=Coli::where("article_id",$id)->get();
        return view("article.addmore",compact(
            "article",
            "key",
            "voyage",
            "numero",
            "location",
            "contact",
            "colis"
        ));
    }
    public function storeVoyage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'point_A' => 'required|string',
            'point_B' => 'required|string',
            'tarif_1' => 'required|integer',
            'numero' => 'required|string',
            'article_id' => 'required|integer',
        ]);
        if ($validator->fails()) {
            Alert::error($validator,"");
            return back()->withErrors($validator)->withInput();
        }
        $voyage = new Voyage();
        $voyage->point_A = $request->point_A;
        $voyage->point_B = $request->point_B;
        $voyage->tarif_1 = $request->tarif_1;
        $voyage->numero = $request->numero;
        $voyage->article_id = $request->article_id;
        $voyage->save();
        
        Alert::toast('Ajouté avec succes', 'success');
        return redirect()->back()->with("Session sucess");



    }
    public function deletevoyage($id){
        $voyage=Voyage::find($id);
        $voyage->delete();
        Alert::toast("Supprimé ","info");
        return redirect()->back();
    }
    public function storeNumber(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'numero' => 'required|string|max:255',
            'station' => 'required|string|max:255',
            'article_id' => 'required|integer',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $numero=new Numero();
        $numero->numero = $request->numero;
        $numero->station = $request->station;
        $numero->article_id = $request->article_id;

        $numero->save();

        Alert::toast('Ajouté avec succes', 'success');
        return redirect()->back()->with("Session sucess");

    }
    public function deletenumber($id){
        $number = Numero::find($id);
        $number->delete();
        Alert::toast("Supprimé ","info");
        return redirect()->back();
    }

    public function storelocation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'voiture' => 'required|string',
            'nombre' => 'required|integer',
            'jour_max' => 'required|integer',
            'prix_1' => 'required|integer',
            'article_id' => 'required|integer',
        ]);
        if ($validator->fails()) {
            Alert::toast("coou","error");
            return back()->withErrors($validator)->withInput();
        }
        $location=new Location();

        $location->voiture= $request->voiture;
        $location->prix_2= $request->nombre;
        $location->jour_max= $request->jour_max;
        $location->article_id= $request->article_id;
        $location->prix_1= $request->prix_1;
         
        $location->save();
        
        Alert::toast("Ajoutée",'success');
        return redirect()->back();
    }
    public function addphotolocation(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'location_id' => 'required|integer',
            'photos' => 'required', // Valide que des photos sont présentes
            'photos.*' => 'image|mimes:gif,png,webp,jpg,jpeg|max:16384' // Valide chaque image individuellement
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Vérification si des fichiers images sont présents dans la requête
        if ($request->hasFile('photos')) {
            $photos = $request->file('photos'); // Récupère toutes les photos envoyées

            foreach ($photos as $photo) {
                $fiara = new Fiara();
                $fiara->location_id = $request->input('location_id'); // Lien avec la table Location via location_id
                
                // Génération d'un nom unique pour chaque image
                $filename = time() . '_' . uniqid() . '.' . $photo->getClientOriginalExtension();
                $photo->move(public_path("assets/uploads"), $filename); // Enregistrement de l'image dans le dossier uploads
                $fiara->photos = $filename;

                $fiara->save(); // Enregistre chaque photo dans la table Fiara
            }

            Alert::toast("Photos ajoutées avec succès.", "success");
            return redirect()->back();
        } else {
            return back()->with('error', 'Aucune image sélectionnée.');
        }
    }
    public function deletelocation($id){
        $location=Location::find($id);
        $location->delete();
        Alert::toast("Supprimé ","info");
        return redirect()->back();
    }
    public function storecontact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'destination' => 'required|string',
            'numero' => 'required|string',
            'adresse' => 'required|string',
            'article_id' => 'required|integer',
        ]);
        if ($validator->fails()) {
            Alert::error($validator,withErrors($validator));
            return back()->withErrors($validator)->withInput();
        }
        $contact=new Contact();

        $contact->adresse= $request->adresse;
        $contact->destination= $request->destination;
        $contact->numero= $request->numero;
        $contact->article_id= $request->article_id;
         
        $contact->save();

        Alert::toast("Ajoutée",'success');
        return redirect()->back();
    }
    public function deletecontact($id){
        $contact=Contact::find($id);
        $contact->delete();
        Alert::toast("Supprimé ","info");
        return redirect()->back();
    }

    public function storecolis(Request $request){
        $validator = Validator::make($request->all(), [
            'ville' => 'required|string',
            'bureau' => 'required|string',
            'numero' => 'required|string',
            'article_id' => 'required|integer',
        ]);
        if ($validator->fails()) {
            Alert::error("error",$validator);
            return back()->withErrors($validator)->withInput();
        }
        $colis=new Coli();

        $colis->ville= $request->ville;
        $colis->bureau= $request->bureau;
        $colis->numero= $request->numero;
        // $colis->prix= $request->prix;
        $colis->article_id= $request->article_id;
         
        $colis->save();
        Alert::toast("Ajoutée",'success');
        return redirect()->back();
    }

    public function adddestination(Request $request){
            $validator = Validator::make($request->all(), [
                'point_A' => 'required|string|max:255',
                'point_B' => 'required|string|max:255',
            ]);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            $liste=new ListeDestination();
            $liste->point_A=$request->point_A;
            $liste->point_B=$request->point_B;
            
            $liste->save();
        

    }
    public function tocreate(){
        return view("article.create");
    }
    public function store(Request $request)
    {   
        try{
            
            $request->validate([
            'titre' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'type_id' => 'required|exists:types,id',
        ]);

        $article = new Article([
            'titre' => $request->titre,
            'description' => $request->description,
            'type_id' => $request->type_id,
            'etat_id' => 1,
            'user_id' => 1,
        ]);

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/uploads'), $filename);
            $article->photo = $filename;
        }

        $article->save();

        
        Alert::success('', 'Article crée avec succès');
        return redirect()->route("addsupp",$article->id)->with("sucess",$article->id);
        }
        catch (Exception $e) {
            Alert::error("",$e->getmessage());
            return redirect()->back()->with('error', 'Erreur' . $e->getMessage())->withInput();
        }
    }
    public function sko(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "article_id" => "required|integer",
            "prix" => "required|integer",
            "point_A" => "required|string|max:255",
            "point_B" => "required|string|max:255",
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $article = Article::find($request->article_id);

        try {
            foreach ($request->dests as $dest) {
                DB::insert('insert into dests (article_id, point_A, point_B) values (?, ?, ?)', [
                    $article->id,
                    $dest['point_A'],
                    $dest['point_B']
                ]);
            }

            foreach ($request->classements as $classement) {
                DB::insert('insert into classements (article_id, type, prix) values (?, ?, ?)', [
                    $article->id,
                    $classement['type'],
                    $classement['prix']
                ]);
            }

            Alert::success('', 'Détails ajoutés avec succès');
            return redirect()->route("your.route.name.here", $article->id);
        } catch (\Exception $e) {
            // Vous pouvez utiliser Log::error pour enregistrer l'erreur dans les logs
            Log::error('Erreur lors de l\'insertion des détails: '.$e->getMessage());

            Alert::error('Erreur', 'Une erreur est survenue lors de l\'ajout des détails. Veuillez réessayer.');
            return back()->withInput();
        }
    }
    public function showdetailarticle($id){
        $key=0;
        $article= Article::with("type")->find($id);
        $numero=Numero::where("article_id",$id)->get();
        $voyage=Voyage::where("article_id",$id)->get();
        $location=Location::where("article_id",$id)->get();
        $contact=Contact::where("article_id",$id)->get();
        $colis=Coli::where("article_id",$id)->get();
        return view("article.detail",compact(
            "article",
            "key",
            "voyage",
            "numero",
            "location",
            "contact",
            "colis"
        ));
    }


}
