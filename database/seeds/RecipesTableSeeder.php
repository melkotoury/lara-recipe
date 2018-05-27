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
            'Dinner',
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
            'title' => 'Banana Bread',
            'category' =>  $categories[15],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Crispy Shrimp Pasta',
            'category' =>  $categories[2],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Turkey Stuffed Peppers',
            'category' =>  $categories[1],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Quick 15 Minute Beef and Broccoli Stir Fry',
            'category' =>  $categories[2],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Doughnut Muffins',
            'category' =>  $categories[15],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Pineapple Sunshine Cake',
            'category' =>  $categories[13],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'The Best Fruit Smoothies',
            'category' =>  $categories[3],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'White Chicken Enchiladas',
            'category' =>  $categories[2],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Baked French Toast',
            'category' =>  $categories[0],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Breakfast Toast Cups',
            'category' =>  $categories[0],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Almond Crisp Snack Bites',
            'category' =>  $categories[9],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Flaky Biscuit Pizza Snacks',
            'category' =>  $categories[9],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Creamy Broccoli Salad',
            'category' =>  $categories[6],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Strawberry, Banana & Almond Milk Smoothie',
            'category' =>  $categories[3],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Baked Parmesan Chicken',
            'category' =>  $categories[8],
            'summary' => ''
        ]);
            
        Recipe::create([
            'title' => 'Easy Sour Cream Chicken Enchiladas',
            'category' =>  $categories[8],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Teriyaki Chicken',
            'category' =>  $categories[8],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Low-Carb Baked Chicken Stuffed with Pesto and Cheese',
            'category' =>  $categories[8],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Success Low Carb Pancakes',
            'category' =>  $categories[0],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Soft Frosted Sugar Cookies',
            'category' =>  $categories[13],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Worlds Best Fudgiest Brownies',
            'category' =>  $categories[13],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'One Pot Spaghetti',
            'category' =>  $categories[1],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => '20 Minute Chicken Stir Fry',
            'category' =>  $categories[8],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Creamy Crock-pot Chicken and Broccoli Over Rice',
            'category' =>  $categories[2],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Banana Brownies',
            'category' =>  $categories[13],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Slow Cooker Creamy Ranch Chicken',
            'category' =>  $categories[2],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Easy Chocolate Cake',
            'category' =>  $categories[13],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'One Pot Garlic Parmesan Pasta',
            'category' =>  $categories[1],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Quick & Easy 4 Ingredient Broccoli Cheese Soup',
            'category' =>  $categories[5],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => '5 Ingredient Tomato Soup',
            'category' =>  $categories[5],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Simple Creamy Carrot Soup',
            'category' =>  $categories[5],
            'summary' => ''
        ]);
        Recipe::create([
            'title' => 'Classic Chicken Soup',
            'category' =>  $categories[5],
            'summary' => ''
        ]);
    }
}
