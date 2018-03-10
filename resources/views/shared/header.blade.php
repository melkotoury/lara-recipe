

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
			<h1><a href="index.html"><img src="{{asset('images/logo.png')}}" alt="Chow" /></a></h1>
		</div>
	</div>


<!-- Navigation
================================================== -->
<div class="thirteen columns navigation">

	<nav id="navigation" class="menu nav-collapse">
		<ul>
			<li><a href="index.html" id="current">Home</a></li>

<!--
			<li><a href="#">Demos</a>
				<ul>
					<li><a href="index.html">Grid Homepage</a></li>
					<li><a href="index-2.html">List Homepage</a></li>
					<li><a href="index-3.html">Boxed Version</a></li>
				</ul>
			</li>
-->
			<li><a href="about.html">About</a></li>

			<li><a href="browse-recipes.html">Recipes</a></li>

            <li><a href="contact.html">Contact</a></li>

			<li><a href="#">Login/Register</a>
				<ul>
					<li><a href="login.html">Login</a></li>
					<li><a href="register.html">Register</a></li>
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
         <img src="images/author-photo.png" alt="" class="img img-responsive img-circle nav-pp">
           <span class="profile-name-nav">Jane Doe</span>
            </a>
			    <ul>
                    <li><a href="my_recipes.html">My Recipes</a></li>
                    <li><a href="my_reviews.html">My Reviews</a></li>
			        <li><a href="submit-recipe.html">Submit Recipe</a></li>
			        <li><a href=""><i class="fa fa-login"></i> Logout</a></li>
			    </ul>
			</li>
		</ul>
	</nav>

</div>

</div>
<!-- Container / End -->
</header>