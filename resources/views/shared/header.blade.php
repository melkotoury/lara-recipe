

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Sarah Ashour</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/colors/green.css')}}" id="colors">
<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">


<!-- Header
================================================== -->
<header id="header">

<!-- Container -->
<div class="container">

	<!-- Logo / Mobile Menu -->
	<div class="three columns">
		<div id="logo">
			<h1><a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="Chow" /></a></h1>
		</div>
	</div>


<!-- Navigation
================================================== -->
<div class="thirteen columns navigation">

	<nav id="navigation" class="menu nav-collapse">
		<ul>
			<li><a href="{{url('/')}}" id="current">Home</a></li>

<!--
			<li><a href="#">Demos</a>
				<ul>
					<li><a href="index.html">Grid Homepage</a></li>
					<li><a href="index-2.html">List Homepage</a></li>
					<li><a href="index-3.html">Boxed Version</a></li>
				</ul>
			</li>
-->
			<li><a href="{{url('about')}}">About</a></li>

			<li><a href="{{url('browse_recipe')}}">Recipes</a></li>

            <li><a href="{{url('contact')}}">Contact</a></li>

			<li><a href="#">Login/Register</a>
				<ul>
					<li><a href="{{url('login')}}">Login</a></li>
					<li><a href="{{url('register')}}">Register</a></li>
				</ul>
			</li>

<!--
			<li><a href="#">Shop</a>
				<ul>
					<li><a href="shop.html">Shop</a></li>
					<li><a href="product-page.html">Product Page</a></li>
				</ul>
			</li>
-->

			<li>
           <a href="#">
         <img src="{{asset('images/author-photo.png')}}" alt="" class="img img-responsive img-circle nav-pp">
           <span class="profile-name-nav">Jane Doe</span>
            </a>
			    <ul>
                    <li><a href="{{url('my_recipes')}}">My Recipes</a></li>
                    <li><a href="{{url('my_reviews')}}">My Reviews</a></li>
			        <li><a href="{{url('recipe/create')}}">Submit Recipe</a></li>
			        <li><a href="{{url('logout')}}"><i class="fa fa-login"></i> Logout</a></li>
			    </ul>
			</li>
		</ul>
	</nav>

</div>

</div>
<!-- Container / End -->
</header>