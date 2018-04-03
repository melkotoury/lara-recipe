<?php

use Illuminate\Database\Seeder;
use App\RecipeAllergen;
use Illuminate\Support\Facades\DB;

class RecipeAllergensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->orderBy('id')->chunk(100, function ($recipes) {
            $allergens = array(
                'Peanut',
                'Tree nuts',
                'Milk',
                'Egg',
                'Wheat',
                'Fish',
                'Soy',
                'Shellfish'
            );

            foreach ($recipes as $recipe) {
                for ($i=0;$i<$this->getAllergenCount();$i++){

                    RecipeAllergen::create([
                        'recipe_id' => $recipe->id,
                        'name' =>  $allergens[$this->getRandomIndex()]
                    ]);
                }

            }
        });
    }

    public function getRandomIndex(){
        return rand(0,7);
    }

    public function getAllergenCount(){
        return rand(1,3);
    }

}
