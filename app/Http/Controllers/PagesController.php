<?php

namespace App\Http\Controllers;
use App\Recipe;
use App\Review;

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
        return view('pages.browse_recipe');
    }
    public function recommended_recipe(){
        return view('pages.recommended_recipe');
    }

}
