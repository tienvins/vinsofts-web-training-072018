<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/below.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.lazyload.min.js"></script>
   
    <title>Vinsofts</title>
    <style >
       <?php 
            include 'css/above.css';
       ?>
    </style>
</head>
<body>
    <main class="container container--max">
        <?php include 'header.php' ?>
        <section class="row">
            <div class="row slideshow">
                <div id="carousel-id" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="asset/slide1.png" alt="" >
                            </div>
                            <div class="item">
                                    <img src="asset/slide2.png" alt="" >
                            </div>   
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                        </ol>                            
                        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>               
            </div>
            <div class="row services">
                <div class="col-xs-12">
                    <h2>OUR SERVICES</h2>
                    <h5>We Get The Job Done, No Matter Your Project</h5>
                </div>
                <div class="col-md-4 col-sm-4">
                        <img class="lazy" data-original="asset/mobile-app.png" alt="">
						<h4>Mobile App Development</h4>
						<div class="ct">We are expects in mobile development industry for years. We have a team with 10 skilled developers that have been in this fields for at least 5 years so for</div>
						<button class="btn btn-primary">Explore more >></button>
                </div>
                <div class="col-md-4 col-sm-4">
                        <img class="lazy" data-original="asset/mobile.png" alt="">
						<h4>Mobile App Development</h4>
						<div class="ct">We are expects in mobile development industry for years. We have a team with 10 skilled developers that have been in this fields for at least 5 years so for</div>
						<button class="btn btn-primary">Explore more >></button>
                </div>
                <div class="col-md-4 col-sm-4">
                        <img class="lazy" data-original="asset/custom-it.png" alt="">
						<h4>Mobile App Development</h4>
						<div class="ct">We are expects in mobile development industry for years. We have a team with 10 skilled developers that have been in this fields for at least 5 years so for</div>
						<button class="btn btn-primary">Explore more >></button>
                </div>
                <div class="col-xs-12 dash">
                    <img class="lazy" data-original="asset/ngang.png" alt="">
                </div>

                
            </div>
            <div class="row clients">
                <div class="col-xs-12">
                   <h2>OUR ARTICLES</h2>
                    <h5>We Like To Keep Anyone Updated</h5>
                </div>
                <div class=" col-md-2 col-md-offset-1  col-sm-offset-1 col-xs-6 col-sm-2">
                    <img class="lazy" data-original="asset/client1.png" alt="">
                </div>
                <div class="col-md-2 col-xs-6 col-sm-2">
                    <img class="lazy" data-original="asset/client2.png" alt="">
                </div>
                <div class="col-md-2 col-xs-6 col-sm-2">
                    <img class="lazy" data-original="asset/client3.png" alt="">
               </div>
               <div class="col-md-2 col-xs-6 col-sm-2">
                    <img class="lazy" data-original="asset/client4.png" alt="">
                </div>
                <div class="col-md-2 col-xs-6 col-sm-2">
                    <img class="lazy" data-original="asset/client5.png" alt="">
                </div>  

                <div class="col-xs-12 dash">
                        <img class="lazy" data-original="asset/ngang.png" alt="">
                    </div>
            </div>
            <div class="row articles">
                    <div class="col-xs-12 ">
                        <h2>OUR ARTICLES</h2>
                         <h5>We Like To Keep Anyone Updated</h5>
                    </div>
                    <div class="col-md-4 col-sm-4 ">
                            <img class="col-sm-12 lazy" data-original="asset/article1.png" alt="">
                            <h4>VESTIBULUM IPSUMS EROS</h4>
                            <div class="articles-about">We are expects in mobile development industry for years. We have a team with 10 skilled developers that have been in this fields for at least 5 years so for</div>
                    </div>
                    <div class="col-md-4 col-sm-4 ">
                            <img class="col-sm-12 lazy" data-original="asset/article2.png" alt="">
                            <h4>VESTIBULUM IPSUMS EROS</h4>
                            <div class="articles-about">We are expects in mobile development industry for years. We have a team with 10 skilled developers that have been in this fields for at least 5 years so for</div>
                        </div>
                    <div class="col-md-4 col-sm-4 ">
                            <img class="col-sm-12 lazy" data-original="asset/article3.png" alt="">
                            <h4>VESTIBULUM IPSUMS EROS</h4>
                            <div class="articles-about">We are expects in mobile development industry for years. We have a team with 10 skilled developers that have been in this fields for at least 5 years so for</div>
                    </div>
            </div>
        </section>
        <?php include 'footer.php' ?>
    </main>
</body>
</html>