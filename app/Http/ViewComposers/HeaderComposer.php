<?php

namespace App\Http\ViewComposers;

use App\Models\Category;
use Illuminate\View\View;

/**
 * ================================ READ THIS TO UNDERSTAND ==================
 * @HeaderComposer class
 * 
 * Cette classe permet de rendre la variable @categories accessible
 * dans des views qui ne sont pas renvoyés par le controleur 
 * (exp : les headers comme produits_tempalte.blade.php, main_template.blade.php, etc)
 * 
 * Pour cela il faut preciser les views qui vont pouvoir acceder à la 
 * variable @categories dans la fonction @boot de la class @App\Providers\AppServiceProvider
 */
class HeaderComposer{

    public function compose(View $view){
        // On recupere les catégorie qui sont en ligne
        $view->with('categories',Category::where('is_online',1)->get());
    }
}

?>