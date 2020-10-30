<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\ForeignKeyDefinition;

class Category extends Model
{
    use HasFactory;


    // Une (sous)catégorie appartient à une categorie
    // Dans le cas de self referencing il faut preciser la clé etrangère
    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Une catégorie a plusieurs (sous)catégories
    // On a applé cette fonction dans le view shop/categorie.blade.php dans une boocle foreach
    public function childrens(){
        return $this->hasMany(Category::class,'parent_id');
    }

    // On recupère les produits situés dans une catégorie enfant au travers d'une catégorie parent
    public function produitsParent()
    {
        return $this->hasMany('App\Models\Produit');
    }

    public function produitsChild()
    {
        return $this->hasManyThrough('App\Models\Produit','App\Models\Category','parent_id','category_id');
    }

    //Fusionner les collections produitsParent avec produitsChild
    public function produits()
    {
       $produits = $this->produitsParent()->get()
                    ->merge($this->produitsChild()->get());
        
        return $produits;
    }
}

