<?php

use Illuminate\Database\Seeder;
use App\Recipe;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = array(
            'Breakfast',
            'Lunch',
            'Beverages',
            'Appetizers',
            'Soups',
            'Salads',
            'Beef',
            'Poultry',
            'Snacks',
            'Seafood',
            'Vegetarian',
            'Vegetables',
            'Desserts',
            'Canning / Freezing',
            'Breads',
            'Holidays'
        );

        Recipe::create([
            'title' => '15-Minute Enchiladas',
            'category' =>  $categories[3],
            'summary' =>  'This is quick to make. When you need a main dish right away, try this enchilada recipe.'
        ]);
        Recipe::create([
            'title' => '2-Step Chicken',
            'category' =>  $categories[7],
            'summary' =>  'The ultimate in simplicity, this recipe calls for chicken and cream of chicken soup. Pair it with a salad, rice dish, or steamed vegetables for a complete dinner. Even better, 2-step around the kitchen while it is heating up, getting some physical activity while you cook!'
        ]);
        Recipe::create([
            'title' => 'Apple Oatmeal Muffins',
            'category' =>  $categories[0],
            'summary' =>  'Buy apples while they are in season and on sale and make batches of these muffins to put in the freezer for later. You can also substitute whole wheat flour to make your muffins heartier and more nutritious.'
        ]);
        Recipe::create([
            'title' => '20-Minute Chicken Creole',
            'category' =>  $categories[4],
            'summary' =>  'This Creole-inspired dish uses chili sauce and cayenne pepper to spice it up. Tomatoes, green pepper, celery, onions and garlic spices also surround the chicken with delicious color. This main dish can be cooked on the stovetop or with an electric skillet.'
        ]);
        Recipe::create([
            'title' => '5 A Day Salad',
            'category' =>  $categories[5],
            'summary' =>  'This nutrient-packed salad uses ten different vegetables, and each serving is equal to five cups of vegetables!'
        ]);
        Recipe::create([
            'title' => '20-Minute Chicken Creole',
            'category' =>  $categories[7],
            'summary' =>  'This Creole-inspired dish uses chili sauce and cayenne pepper to spice it up. Tomatoes, green pepper, celery, onions and garlic spices also surround the chicken with delicious color. This main dish can be cooked on the stovetop or with an electric skillet.'
        ]);
        Recipe::create([
            'title' => 'Apple Slice Pancakes',
            'category' =>  $categories[0],
            'summary' =>  'Jazz up regular pancakes with apple and cinnamon.'
        ]);
        Recipe::create([
            'title' => 'Angel Food Cake',
            'category' =>  $categories[12],
            'summary' =>  'This recipe gives clear and easy instructions for making the classic, fluffy cake.'
        ]);
        Recipe::create([
            'title' => 'Ambrosia',
            'category' =>  $categories[8],
            'summary' =>  'This dessert features fresh fruit, yogurt, and coconut, with a dash of marshmallows for fun. No cooking is required. '
        ]);
        Recipe::create([
            'title' => 'Apple Oatmeal Muffins',
            'category' =>  $categories[14],
            'summary' =>  'Buy apples while they are in season and on sale and make batches of these muffins to put in the freezer for later. You can also substitute whole wheat flour to make your muffins heartier and more nutritious.'
        ]);
    }
}
