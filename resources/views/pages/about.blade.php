@extends('shared.master')

@section('content')
    {{--// About page content here--}}
    <!-- Titlebar
================================================== -->
    <section id="titlebar">
        <!-- Container -->
        <div class="container">

            <div class="eight columns">
                <h2>About</h2>
            </div>

            <div class="eight columns">
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="#">Home</a></li>
                        <li>About</li>
                    </ul>
                </nav>
            </div>

        </div>
        <!-- Container / End -->
    </section>



    <!-- Content
    ================================================== -->
    <div class="container">
        <div class="sixteen columns">

            <p>Vestibulum hendrerit luctus magna, sed <span class="highlight color">egestas leo malesuada</span> in. Morbi nec euismod metus, ut efficitur enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque lobortis euismod ante. Pellentesque viverra <span class="highlight gray">llitora torquent quam</span> ac nibh porta, sed malesuada leo ultrices.</p>

            <div class="clearfix"></div>
            <div class="margin-top-10"></div>

            <div class="post-quote">
                <span class="icon"></span>
                <blockquote>
                    No one who cooks, cooks alone. Even at her most solitary, a cook in the kitchen is surrounded by generations of cooks past, the advice and menus of cooks present, the wisdom of cookbook writers.
                    <span>Laurie Colwin</span>
                </blockquote>
            </div>

            <div class="clearfix"></div>
            <div class="margin-top-10"></div>


            <figure class="image-left">
                <a href="images/typographyImage-01.jpg" class="mfp-image" title="Photo Caption"><img src="images/typographyImage-02.jpg" alt=""></a>
                <figcaption>Photo Caption</figcaption>
            </figure>

            <p>
                <span class="dropcap">P</span>ellentesque dolor est, interdum euismod, <a href="#" class="tooltip top" title="First Tooltip">tooltip from top</a> nisl. Nam sed iaculis massa. Sed nisl lectus, tempor sed euismod quis, sollicitudin est  laoreet dignissim bibendum nam erat felis, commodo <a href="#" class="tooltip left" title="Second Tooltip">tooltip from left</a>  sed semper commodo vel mauris bibendum  <a href="#" class="tooltip right" title="Third Tooltip">tooltip from right</a> tempus. Nulla quis elit sed lectus commodo lacinia pretium sapien tempor class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla non interdum lectus. Nunc quis diam metus. Sed quis risus vel ante pulvinar tincidunt. Sed ullamcorper neque enim, <a href="#" class="tooltip bottom" title="Fourth Tooltip">tooltip from bottom</a> finibus laoreet nisi mattis nec.
            </p>


            <ul class="list-2">
                <li>Nam aliquam urna ut eros malesuada venenatis</li>
                <li>Pellentesque congue pulvinar maximus, lorem ipsum vulputate</li>
                <li>Maecenas pellentesque, enim ac ultrices hendrerit, lacus odio egestas</li>
                <li>Phasellus feugiat sem maximus enim ullamcorper, malesuada fermentum</li>
                <li>Donec consectetur nunc sit amet turpis ultricies tincidunt</li>
            </ul>

            <div class="margin-top-20"></div>

            <p>Vestibulum hendrerit luctus magna, sed <strong>interdum vitae</strong> leo malesuada in. Morbi nec euismod metus, ut efficitur enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque lobortis euismod ante. Pellentesque viverra quam ac nibh porta, sed malesuada leo ultrices. Quisque <strong>scelerisque turpis</strong>.</p>


            <a class="popup-youtube button color" href="https://www.youtube.com/watch?v=j-fAVocbLkk"><i class="fa fa-play-circle"></i> Open Video</a>
            <a class="popup-with-zoom-anim button color" href="#small-dialog" ><i class="fa fa-info-circle"></i> Open Popup</a><br/>

            <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                <h2 class="margin-bottom-10">Headline</h2>
                <p class="margin-reset">Donec fermentum, quam et dapibus facilisis, diam massa mollis lorem, vitae suscipit purus mi ac enim. Vestibulum sed massa vestibulum, consequat massa nec, pharetra arcu. Aliquam a quam et velit dapibus posuere eu in erat. </p>
            </div>

            <!-- Divider -->
            <span class="divider margin-top-30"></span>

            <h1>Heading h1</h1>
            <p>Morbi porttitor, elit quis porta lobortis, dui erat tristique dui, ut pulvinar quam mi at libero. Mauris mattis ac felis ac bibendum. Vestibulum euismod massa sit amet est molestie, sit amet ornare lorem posuere. Nam odio massa, fringilla at quam vitae, luctus imperdiet lacus.</p>

            <h2>Heading h2</h2>
            <p>Morbi porttitor, elit quis porta lobortis, dui erat tristique dui, ut pulvinar quam mi at libero. Mauris mattis ac felis ac bibendum. Vestibulum euismod massa sit amet est molestie, sit amet ornare lorem posuere. Nam odio massa, fringilla at quam vitae, luctus imperdiet lacus.</p>

            <h3>Heading h3</h3>
            <p>Morbi porttitor, elit quis porta lobortis, dui erat tristique dui, ut pulvinar quam mi at libero. Mauris mattis ac felis ac bibendum. Vestibulum euismod massa sit amet est molestie, sit amet ornare lorem posuere. Nam odio massa, fringilla at quam vitae, luctus imperdiet lacus.</p>

            <h4>Heading h4</h4>
            <p>Morbi porttitor, elit quis porta lobortis, dui erat tristique dui, ut pulvinar quam mi at libero. Mauris mattis ac felis ac bibendum. Vestibulum euismod massa sit amet est molestie, sit amet ornare lorem posuere. Nam odio massa, fringilla at quam vitae, luctus imperdiet lacus.</p>

            <h5>Heading h5</h5>
            <p>Morbi porttitor, elit quis porta lobortis, dui erat tristique dui, ut pulvinar quam mi at libero. Mauris mattis ac felis ac bibendum. Vestibulum euismod massa sit amet est molestie, sit amet ornare lorem posuere. Nam odio massa, fringilla at quam vitae, luctus imperdiet lacus.</p>

            <!-- Divider -->
            <span class="divider margin-top-20"></span>

        </div>
    </div>

    <!--
    <div class="margin-top-20"></div> -->


    <!-- Container -->
    <div class="container example-grid">

        <div class="one column">One</div>
        <div class="fifteen columns">Fifteen</div>

        <div class="two columns">Two</div>
        <div class="fourteen columns">Fourteen</div>

        <div class="three columns">Three</div>
        <div class="thirteen columns">Thirteen</div>

        <div class="four columns">Four</div>
        <div class="twelve columns">Twelve</div>

        <div class="five columns">Five</div>
        <div class="eleven columns">Eleven</div>

        <div class="six columns">Six</div>
        <div class="ten columns">Ten</div>

        <div class="seven columns">Seven</div>
        <div class="nine columns">Nine</div>

        <div class="eight columns">Eight</div>
        <div class="eight columns">Eight</div>

        <div class="clearfix"></div>
        <br>

        <div class="one-third column">One Third</div>
        <div class="one-third column">One Third</div>
        <div class="one-third column">One Third</div>

        <div class="one-third column">One Third</div>
        <div class="two-thirds column">Two Thirds</div>

    </div>
    <!-- Container / End -->


    <div class="margin-top-50"></div>

    </div>
    <!-- Wrapper / End -->


@endsection