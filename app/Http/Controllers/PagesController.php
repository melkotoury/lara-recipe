<?php

namespace App\Http\Controllers;
use App\Recipe;
use App\RecipeAllergen;
use App\RecipeMedicalCondition;
use App\Review;
use App\User;
use Auth;
use App\UserAllergen;
use App\UserMedicalCondition;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'about', 'contact', 'browse_recipe']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        return view('pages.home',['recipes'=>$recipes]);
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function browse_recipe(){
        $recipes = Recipe::all();
        return view('pages.browse_recipe',['recipes' => $recipes]);
    }
    public function recommended_recipe(){
        $id = Auth::user()->id;
        $currentuser = User::find($id);
        $user_allergens = UserAllergen::where('user_id',$id)->pluck('name');
        $user_medical_conditions = UserMedicalCondition::where('user_id',$id)->pluck('name');

        foreach ($user_allergens as $user_allergen){
            $common_allergen_recipes = RecipeAllergen::where('name',$user_allergen)->pluck('recipe_id')->toArray();
        }

        foreach ($user_medical_conditions as $user_medical_condition){
            $common_medical_condition_recipes = RecipeMedicalCondition::where('name',$user_medical_condition)->pluck('recipe_id')->toArray();
        }

        $recipe_id = array_unique(array_merge($common_allergen_recipes,$common_medical_condition_recipes) , SORT_REGULAR);
        return view('pages.recommended_recipe',
                        [
                            'recipe_id' => $recipe_id

                            ]);
    }

}
