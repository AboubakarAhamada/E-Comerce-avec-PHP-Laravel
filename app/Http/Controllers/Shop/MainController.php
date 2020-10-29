<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        $produits = Produit::all();
        return view("shop.index",compact('produits'));
    }

    public function voirProduit($id){

        $produit = Produit::find($id);
        return view('shop.produit',compact('produit'));
    }

    public function voirParCategorie(Request $request){
        
        $produits = Produit::where('category_id',$request->id)->get();
        return view('shop.categorie',compact('produits'));
    }
}
