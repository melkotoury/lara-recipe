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
            'user_preference' => 'general',
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
            'Sarah Doe'
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
            'sarah@example.com'
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
            'Mostafa Doe'
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
            'mostafa@example.com'
        );


        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $female_names[$i],
                'email' => $female_emails[$i],
                'password' => bcrypt('123456'),
                'gender' => 'female',
                'age' => $this->getRandomUserAge(),
                'user_preference' => $this->getRandomUserPreference() == 0 ? 'on_diet' : 'active',
                'role' => 'user',
                'profile_pic' => 'women/' . ($i + 1) . '.jpg'
            ]);
        }
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $male_names[$i],
                'email' => $male_emails[$i],
                'password' => bcrypt('123456'),
                'gender' => 'male',
                'age' => $this->getRandomUserAge(),
                'user_preference' => $this->getRandomUserPreference() == 0 ? 'on_diet' : 'active',
                'role' => 'user',
                'profile_pic' => 'men/' . ($i + 1) . '.jpg'
            ]);

        }
    }

    public function getRandomUserPreference(){
        return rand(0,1);
    }

    public function getRandomUserAge(){
        return rand(15,35);
    }
}
