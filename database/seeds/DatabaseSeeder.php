<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(UserAllergensTableSeeder::class);
         $this->call(UserMedicalConditionsTableSeeder::class);
         $this->call(RecipesTableSeeder::class);
         $this->call(RecipeIngredientTableSeeder::class);
         $this->call(RecipeDirectionTableSeeder::class);
         $this->call(RecipeNutritionFactsTableSeeder::class);
         $this->call(RecipeAdditionalInfoTableSeeder::class);
         $this->call(RecipeAllergensTableSeeder::class);
         $this->call(RecipeMedicalConditionsTableSeeder::class);
        $this->call(RecipeImagesTableSeeder::class);
         $this->call(ReviewsTableSeeder::class);

    }
}
