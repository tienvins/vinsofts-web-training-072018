<!doctype html>
<html lang="en">
	<head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="src/css/below.css">
	    <title>Vinsofts</title>
	    <?php
	        echo "<style>". file_get_contents("src/css/above.css")."</style>"; 
	    ?>
	</head>
	<body>
		<?php include "header.php" ?>
		<div class="bg-1">
			<div id="demo" class="carousel slide" data-ride="carousel" data-interval="2000">
				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
				</ul>
				<!-- The slideshow -->
				<div class="carousel-inner text-center">
					<div class="carousel-item active">
						<img src="src/images/slide1.png" alt="" width="100%" height="500px">
					</div>
					<div class="carousel-item">
						<img src="src/images/slide2.jpg" alt="" width="100%" height="500px">
					</div>
				</div>
			</div>
			<div class="text text-center">
				<h3>WEB DESIGN COMPANY REPUPATION</h3>
				<p>we've been brougth the most valued products and <br>
				servecies to our global clients during last 10 year</p>
			</div>
		</div>
		<section class="container">
			<h1 class="text-center">OUR SERVICES</h1>
			<div class="services row text-center">
				<div class="col-sm-4">
					<img class="lazyload" data-original="src/images/service1.png" alt="">
					<article>
						<h4>Mobile App Development</h4>
						<p>We are experts in mobile development industry for years. We have a team with 10 skilled developers that have been in this field for at least 5 years so far.</p>
						<button class="btn btn-primary" type="">Explore more >></button>
					</article>
				</div>
				<div class="col-sm-4">
					<img class="lazyload" data-original="src/images/service2.png" alt="">
					<h4>Website Development</h4>
					<p>We provide website development services. <br>
					We are experts in below fields: <br>
					WordPress development <br>
					Magento development</p>
				<button class="btn btn-primary" type="">Explore more >></button>
				</div>
				<div class="col-sm-4">
					<img class="lazyload" data-original="src/images/service3.png" alt="">
					<h4>Custom IT & Website Services</h4>
					<p>We provide other IT and software services too.We have a team of experts in many fields of software development,coding as well as IT related technologies.</p>
					<button class="btn btn-primary" type="">Explore more >></button>
				</div>
			</div>
		</section>
		<section class="container">
			<h1 class="text-center">OUR CLIENTS</h1>
			<div class="clients row text-center">
				<div class="col">
					<img class="lazyload" data-original="src/images/client1.png" alt="">
				</div>
				<div class="col">
					<img class="lazyload" data-original="src/images/client2.png" alt="">
				</div>
				<div class="col">
					<img class="lazyload" data-original="src/images/client3.png" alt="">
				</div>
				<div class="col client4">
					<img class="lazyload" data-original="src/images/client4.png" alt="">
				</div>
				<div class="col client5">
					<img class="lazyload" data-original="src/images/client5.png" alt="">
				</div>
			</div>
		</section>
		<section class="container">
			<h1 class="text-center">OUR ARTICLES</h1>
			<div class="articles row text-center">
				<div class="col-sm">
					<img class="lazyload" data-original="src/images/article1.png" alt="">
					<h4>Vestibulum Ipsums Eros</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ....</p>
				</div>
				<div class="col-sm">
					<img class="lazyload" data-original="src/images/article2.png" alt="">
					<h4>Vestibulum Ipsums Eros</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ....</p>
				</div>
				<div class="col-sm">
					<img class="lazyload" data-original="src/images/article3.png" alt="">
					<h4>Vestibulum Ipsums Eros</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ....</p>
				</div>
			</div>
		</section>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="src/lazyload/jquery-1.11.3.min.js"></script>
		<script src="src/lazyload/jquery.lazyload.min.js"></script>
		<script src="src/js/index.js"></script>
		<?php include "footer.php" ?>
	</body>
</html>