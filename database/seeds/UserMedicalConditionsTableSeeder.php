<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\UserMedicalCondition;

class UserMedicalConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->orderBy('id')->chunk(100, function ($users) {
            $medical_conditions = array(
                'Blood Pressure',
                'Diabetics',
                'Uric Acid',
                'Rheumatoid',
                'Anemia',
                'Kidney failure',
                'Fatty liver',
            );

            foreach ($users as $user) {
                for ($i=0;$i<$this->getMedicalConditionsCount();$i++){

                    UserMedicalCondition::create([
                        'user_id' => $user->id,
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
