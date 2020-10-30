<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Cart;

/**
 * Cette classe est un controlleeur pour les opérations 
 * de la carte panier utilisateur
 * Nous avons installer le package 'shoppingcart'
 * Voir documentation : https://github.com/darryldecode/laravelshoppingcart#usage
 */
class PanierController extends Controller
{
    // Ajouter un produit au panier
    public function add(Request $request){

        $produit = Produit::find($request->id);
        Cart::add(array(
            'id' => $produit->id, // inique row ID
            'name' => $produit->nom,
            'price' => $produit->prix_ht,
            'quantity' => $request->quantity,               // Value from 'ajout au panier' formula
            'attributes' => 
             array('size' => $request->size,
             'photo' =>$produit->photo_principale,
             'prix_ttc' =>$produit->prixTTC()
             ) 
        ));
        return redirect(route('panier_index'));
    }

    public function index(){

        $content = Cart::getContent();
        //dd($content);

        // Code from documentation : https://github.com/darryldecode/laravelshoppingcart#conditions
        // add single condition on a cart bases
        $condition = new \Darryldecode\Cart\CartCondition(array(
        'name' => 'VAT 20%',
        'type' => 'tax',
        'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
        'value' => '20%'
        ));
        Cart::condition($condition);


        $total_ht_panier = Cart::getSubTotal(); 
        $total_ttc_panier = Cart::getTotal();
        $tva = $total_ttc_panier - $total_ht_panier;

        return view('panier.index', compact('content','total_ttc_panier','total_ht_panier','tva'));
    }
}
