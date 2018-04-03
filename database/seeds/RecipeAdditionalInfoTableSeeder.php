<?php

use Illuminate\Database\Seeder;
use App\RecipeAdditionalInfo;

class RecipeAdditionalInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipe_additional_info1 = new RecipeAdditionalInfo;
        $recipe_additional_info1->preparation_time = $this->getRecipe1()['preparation_time'];
        $recipe_additional_info1->cooking_time = $this->getRecipe1()['cooking_time'];
        $recipe_additional_info1->recipe_id = 1;
        $recipe_additional_info1->save();

        $recipe_additional_info2 = new RecipeAdditionalInfo;
        $recipe_additional_info2->preparation_time = $this->getRecipe2()['preparation_time'];
        $recipe_additional_info2->cooking_time = $this->getRecipe2()['cooking_time'];
        $recipe_additional_info2->recipe_id = 2;
        $recipe_additional_info2->save();

        $recipe_additional_info3 = new RecipeAdditionalInfo;
        $recipe_additional_info3->preparation_time = $this->getRecipe3()['preparation_time'];
        $recipe_additional_info3->cooking_time = $this->getRecipe3()['cooking_time'];
        $recipe_additional_info3->recipe_id = 3;
        $recipe_additional_info3->save();

        $recipe_additional_info4 = new RecipeAdditionalInfo;
        $recipe_additional_info4->preparation_time = $this->getRecipe4()['preparation_time'];
        $recipe_additional_info4->cooking_time = $this->getRecipe4()['cooking_time'];
        $recipe_additional_info4->recipe_id = 4;
        $recipe_additional_info4->save();

        $recipe_additional_info5 = new RecipeAdditionalInfo;
        $recipe_additional_info5->preparation_time = $this->getRecipe5()['preparation_time'];
        $recipe_additional_info5->cooking_time = $this->getRecipe5()['cooking_time'];
        $recipe_additional_info5->recipe_id = 5;
        $recipe_additional_info5->save();

        $recipe_additional_info6 = new RecipeAdditionalInfo;
        $recipe_additional_info6->preparation_time = $this->getRecipe6()['preparation_time'];
        $recipe_additional_info6->cooking_time = $this->getRecipe6()['cooking_time'];
        $recipe_additional_info6->recipe_id = 6;
        $recipe_additional_info6->save();

        $recipe_additional_info7 = new RecipeAdditionalInfo;
        $recipe_additional_info7->preparation_time = $this->getRecipe7()['preparation_time'];
        $recipe_additional_info7->cooking_time = $this->getRecipe7()['cooking_time'];
        $recipe_additional_info7->recipe_id = 7;
        $recipe_additional_info7->save();

        $recipe_additional_info8 = new RecipeAdditionalInfo;
        $recipe_additional_info8->preparation_time = $this->getRecipe8()['preparation_time'];
        $recipe_additional_info8->cooking_time = $this->getRecipe8()['cooking_time'];
        $recipe_additional_info8->recipe_id = 8;
        $recipe_additional_info8->save();

        $recipe_additional_info9 = new RecipeAdditionalInfo;
        $recipe_additional_info9->preparation_time = $this->getRecipe9()['preparation_time'];
        $recipe_additional_info9->cooking_time = $this->getRecipe9()['cooking_time'];
        $recipe_additional_info9->recipe_id = 9;
        $recipe_additional_info9->save();

        $recipe_additional_info10 = new RecipeAdditionalInfo;
        $recipe_additional_info10->preparation_time = $this->getRecipe10()['preparation_time'];
        $recipe_additional_info10->cooking_time = $this->getRecipe10()['cooking_time'];
        $recipe_additional_info10->recipe_id = 10;
        $recipe_additional_info10->save();

    }


    public function getRecipe1(){
        return  array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
    }

    public function getRecipe2(){
        return array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
    }
    public function getRecipe3(){
        return array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
    }
    public function getRecipe4(){
        return array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
    }
    public function getRecipe5(){
        return array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
    }
    public function getRecipe6(){
        return array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
    }
    public function getRecipe7(){
        return array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
    }
    public function getRecipe8(){
        return array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
    }
    public function getRecipe9(){
        return array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
    }
    public function getRecipe10(){
        return array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
    }
}
