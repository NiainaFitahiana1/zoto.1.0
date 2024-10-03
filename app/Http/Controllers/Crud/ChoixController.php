<?php

namespace App\Http\Controllers\Crud;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChoixController extends Controller
{
    public function storevoyage(){
        return view("new.storeVoyage");
    }
    public function reeditVoyage($id){
        $article=Article::find($id);
        return view("new.reedit", compact(
            "article",
        ));
    }
    public function storeLocation(){
        return view("new.storeLocation");
    }
    public function storeColis(){
        return view("new.storeColis");
    }
}
