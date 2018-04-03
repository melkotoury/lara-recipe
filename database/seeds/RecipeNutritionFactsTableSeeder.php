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

        $recipe2= array(

        );
        $recipe3 = array(

        );
        $recipe4 = array(

        );
        $recipe5 = array(

        );
        $recipe6 = array(

        );
        $recipe7 = array(

        );
        $recipe8 = array(

        );
        $recipe9 = array(

        );
        $recipe10 = array(

        );



        $recipe_nutrition_facts1 = new RecipeNutritionFact;
        $recipe_nutrition_facts1->calories = $this->getRecipe1()['calories'];
        $recipe_nutrition_facts1->sodium = $this->getRecipe1()['sodium'];
        $recipe_nutrition_facts1->fat = $this->getRecipe1()['fat'];
        $recipe_nutrition_facts1->protein = $this->getRecipe1()['protein'];
        $recipe_nutrition_facts1->recipe_id = 1;
        $recipe_nutrition_facts1->save();

        $recipe_nutrition_facts2 = new RecipeNutritionFact;
        $recipe_nutrition_facts2->calories = $this->getRecipe2()['calories'];
        $recipe_nutrition_facts2->sodium = $this->getRecipe2()['sodium'];
        $recipe_nutrition_facts2->fat = $this->getRecipe2()['fat'];
        $recipe_nutrition_facts2->protein = $this->getRecipe2()['protein'];
        $recipe_nutrition_facts2->recipe_id = 2;
        $recipe_nutrition_facts2->save();

        $recipe_nutrition_facts3 = new RecipeNutritionFact;
        $recipe_nutrition_facts3->calories = $this->getRecipe3()['calories'];
        $recipe_nutrition_facts3->sodium = $this->getRecipe3()['sodium'];
        $recipe_nutrition_facts3->fat = $this->getRecipe3()['fat'];
        $recipe_nutrition_facts3->protein = $this->getRecipe3()['protein'];
        $recipe_nutrition_facts3->recipe_id = 3;
        $recipe_nutrition_facts3->save();

        $recipe_nutrition_facts4 = new RecipeNutritionFact;
        $recipe_nutrition_facts4->calories = $this->getRecipe4()['calories'];
        $recipe_nutrition_facts4->sodium = $this->getRecipe4()['sodium'];
        $recipe_nutrition_facts4->fat = $this->getRecipe4()['fat'];
        $recipe_nutrition_facts4->protein = $this->getRecipe4()['protein'];
        $recipe_nutrition_facts4->recipe_id = 4;
        $recipe_nutrition_facts4->save();

        $recipe_nutrition_facts5 = new RecipeNutritionFact;
        $recipe_nutrition_facts5->calories = $this->getRecipe5()['calories'];
        $recipe_nutrition_facts5->sodium = $this->getRecipe5()['sodium'];
        $recipe_nutrition_facts5->fat = $this->getRecipe5()['fat'];
        $recipe_nutrition_facts5->protein = $this->getRecipe5()['protein'];
        $recipe_nutrition_facts5->recipe_id = 5;
        $recipe_nutrition_facts5->save();

        $recipe_nutrition_facts6 = new RecipeNutritionFact;
        $recipe_nutrition_facts6->calories = $this->getRecipe6()['calories'];
        $recipe_nutrition_facts6->sodium = $this->getRecipe6()['sodium'];
        $recipe_nutrition_facts6->fat = $this->getRecipe6()['fat'];
        $recipe_nutrition_facts6->protein = $this->getRecipe6()['protein'];
        $recipe_nutrition_facts6->recipe_id = 6;
        $recipe_nutrition_facts6->save();

        $recipe_nutrition_facts7 = new RecipeNutritionFact;
        $recipe_nutrition_facts7->calories = $this->getRecipe7()['calories'];
        $recipe_nutrition_facts7->sodium = $this->getRecipe7()['sodium'];
        $recipe_nutrition_facts7->fat = $this->getRecipe7()['fat'];
        $recipe_nutrition_facts7->protein = $this->getRecipe7()['protein'];
        $recipe_nutrition_facts7->recipe_id = 7;
        $recipe_nutrition_facts7->save();

        $recipe_nutrition_facts8 = new RecipeNutritionFact;
        $recipe_nutrition_facts8->calories = $this->getRecipe8()['calories'];
        $recipe_nutrition_facts8->sodium = $this->getRecipe8()['sodium'];
        $recipe_nutrition_facts8->fat = $this->getRecipe8()['fat'];
        $recipe_nutrition_facts8->protein = $this->getRecipe8()['protein'];
        $recipe_nutrition_facts8->recipe_id = 8;
        $recipe_nutrition_facts8->save();

        $recipe_nutrition_facts9 = new RecipeNutritionFact;
        $recipe_nutrition_facts9->calories = $this->getRecipe9()['calories'];
        $recipe_nutrition_facts9->sodium = $this->getRecipe9()['sodium'];
        $recipe_nutrition_facts9->fat = $this->getRecipe9()['fat'];
        $recipe_nutrition_facts9->protein = $this->getRecipe9()['protein'];
        $recipe_nutrition_facts9->recipe_id = 9;
        $recipe_nutrition_facts9->save();

        $recipe_nutrition_facts10 = new RecipeNutritionFact;
        $recipe_nutrition_facts10->calories = $this->getRecipe10()['calories'];
        $recipe_nutrition_facts10->sodium = $this->getRecipe10()['sodium'];
        $recipe_nutrition_facts10->fat = $this->getRecipe10()['fat'];
        $recipe_nutrition_facts10->protein = $this->getRecipe10()['protein'];
        $recipe_nutrition_facts10->recipe_id = 10;
        $recipe_nutrition_facts10->save();

    }


    public function getRecipe1(){
        return  array(
            'calories'  => 310,
            'sodium'    => 500,
            'fat'       => 17,
            'protein'   => 17
        );
    }

    public function getRecipe2(){
        return array(
            'calories'  => 181,
            'sodium'    => 537,
            'fat'       => 10,
            'protein'   => 17
        );
    }
    public function getRecipe3(){
        return array(
            'calories'  => 125,
            'sodium'    => 133,
            'fat'       => 1,
            'protein'   => 3
        );
    }
    public function getRecipe4(){
        return array(
            'calories'  => 76,
            'sodium'    => 251,
            'fat'       => 3,
            'protein'   => 8
        );
    }
    public function getRecipe5(){
        return array(
            'calories'  => 99,
            'sodium'    => 100,
            'fat'       => 1,
            'protein'   => 5
        );
    }
    public function getRecipe6(){
        return array(
            'calories'  => 76,
            'sodium'    => 251,
            'fat'       => 3,
            'protein'   => 8
        );
    }
    public function getRecipe7(){
        return array(
            'calories'  => 174,
            'sodium'    => 382,
            'fat'       => 4,
            'protein'   => 6
        );
    }
    public function getRecipe8(){
        return array(
            'calories'  => 152,
            'sodium'    => 104,
            'fat'       => 0,
            'protein'   => 5
        );
    }
    public function getRecipe9(){
        return array(
            'calories'  => 139,
            'sodium'    => 27,
            'fat'       => 2,
            'protein'   => 3
        );
    }
    public function getRecipe10(){
        return array(
            'calories'  => 121,
            'sodium'    => 40,
            'fat'       => 5,
            'protein'   => 4
        );
    }
}
