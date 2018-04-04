@extends('shared.master')

@section('content')
     {{--Home page content here--}}
    <!-- Slider
================================================== -->
     @if (session('status'))
         <div class="alert alert-success">
             {{ session('status') }}
         </div>
     @endif

    <div id="homeSlider" class="royalSlider rsDefaultInv">

        <!-- Slide #1 -->
        <div class="rsContent">
            <a class="rsImg" href="images/sliderA_01.jpg"></a>
            <i class="rsTmb">Mexican Grilled <br> Corn Recipe</i>

            <!-- Slide Caption -->
            <div class="SlideTitleContainer rsABlock">
                <div class="CaptionAlignment">
                    <div class="rsSlideTitle tags">
                        <ul>
                            <li>Baking</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <h2 class="rsSlideTitle title"><a href="recipe-page-1.html">Mexican Grilled Corn Recipe</a></h2>

                    <div class="rsSlideTitle details">
                        <ul>
                            <li><i class="fa fa-cutlery"></i> 4 Servings</li>
                            <li><i class="fa fa-clock-o"></i> 30 Min</li>
                            <li><i class="fa fa-user"></i> by <a href="#">Sandra Fortin</a></li>
                        </ul>
                    </div>

                    <a href="recipe-page-1.html" class="rsSlideTitle button">View Recipe</a>
                </div>
            </div>

        </div>

        <!-- Slide #2 -->
        <div class="rsContent">
            <a class="rsImg" href="images/sliderA_02.jpg"></a>
            <i class="rsTmb">Roast Chicken <br>With Lemon Gravy</i>

            <!-- Slide Caption -->
            <div class="SlideTitleContainer rsABlock">
                <div class="CaptionAlignment">
                    <div class="rsSlideTitle tags">
                        <ul>
                            <li>Curry</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <h2 class="rsSlideTitle title"><a href="recipe-page-1.html">Roast Chicken <br>With Lemon Gravy</a></h2>

                    <div class="rsSlideTitle details">
                        <ul>
                            <li><i class="fa fa-cutlery"></i> 4 Servings</li>
                            <li><i class="fa fa-clock-o"></i> 1 Hr 20 Min</li>
                            <li><i class="fa fa-user"></i> by <a href="#">Sandra Fortin</a></li>
                        </ul>
                    </div>

                    <a href="recipe-page-1.html" class="rsSlideTitle button">View Recipe</a>
                </div>
            </div>

        </div>

        <!-- Slide #3 -->
        <div class="rsContent">
            <a class="rsImg" href="images/sliderA_03.jpg"></a>
            <i class="rsTmb">Avocado Melon Salad <br> With Lime Vinaigrette </i>

            <!-- Slide Caption -->
            <div class="SlideTitleContainer rsABlock">
                <div class="CaptionAlignment">
                    <div class="rsSlideTitle tags">
                        <ul>
                            <li>Salads</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <h2 class="rsSlideTitle title"><a href="recipe-page-2.html">Avocado Melon Salad With Lime Vinaigrette</a></h2>

                    <div class="rsSlideTitle details">
                        <ul>
                            <li><i class="fa fa-cutlery"></i> 1 Servings</li>
                            <li><i class="fa fa-clock-o"></i> 15 Min</li>
                            <li><i class="fa fa-user"></i> by <a href="#">Sandra Fortin</a></li>
                        </ul>
                    </div>

                    <a href="recipe-page-2.html" class="rsSlideTitle button">View Recipe</a>
                </div>
            </div>

        </div>

        <!-- Slide #4 -->
        <div class="rsContent">
            <a class="rsImg" href="images/sliderA_04.jpg"></a>
            <i class="rsTmb">Chunky Beef Stew</i>

            <!-- Slide Caption -->
            <div class="SlideTitleContainer rsABlock">
                <div class="CaptionAlignment">
                    <div class="rsSlideTitle tags">
                        <ul>
                            <li>Beef</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <h2 class="rsSlideTitle title"><a href="recipe-page-1.html">Chunky Beef Stew</a></h2>

                    <div class="rsSlideTitle details">
                        <ul>
                            <li><i class="fa fa-cutlery"></i> 4 Servings</li>
                            <li><i class="fa fa-clock-o"></i> 2 Hr 30 Min</li>
                            <li><i class="fa fa-user"></i> by <a href="#">Sandra Fortin</a></li>
                        </ul>
                    </div>

                    <a href="recipe-page-1.html" class="rsSlideTitle button">View Recipe</a>
                </div>
            </div>

        </div>

        <!-- Slide #5 -->
        <div class="rsContent">
            <a class="rsImg" href="images/sliderA_05.jpg"></a>
            <i class="rsTmb">Farmhouse Vegetable <br> And Barley Soup</i>

            <!-- Slide Caption -->
            <div class="SlideTitleContainer rsABlock">
                <div class="CaptionAlignment">
                    <div class="rsSlideTitle tags">
                        <ul>
                            <li>Soups</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <h2 class="rsSlideTitle title"><a href="recipe-page-1.html">Farmhouse Vegetable And Barley Soup</a></h2>

                    <div class="rsSlideTitle details">
                        <ul>
                            <li><i class="fa fa-cutlery"></i> 4 Servings</li>
                            <li><i class="fa fa-clock-o"></i> 1 Hr 30 Min</li>
                            <li><i class="fa fa-user"></i> by <a href="#">Sandra Fortin</a></li>
                        </ul>
                    </div>

                    <a href="recipe-page-1.html" class="rsSlideTitle button">View Recipe</a>
                </div>
            </div>

        </div>

    </div>



    <!-- Content
    ================================================== -->
    <div class="container">

        <!-- Masonry -->
        <div class="twelve columns">

            <!-- Headline -->
            <h3 class="headline">Latest Recipes</h3>
            <span class="line rb margin-bottom-35"></span>
            <div class="clearfix"></div>

            <!-- Isotope -->
            <div class="isotope">

                @foreach($recipes as $recipe)
                <!-- Recipe #1 -->
                <div class="four recipe-box columns">

                    <?php
                    $recipe_img = DB::table('recipe_images')->where('recipe_id',$recipe->id)->pluck('img_url')->first();
                    ?>
                    <!-- Thumbnail -->
                    <div class="thumbnail-holder">
                        <a href="{{url('recipe/'.$recipe->id)}}">
                            <img src="{{asset('storage/images/recipes/'.$recipe_img)}}" alt=""/>
                            <div class="hover-cover"></div>
                            <div class="hover-icon">View Recipe</div>
                        </a>
                    </div>

                    <!-- Content -->
                    <div class="recipe-box-content">
                        <h3><a href="{{url('recipe/'.$recipe->id)}}">{{$recipe->title}}</a></h3>

                        <div class="rating five-stars">
                            <div class="star-rating"></div>
                            <div class="star-bg"></div>
                        </div>

                        <div class="recipe-meta"><i class="fa fa-clock-o"></i> 30 min</div>

                        <div class="clearfix"></div>
                    </div>
                </div>



            <div class="clearfix"></div>

                    @endforeach

        </div>

        </div>


        <!-- Sidebar
        ================================================== -->
        <div class="four columns">

            <!-- Search Form -->
            <div class="widget search-form">
                <nav class="search">
                    <form action="#" method="get">
                        <button><i class="fa fa-search"></i></button>
                        <input class="search-field" type="text" placeholder="Search for recipes" value=""/>
                    </form>
                </nav>
                <div class="clearfix"></div>
            </div>


            <!-- Author Box -->
            <div class="widget">
                <div class="author-box">
                    <span class="title">Author</span>
                    <span class="name">Sarah <br> Ashour</span>
                    <span class="contact"><a href="mailto:sarahashour1995@hotmail.com">sarahashour1995@hotmail.com</a></span>
                    <img src="images/author-photo.png" alt="">
                    <p>I'm Sarah and this is where I share my stuff. I am madly in love with food. You will find a balance of healthy recipes, comfort food and indulgent desserts.</p>
                </div>
            </div>


            <!-- Popular Recipes -->
            <div class="widget">
                <h4 class="headline">Popular Recipes</h4>
                <span class="line margin-bottom-30"></span>
                <div class="clearfix"></div>

                <!-- Recipe #1 -->
                <a href="recipe-page-1.html" class="featured-recipe">
                    <img src="images/featuredRecipe-01.jpg" alt="">

                    <div class="featured-recipe-content">
                        <h4>Choclate Cake With Green Tea Cream</h4>

                        <div class="rating five-stars">
                            <div class="star-rating"></div>
                            <div class="star-bg"></div>
                        </div>
                    </div>
                    <div class="post-icon"></div>
                </a>

                <!-- Recipe #2 -->
                <a href="recipe-page-1.html" class="featured-recipe">
                    <img src="images/featuredRecipe-02.jpg" alt="">

                    <div class="featured-recipe-content">
                        <h4>Mexican Grilled Corn Recipe</h4>

                        <div class="rating five-stars">
                            <div class="star-rating"></div>
                            <div class="star-bg"></div>
                        </div>
                    </div>
                    <div class="post-icon"></div>
                </a>

                <!-- Recipe #3 -->
                <a href="recipe-page-1.html" class="featured-recipe">
                    <img src="images/featuredRecipe-03.jpg" alt="">

                    <div class="featured-recipe-content">
                        <h4>Pollo Borracho With Homemade Tortillas</h4>

                        <div class="rating five-stars">
                            <div class="star-rating"></div>
                            <div class="star-bg"></div>
                        </div>
                    </div>
                    <div class="post-icon"></div>
                </a>

                <div class="clearfix"></div>
            </div>


        </div>


    </div>
    <!-- Container / End -->

    <div class="margin-top-5"></div>


    </div>
    <!-- Wrapper / End -->
@endsection