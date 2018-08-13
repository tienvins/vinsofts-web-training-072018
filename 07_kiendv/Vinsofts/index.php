<!doctype html>
<html lang="en">
	<head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="src/css/styles.css">
	    <title>Vinsofts</title>
	    <?php
	        echo "<style>". file_get_contents("src/css/above.css")."</style>"; 
	    ?>
	</head>
	<body>
		<div class="contact fixed-top">
			<div class="container">
				<span><i style="color: #00A9F0" class="fab fa-skype"></i> kiendo5695@gmail.com</span>
				<span><i style="color: #ea2112" class="far fa-envelope"></i> kiendo5695@gmail.com</span>
				<span><i style="color: #46e743" class="fas fa-phone"></i> 0123456789</span>
			</div>
		</div>
		<header>
			<nav class="navbar fixed-top navbar-expand-lg navbar-light" data-toggle="sticky-onscroll">
				<div class="container">
					<div class="navbar-brand">
						<div><img src="src/images/logo.png" alt=""></div>
						<div>
							<p>Your success, Our pride!</p>
						</div>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Protfolio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Gallery</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Contact</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Recruiment</a>
							</li>
							<li class="nav-item desktop">
								<a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li class="nav-item desktop">
								<a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="nav-item desktop">
								<a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
							</li>
							<li class="nav-item desktop">
								<a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
							</li>
							<li class="nav-item mobile">
								<a class="fb-mb" href="#"><i class="fab fa-facebook-f"></i></a>
								<a class="tw-mb" href="#"><i class="fab fa-twitter"></i></a>
								<a class="ig-mb" href="#"><i class="fab fa-instagram"></i></a>
								<a class="gg-mb" href="#"><i class="fab fa-google-plus-g"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
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
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<h3>ABOUT VINSOFTS</h3>
						<p>Vinsofts Co., Ltd is software innovation and outsourcing company based in Hanoi, Vietnam. We provide top quality outsourcing services to global clients from USA to Australia, from Japan to EU countries.</p>
					</div>
					<div class="col-sm-4">
						<h3>CONTACT US</h3>
						<form>
							<div class="text-left">
								Name<span style="color: red">&#42;</span>
							</div>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control" placeholder="First name">
							</div>
							<div class="col">
								<input type="text" class="form-control" placeholder="Last name">
							</div>
						</div>
						<div class="text-left label">
							Email<span style="color: red">&#42;</span>
						</div>
						<div class="row">
							<div class="col">
								<input type="email" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="text-left label">
							Comment<span style="color: red">&#42;</span>
						</div>
						<div class="row">
							<div class="col">
								<textarea name="" class="form-control"></textarea>
							</div>
						</div>
						<div class="text-left label">
							<input type="submit" name="" value="Submit"> 							
						</div>
					</form>
					</div>
					<div class="col-sm">
						<h3>OUR INFO</h3>
						<div class="label" id="googleMap"></div>
						<p>Ki ốt số 3 Nhà N9, Khu 212, Học Viện Kỹ Thuật Quân Sự, <br>
						Đường Tân Xuân, Phường Xuân Đình, Quận Bắc Từ Liêm, Hà Nội</p>
					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>