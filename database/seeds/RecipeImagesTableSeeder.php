<?php

use Illuminate\Database\Seeder;
use App\RecipeImage;

class RecipeImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

                for ($i=0;$i<32;$i++){

                    RecipeImage::create([
                        'recipe_id' =>  ($i+1),
                        'img_url'   =>  ($i+1).'.jpg'
                    ]);
                }

    }
}
