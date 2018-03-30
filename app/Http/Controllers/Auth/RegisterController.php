<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserMedicalCondition;
use App\UserAllergen;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User();
        $userAllergen = new UserAllergen();
        $userMedicalCondition = new UserMedicalCondition();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->age = $data['age'];
        $user->gender = $data['gender'];
        $user->email = Hash::make($data['password']);
        $user->save();

        for ($i= 0; $i<sizeof($data['user_allergens']);$i++){
            $userAllergen->name = $data['user_allergens'];
            $userAllergen->user_id = $user->getId();
            $userAllergen->save();
        }

        for ($i= 0; $i<sizeof($data['user_medical_condition']);$i++){
            $userMedicalCondition->name = $data['user_medical_condition'];
            $userMedicalCondition->user_id = $user->getId();
            $userMedicalCondition->save();
        }
        return view('pages.home');

    }

}
