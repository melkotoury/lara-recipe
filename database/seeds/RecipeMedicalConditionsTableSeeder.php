<?php

use Illuminate\Database\Seeder;
use App\RecipeMedicalCondition;
use Illuminate\Support\Facades\DB;

class RecipeMedicalConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->orderBy('id')->chunk(100, function ($recipes) {
            $medical_conditions = array(
                'Blood Pressure',
                'Diabetics',
                'Uric Acid',
                'Rheumatoid',
                'Anemia',
                'Kidney failure',
                'Fatty liver',
            );

            foreach ($recipes as $recipe) {
                for ($i=0;$i<$this->getMedicalConditionsCount();$i++){

                    RecipeMedicalCondition::create([
                        'recipe_id' => $recipe->id,
                        'name' =>  $medical_conditions[$this->getRandomIndex()]
                    ]);
                }

            }
        });
    }

    public function getRandomIndex(){
        return rand(0,6);
    }

    public function getMedicalConditionsCount(){
        return rand(1,4);

    }
}
