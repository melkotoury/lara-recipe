<?php

namespace App\Http\Controllers;
use App\Recipe;
use App\RecipeAllergen;
use App\RecipeMedicalCondition;
use App\RecipeNutritionFact;
use App\Review;
use App\User;
use Auth;
use App\UserAllergen;
use App\UserMedicalCondition;
use Illuminate\Http\Request;
use App\Like;
use DB;
use PhpParser\Node\Expr\Array_;

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
            ->take(18)
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

        $user_preference = $currentuser->user_preference;


        $recipe_based_on_user_preference_active = DB::table('recipe_nutrition_facts')->orderBy('protein','desc')->take(6)->pluck('recipe_id');
        $recipe_based_on_user_preference_on_diet =  DB::table('recipe_nutrition_facts')->orderBy('fat', 'asc')->take(6)->pluck('recipe_id');
        $recipe_based_on_user_preference_vegeterian = Recipe::where('category', 'vegetarian')->pluck('id')->toArray();

//        dd($recipe_based_on_user_preference_vegeterian);



        //recipes current user likes
        $user_like_recipe_ids = Like::where('user_id',$id)->where('like', 1)->pluck('recipe_id');

        //current user allergen and medical conditions
        $user_allergens = UserAllergen::where('user_id',$id)->pluck('name');
        $user_medical_conditions = UserMedicalCondition::where('user_id',$id)->pluck('name');

        $combined_recipes_with_cat_i_liked = array();

        //get  Recipes I liked
        $recipes_i_like = Like::where('user_id', $id)->pluck('recipe_id')->toArray();
//        dd($recipes_i_like);

        //get categories of recipes I liked
        for ($i=0; $i< sizeof($recipes_i_like); $i++){
            $categories_of_recipes_i_like[$i] = Recipe::where('id',$recipes_i_like[$i])->pluck('category')->toArray();

        }
//        dd($categories_of_recipes_i_like);
        //get recipes with same categories I liked
        for ($i=0; $i< sizeof($categories_of_recipes_i_like); $i++){
            $recipes_with_same_categories_i_liked[$i] = Recipe::where('category',$categories_of_recipes_i_like[$i])->pluck('id')->toArray();
            //get recipes with same categories I liked
            for ($j=0; $j< sizeof($recipes_with_same_categories_i_liked[$i]); $j++){
                $combined_recipes_with_cat_i_liked =  array_merge($combined_recipes_with_cat_i_liked, $recipes_with_same_categories_i_liked[$i]);
                $recipes_with_same_category_i_like = array_unique($combined_recipes_with_cat_i_liked , SORT_REGULAR);
            }

        }
//      dd($recipes_with_same_category_i_like);





        //get other users who loves the same recipes current user loves
        foreach ($user_like_recipe_ids as $user_like_recipe_id){
            $other_users_loves_my_recipes = Like::where('recipe_id',$user_like_recipe_id)->pluck('user_id');
            $based_on_other_user_recipe_ids = Like::where('user_id',$other_users_loves_my_recipes)->pluck('recipe_id')->toArray();

        }

        foreach ($user_like_recipe_ids as $user_like_recipe_id){
            $recipe_likes_allergens = RecipeAllergen::where('recipe_id',$user_like_recipe_id)->pluck('name');
            $common_recipe_allergens_based_on_likes = RecipeAllergen::where('name',$recipe_likes_allergens)->pluck('recipe_id')->toArray();
        }

        foreach ($user_like_recipe_ids as $user_like_recipe_id){
            $recipe_likes_medical_conditions = RecipeMedicalCondition::where('recipe_id',$user_like_recipe_id)->pluck('name');
            $common_recipe_medical_conditions_based_on_likes = RecipeMedicalCondition::where('name',$recipe_likes_medical_conditions)->pluck('recipe_id')->toArray();        }


        foreach ($user_allergens as $user_allergen){
            $common_allergen_recipes = RecipeAllergen::where('name',$user_allergen)->pluck('recipe_id')->toArray();
        }

        foreach ($user_medical_conditions as $user_medical_condition){
            $common_medical_condition_recipes = RecipeMedicalCondition::where('name',$user_medical_condition)->pluck('recipe_id')->toArray();
        }

        $recipe_id = array_unique(array_merge($common_allergen_recipes,$common_medical_condition_recipes) , SORT_REGULAR);
        $recipe_likes_id = array_unique(array_merge($common_recipe_allergens_based_on_likes,$common_recipe_medical_conditions_based_on_likes),SORT_REGULAR);
        $recipe_other_users_liked_id = array_unique($based_on_other_user_recipe_ids,SORT_REGULAR);
        return view('pages.recommended_recipe',
                        [
                            'user_preference'                           => $user_preference,
                            'recipe_id'                                 => $recipe_id,
                            'recipe_likes_id'                           => $recipe_likes_id,
                            'recipe_other_users_liked_id'               => $recipe_other_users_liked_id,
                            'recipe_based_on_user_preference_active'    => $recipe_based_on_user_preference_active,
                            'recipe_based_on_user_preference_on_diet'   =>  $recipe_based_on_user_preference_on_diet,
                            'recipe_based_on_user_preference_vegeterian' => $recipe_based_on_user_preference_vegeterian,
                            'recipes_with_same_category_i_like'        => $recipes_with_same_category_i_like

                            ]);
    }

}
