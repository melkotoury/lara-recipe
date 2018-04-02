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
        $recipe1 = array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );

        $recipe2= array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
        $recipe3 = array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
        $recipe4 = array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
        $recipe5 = array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
        $recipe6 = array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
        $recipe7 = array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
        $recipe8 = array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
        $recipe9 = array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );
        $recipe10 = array(
            'preparation_time'=> rand(5,20),
            'cooking_time' => rand(5,20)
        );


        $recipe_additional_info1 = new RecipeAdditionalInfo;
        $recipe_additional_info1->preparation_time = $recipe1['preparation_time'];
        $recipe_additional_info1->cooking_time = $recipe1['cooking_time'];
        $recipe_additional_info1->recipe_id = 1;
        $recipe_additional_info1->save();

        $recipe_additional_info2 = new RecipeAdditionalInfo;
        $recipe_additional_info2->preparation_time = $recipe2['preparation_time'];
        $recipe_additional_info2->cooking_time = $recipe2['cooking_time'];
        $recipe_additional_info2->recipe_id = 2;
        $recipe_additional_info2->save();

        $recipe_additional_info3 = new RecipeAdditionalInfo;
        $recipe_additional_info3->preparation_time = $recipe3['preparation_time'];
        $recipe_additional_info3->cooking_time = $recipe3['cooking_time'];
        $recipe_additional_info3->recipe_id = 3;
        $recipe_additional_info3->save();

        $recipe_additional_info4 = new RecipeAdditionalInfo;
        $recipe_additional_info4->preparation_time = $recipe4['preparation_time'];
        $recipe_additional_info4->cooking_time = $recipe4['cooking_time'];
        $recipe_additional_info4->recipe_id = 4;
        $recipe_additional_info4->save();

        $recipe_additional_info5 = new RecipeAdditionalInfo;
        $recipe_additional_info5->preparation_time = $recipe5['preparation_time'];
        $recipe_additional_info5->cooking_time = $recipe5['cooking_time'];
        $recipe_additional_info5->recipe_id = 5;
        $recipe_additional_info5->save();

        $recipe_additional_info6 = new RecipeAdditionalInfo;
        $recipe_additional_info6->preparation_time = $recipe6['preparation_time'];
        $recipe_additional_info6->cooking_time = $recipe6['cooking_time'];
        $recipe_additional_info6->recipe_id = 6;
        $recipe_additional_info6->save();

        $recipe_additional_info7 = new RecipeAdditionalInfo;
        $recipe_additional_info7->preparation_time = $recipe7['preparation_time'];
        $recipe_additional_info7->cooking_time = $recipe7['cooking_time'];
        $recipe_additional_info7->recipe_id = 7;
        $recipe_additional_info7->save();

        $recipe_additional_info8 = new RecipeAdditionalInfo;
        $recipe_additional_info8->preparation_time = $recipe8['preparation_time'];
        $recipe_additional_info8->cooking_time = $recipe8['cooking_time'];
        $recipe_additional_info8->recipe_id = 8;
        $recipe_additional_info8->save();

        $recipe_additional_info9 = new RecipeAdditionalInfo;
        $recipe_additional_info9->preparation_time = $recipe9['preparation_time'];
        $recipe_additional_info9->cooking_time = $recipe9['cooking_time'];
        $recipe_additional_info9->recipe_id = 9;
        $recipe_additional_info9->save();

        $recipe_additional_info10 = new RecipeAdditionalInfo;
        $recipe_additional_info10->preparation_time = $recipe10['preparation_time'];
        $recipe_additional_info10->cooking_time = $recipe10['cooking_time'];
        $recipe_additional_info10->recipe_id = 10;
        $recipe_additional_info10->save();

    }
}
