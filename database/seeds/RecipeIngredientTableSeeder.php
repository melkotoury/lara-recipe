<?php

use Illuminate\Database\Seeder;
use App\RecipeIngredient;

class RecipeIngredientTableSeeder extends Seeder
{



    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0;$i<sizeof($this->getRecipe1());$i++){
            $recipe_ingredient1 = new RecipeIngredient;
            $recipe_ingredient1->name = $this->getRecipe1()[$i];
            $recipe_ingredient1->recipe_id = 1;
            $recipe_ingredient1->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe2());$i++){
            $recipe_ingredient2 = new RecipeIngredient;
            $recipe_ingredient2->name = $this->getRecipe2()[$i];
            $recipe_ingredient2->recipe_id = 2;
            $recipe_ingredient2->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe3());$i++){
            $recipe_ingredient3 = new RecipeIngredient;
            $recipe_ingredient3->name = $this->getRecipe3()[$i];
            $recipe_ingredient3->recipe_id = 3;
            $recipe_ingredient3->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe4());$i++){
            $recipe_ingredient4 = new RecipeIngredient;
            $recipe_ingredient4->name = $this->getRecipe4()[$i];
            $recipe_ingredient4->recipe_id = 4;
            $recipe_ingredient4->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe5());$i++){
            $recipe_ingredient5 = new RecipeIngredient;
            $recipe_ingredient5->name = $this->getRecipe5()[$i];
            $recipe_ingredient5->recipe_id = 5;
            $recipe_ingredient5->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe6());$i++){
            $recipe_ingredient6 = new RecipeIngredient;
            $recipe_ingredient6->name = $this->getRecipe6()[$i];
            $recipe_ingredient6->recipe_id = 6;
            $recipe_ingredient6->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe7());$i++){
            $recipe_ingredient7 = new RecipeIngredient;
            $recipe_ingredient7->name = $this->getRecipe7()[$i];
            $recipe_ingredient7->recipe_id = 7;
            $recipe_ingredient7->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe8());$i++){
            $recipe_ingredient8 = new RecipeIngredient;
            $recipe_ingredient8->name = $this->getRecipe8()[$i];
            $recipe_ingredient8->recipe_id = 8;
            $recipe_ingredient8->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe9());$i++){
            $recipe_ingredient9 = new RecipeIngredient;
            $recipe_ingredient9->name = $this->getRecipe9()[$i];
            $recipe_ingredient9->recipe_id = 9;
            $recipe_ingredient9->save();
        }

        for ($i=0;$i<sizeof($this->getRecipe10());$i++){
            $recipe_ingredient10 = new RecipeIngredient;
            $recipe_ingredient10->name = $this->getRecipe10()[$i];
            $recipe_ingredient10->recipe_id = 10;
            $recipe_ingredient10->save();
        }

    }

    public function getRecipe1(){
        return  array(
            '3 cups chili without beans (1 can, about 24 ounces)',
            '1 1/2 cups canned refried beans, low-sodium, non-fat',
            '2 cups low-fat Cheddar or Monterey jack cheese (shredded)',
            '8 flour tortillas, large size'
        );
    }

    public function getRecipe2(){
        return array(
            '1 tablespoon vegetable oil',
            '2 Boneless chicken breasts',
            '1 can cream of chicken soup (10 ounces)',
            '1/2 cup water'
        );
    }
    public function getRecipe3(){
        return array(
            '1/2 cup milk, non-fat',
            '1/3 cup applesauce',
            '1/2 cup flour, all-purpose',
            '1/2 cup quick-cooking oats (uncooked)',
            '1/4 cup sugar',
            '1/2 tablespoon baking powder',
            '1/2 teaspoon ground cinnamon',
            '1 apple (tart, cored & chopped)'
        );
    }
    public function getRecipe4(){
        return array(
            '1 tablespoon vegetable oil',
            '2 chicken breast (whole, skinless, boneless)',
            '1 can diced tomatoes (14 1/2 oz., with juice)',
            '1 cup chili sauce',
            '1 green pepper (chopped, large)',
            '2 celery stalk (chopped)',
            '1 onion (chopped)',
            '2 garlic clove (minced)',
            '1 teaspoon dried basil',
            '1 teaspoon parsley (dried)',
            '1/4 teaspoon cayenne pepper',
            '1/4 teaspoon salt'
        );
    }
    public function getRecipe5(){
        return array(
            '4 cups spinach (fresh)',
            '4 cups romaine lettuce',
            '2 cups green pepper (chopped, or use red, yellow, or orange)',
            '2 cups cherry tomatoes',
            '1 cup broccoli (chopped)',
            '1 cup cauliflower (chopped)',
            '1 cup yellow squash (sliced)',
            '2 cups cucumber (sliced)',
            '2 cups carrot (chopped)',
            '1 cup zucchini (sliced)'
        );
    }
    public function getRecipe6(){
        return array(
            '1 tablespoon vegetable oil',
            '2 chicken breast (whole, skinless, boneless)',
            '1 can diced tomatoes (14 1/2 oz., with juice)',
            '1 cup chili sauce',
            '1 green pepper (chopped, large)',
            '2 celery stalk (chopped)',
            '1 onion (chopped)',
            '2 garlic clove (minced)',
            '1 teaspoon dried basil',
            '1 teaspoon parsley (dried)',
            '1/4 teaspoon cayenne pepper',
            '1/4 teaspoon salt'
        );
    }
    public function getRecipe7(){
        return array(
            '1 apple (Granny Smith)',
            '1 1/4 cups pancake mix (any type)',
            '1/2 teaspoon cinnamon',
            '1 large egg',
            '2 teaspoons canola oil',
            '1 cup milk, low-fat'
        );
    }
    public function getRecipe8(){
        return array(
            '12 egg whites (1 1/2 cups)',
            '1 teaspoon cream of tartar',
            '1 1/2 cups sugar',
            '1 teaspoon vanilla extract',
            '1/4 teaspoon salt',
            '1 cup flour (sifted)'
        );
    }
    public function getRecipe9(){
        return array(
            '1 can pineapple chunks (in juice, 20 oz., drained)',
            '1 1/3 cups mandarin orange (drained)',
            '1 banana (peeled and sliced)',
            '1 1/2 cups grape (seedless)',
            '3/4 cup marshmallows (miniature)',
            '1/3 cup coconut (flaked)',
            '1 cup vanilla yogurt, low-fat (8 ounces)'
        );
    }
    public function getRecipe10(){
        return array(
            '1/2 cup milk, non-fat',
            '1/3 cup applesauce',
            '1/2 cup flour, all-purpose',
            '1/2 cup quick-cooking oats (uncooked)',
            '1/4 cup sugar',
            '1/2 tablespoon baking powder',
            '1/2 teaspoon ground cinnamon',
            '1 apple (tart, cored & chopped)'
        );
    }

}
