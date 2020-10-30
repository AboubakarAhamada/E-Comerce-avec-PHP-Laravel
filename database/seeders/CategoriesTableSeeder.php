<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*
        $category = new Category();
        $category->nom ="Pour homme";
        $category->is_online =1;
        $category->save();

        $category = new Category();
        $category->nom ="Pour femme";
        $category->is_online =1;
        $category->save();

        $category = new Category();
        $category->nom ="Pour enfant";
        $category->is_online =0;
        $category->save();
        */

        $category = new Category();
        $category->nom ="Kofia";
        $category->is_online =1;
        $category->parent_id =1;
        $category->save();

        $category = new Category();
        $category->nom ="Chiromani";
        $category->is_online =1;
        $category->parent_id =2;
        $category->save();

        $category = new Category();
        $category->nom ="Kandu";
        $category->is_online =1;
        $category->parent_id =1;
        $category->save();


    }
}
