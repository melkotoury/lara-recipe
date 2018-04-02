<?php

use Illuminate\Database\Seeder;
use App\Recipe;
use App\RecipeNutritionFact;

class RecipeNutritionFactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $recipe1 = array(
            'calories'  => 310,
            'sodium'    => 500,
            'fat'       => 17,
            'protein'   => 17
        );

        $recipe2= array(
            'calories'  => 181,
            'sodium'    => 537,
            'fat'       => 10,
            'protein'   => 17
        );
        $recipe3 = array(
            'calories'  => 125,
            'sodium'    => 133,
            'fat'       => 1,
            'protein'   => 3
        );
        $recipe4 = array(
            'calories'  => 76,
            'sodium'    => 251,
            'fat'       => 3,
            'protein'   => 8
        );
        $recipe5 = array(
            'calories'  => 99,
            'sodium'    => 100,
            'fat'       => 1,
            'protein'   => 5
        );
        $recipe6 = array(
            'calories'  => 76,
            'sodium'    => 251,
            'fat'       => 3,
            'protein'   => 8
        );
        $recipe7 = array(
            'calories'  => 174,
            'sodium'    => 382,
            'fat'       => 4,
            'protein'   => 6
        );
        $recipe8 = array(
            'calories'  => 152,
            'sodium'    => 104,
            'fat'       => 0,
            'protein'   => 5
        );
        $recipe9 = array(
            'calories'  => 139,
            'sodium'    => 27,
            'fat'       => 2,
            'protein'   => 3
        );
        $recipe10 = array(
            'calories'  => 121,
            'sodium'    => 40,
            'fat'       => 5,
            'protein'   => 4
        );



        $recipe_nutrition_facts1 = new RecipeNutritionFact;
        $recipe_nutrition_facts1->calories = $recipe1['calories'];
        $recipe_nutrition_facts1->sodium = $recipe1['sodium'];
        $recipe_nutrition_facts1->fat = $recipe1['fat'];
        $recipe_nutrition_facts1->protein = $recipe1['protein'];
        $recipe_nutrition_facts1->recipe_id = 1;
        $recipe_nutrition_facts1->save();

        $recipe_nutrition_facts2 = new RecipeNutritionFact;
        $recipe_nutrition_facts2->calories = $recipe2['calories'];
        $recipe_nutrition_facts2->sodium = $recipe2['sodium'];
        $recipe_nutrition_facts2->fat = $recipe2['fat'];
        $recipe_nutrition_facts2->protein = $recipe2['protein'];
        $recipe_nutrition_facts2->recipe_id = 2;
        $recipe_nutrition_facts2->save();

        $recipe_nutrition_facts3 = new RecipeNutritionFact;
        $recipe_nutrition_facts3->calories = $recipe3['calories'];
        $recipe_nutrition_facts3->sodium = $recipe3['sodium'];
        $recipe_nutrition_facts3->fat = $recipe3['fat'];
        $recipe_nutrition_facts3->protein = $recipe3['protein'];
        $recipe_nutrition_facts3->recipe_id = 3;
        $recipe_nutrition_facts3->save();

        $recipe_nutrition_facts4 = new RecipeNutritionFact;
        $recipe_nutrition_facts4->calories = $recipe4['calories'];
        $recipe_nutrition_facts4->sodium = $recipe4['sodium'];
        $recipe_nutrition_facts4->fat = $recipe4['fat'];
        $recipe_nutrition_facts4->protein = $recipe4['protein'];
        $recipe_nutrition_facts4->recipe_id = 4;
        $recipe_nutrition_facts4->save();

        $recipe_nutrition_facts5 = new RecipeNutritionFact;
        $recipe_nutrition_facts5->calories = $recipe5['calories'];
        $recipe_nutrition_facts5->sodium = $recipe5['sodium'];
        $recipe_nutrition_facts5->fat = $recipe5['fat'];
        $recipe_nutrition_facts5->protein = $recipe5['protein'];
        $recipe_nutrition_facts5->recipe_id = 5;
        $recipe_nutrition_facts5->save();

        $recipe_nutrition_facts6 = new RecipeNutritionFact;
        $recipe_nutrition_facts6->calories = $recipe6['calories'];
        $recipe_nutrition_facts6->sodium = $recipe6['sodium'];
        $recipe_nutrition_facts6->fat = $recipe6['fat'];
        $recipe_nutrition_facts6->protein = $recipe6['protein'];
        $recipe_nutrition_facts6->recipe_id = 6;
        $recipe_nutrition_facts6->save();

        $recipe_nutrition_facts7 = new RecipeNutritionFact;
        $recipe_nutrition_facts7->calories = $recipe7['calories'];
        $recipe_nutrition_facts7->sodium = $recipe7['sodium'];
        $recipe_nutrition_facts7->fat = $recipe7['fat'];
        $recipe_nutrition_facts7->protein = $recipe7['protein'];
        $recipe_nutrition_facts7->recipe_id = 7;
        $recipe_nutrition_facts7->save();

        $recipe_nutrition_facts8 = new RecipeNutritionFact;
        $recipe_nutrition_facts8->calories = $recipe8['calories'];
        $recipe_nutrition_facts8->sodium = $recipe8['sodium'];
        $recipe_nutrition_facts8->fat = $recipe8['fat'];
        $recipe_nutrition_facts8->protein = $recipe8['protein'];
        $recipe_nutrition_facts8->recipe_id = 8;
        $recipe_nutrition_facts8->save();

        $recipe_nutrition_facts9 = new RecipeNutritionFact;
        $recipe_nutrition_facts9->calories = $recipe9['calories'];
        $recipe_nutrition_facts9->sodium = $recipe9['sodium'];
        $recipe_nutrition_facts9->fat = $recipe9['fat'];
        $recipe_nutrition_facts9->protein = $recipe9['protein'];
        $recipe_nutrition_facts9->recipe_id = 9;
        $recipe_nutrition_facts9->save();

        $recipe_nutrition_facts10 = new RecipeNutritionFact;
        $recipe_nutrition_facts10->calories = $recipe10['calories'];
        $recipe_nutrition_facts10->sodium = $recipe10['sodium'];
        $recipe_nutrition_facts10->fat = $recipe10['fat'];
        $recipe_nutrition_facts10->protein = $recipe10['protein'];
        $recipe_nutrition_facts10->recipe_id = 10;
        $recipe_nutrition_facts10->save();



    }
}
