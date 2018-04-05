<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\RecipeAdditionalInfo;
use App\RecipeImage;
use App\RecipeMedicalCondition;
use App\RecipeAllergen;
use App\RecipeNutritionFact;
use App\Review;
use App\RecipeIngredient;
use App\RecipeDirection;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recipe.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe_id
     * @return \Illuminate\Http\Response
     */
    public function show( $recipe_id)
    {
        $recipe = Recipe::find($recipe_id);
        $recipe_additional_info = RecipeAdditionalInfo::where('recipe_id',$recipe_id)->first();
        $recipe_image = RecipeImage::where('recipe_id', $recipe_id)->get();
        $recipe_medical_condition = RecipeMedicalCondition::where('recipe_id', $recipe_id)->get();
        $recipe_allergen = RecipeAllergen::where('recipe_id', $recipe_id)->get();
        $recipe_nutrition_fact = RecipeNutritionFact::where('recipe_id', $recipe_id)->first();
        $recipe_review = Review::where('recipe_id', $recipe_id)->get();
        $recipe_ingredient = RecipeIngredient::where('recipe_id', $recipe_id)->get();
        $recipe_direction = RecipeDirection::where('recipe_id', $recipe_id)->get();

//        dd($recommend_recipes);
        return view('recipe.details',['recipe'=> $recipe ,
                                            'recipe_additional_info'=>$recipe_additional_info,
                                            'recipe_image'=>$recipe_image,
                                            'recipe_medical_condition'=>$recipe_medical_condition,
                                            'recipe_allergen'=>$recipe_allergen,
                                            'recipe_nutrition_fact'=>$recipe_nutrition_fact,
                                            'recipe_review'=>$recipe_review,
                                            'recipe_ingredient'=>$recipe_ingredient,
                                            'recipe_direction'=> $recipe_direction]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit( $recipe_id)
    {
        return view('recipe.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $recipe_id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy( $recipe_id)
    {
        //
    }


}
