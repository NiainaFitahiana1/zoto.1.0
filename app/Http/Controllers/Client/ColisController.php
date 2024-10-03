<?php

namespace App\Http\Controllers\Client;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColisController extends Controller
{
    public function index(){
        $article=Article::where("type_id",3)->where("etat",2)->get();
        return view("description.colis",compact(
            "article",
        ));
    }
}
