<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Sarah Ashour',
            'email' => 'sarahashour1995@hotmail.com',
            'password' => bcrypt('123456'),
            'gender' => 'female',
            'role' => 'admin',
            'age' => 25,
            'user_preference' => 'active',
            'profile_pic' => 'admin.jpg'
        ]);

        $female_names = array(
            'Jane Doe',
            'Jasmine Doe',
            'Samiha Doe',
            'Sammar Doe',
            'Pakinam Doe',
            'Fatma Doe',
            'Jennifer Doe',
            'Sylvia Doe',
            'Amina Doe',
            'Sarah Doe',
            'Salma Doe',
            'Diana Doe',
            'Monica Doe',
            'Anne Doe',
            'Aysel Doe',
            'Mai Doe',
            'Rewan Doe',
            'Aya Doe',
            'Manal Doe',
            'Allaa Doe',
            'Farah Doe',
            'Dina Doe',
            'Habiba Doe',
            'Ghada Doe',
            'Maha Doe',
            'Mirna Doe',
            'Nourhan Doe'
        );

        $female_emails = array(
            'jane@example.com',
            'jasmine@example.com',
            'samiha@example.com',
            'sammar@example.com',
            'pakinam@example.com',
            'fatma@example.com',
            'jennifer@example.com',
            'sylvia@example.com',
            'amina@example.com',
            'sarah@example.com',
            'salma@example.com',
            'diana@example.com',
            'monica@example.com',
            'anne@example.com',
            'aysel@example.com',
            'mai@example.com',
            'rewan@example.com',
            'aya@example.com',
            'manal@example.com',
            'allaa@example.com',
            'farah@example.com',
            'dina@example.com',
            'habiba@example.com',
            'ghada@example.com',
            'maha@example.com',
            'mirna@example.com',
            'nourhan@example.com'
        );

        $male_names = array(
            'John Doe',
            'Ahmed Doe',
            'Mohamed Doe',
            'Patrick Doe',
            'Hossam Doe',
            'Mahmoud Doe',
            'Samir Doe',
            'Chris Doe',
            'Ayman Doe',
            'Mostafa Doe',
            'Ali Doe',
            'Omar Doe',
            'David Doe',
            'Hassan Doe',
            'Islam Doe',
            'Ameer Doe',
            'Fouad Doe',
            'Alaa Doe',
            'Khaled Doe',
            'Sherif Doe',
            'Ihab Doe',
            'Basel Doe',
            'Basem Doe'
        );

        $male_emails = array(
            'john@example.com',
            'ahmed@example.com',
            'mohamed@example.com',
            'patrick@example.com',
            'hossam@example.com',
            'mahmoud@example.com',
            'samir@example.com',
            'chris@example.com',
            'ayman@example.com',
            'mostafa@example.com',
            'ali@example.com',
            'omar@example.com',
            'david@example.com',
            'hassan@example.com',
            'islam@example.com',
            'ameer@example.com',
            'fouad@example.com',
            'alaa@example.com',
            'khaled@example.com',
            'sherif@example.com',
            'ihab@example.com',
            'basel@example.com',
            'basem@example.com'
        );


        for ($i = 0; $i < 27; $i++) {
            User::create([
                'name' => $female_names[$i],
                'email' => $female_emails[$i],
                'password' => bcrypt('123456'),
                'gender' => 'female',
                'age' => $this->getRandomUserAge(),
                'user_preference' => $this->getRandomUserPreferenceValue($this->getRandomUserPreference()),
                'role' => 'user',
                'profile_pic' => 'women/' . ($i + 1) . '.jpg'
            ]);
        }
        for ($i = 0; $i < 23; $i++) {
            User::create([
                'name' => $male_names[$i],
                'email' => $male_emails[$i],
                'password' => bcrypt('123456'),
                'gender' => 'male',
                'age' => $this->getRandomUserAge(),
                'user_preference' => $this->getRandomUserPreferenceValue($this->getRandomUserPreference()),
                'role' => 'user',
                'profile_pic' => 'men/' . ($i + 1) . '.jpg'
            ]);

        }
    }

    public function getRandomUserPreferenceValue($user_preference){
        if ($user_preference == 0){
            return 'on_diet';
        }elseif ($user_preference == 1){
            return'active';
        }else{
            return 'vegetarian';
        }
    }

    public function getRandomUserPreference(){
        return rand(0,2);
    }

    public function getRandomUserAge(){
        return rand(11,60);
    }
}
