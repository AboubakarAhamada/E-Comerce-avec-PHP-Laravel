<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit = new Produit();
        $produit->nom ="Maillot Coelacanthe";
        $produit->prix_ht =25;
        $produit->photo_principale = "maillot_vert.jpeg";
        $produit->description ="Le maillot principale de l'équipe nationale des Comores";
        $produit->category_id=1;
        $produit->save();

        $produit = new Produit();
        $produit->nom ="Maillot Coelacanthe";
        $produit->prix_ht =25;
        $produit->photo_principale = "maillot_noir.jpeg";
        $produit->description ="Le troisème maillot de l'équipe nationale des Comores";
        $produit->category_id=1;
        $produit->save();
        
        $produit = new Produit();
        $produit->nom ="Maillot Coelacanthe";
        $produit->prix_ht =25;
        $produit->photo_principale = "maillot_blanc.jpeg";
        $produit->description ="Le deuxieme maillot de l'équipe nationale des Comores";
        $produit->category_id=1;
        $produit->save();

        $produit = new Produit();
        $produit->nom ="Robe de fête";
        $produit->prix_ht =25;
        $produit->photo_principale = "robe_rouge.jpg";
        $produit->description ="Une très belle robe à base des tissues comorienne";
        $produit->category_id=2;
        $produit->save();

        $produit = new Produit();
        $produit->nom ="Robe de saharé";
        $produit->prix_ht =25;
        $produit->photo_principale = "robe_sahare.jpg";
        $produit->description ="Une robe purement traditionnelle qui donne du charme aux jeunes demoiselles";
        $produit->category_id=2;
        $produit->save();
        
        $produit = new Produit();
        $produit->nom ="Chiromani";
        $produit->prix_ht =25;
        $produit->photo_principale = "chiromani.jpg";
        $produit->description ="Chiromani d'Anjouan aux couleurs ttirantes";
        $produit->category_id=2;
        $produit->save();



    }
}
