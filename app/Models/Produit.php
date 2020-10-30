<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    private static $facteur_tva =1.2;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function prixTTC(){
        $prix_ttc = $this->prix_ht * self::$facteur_tva;
        return number_format($prix_ttc,2);
    }
}
