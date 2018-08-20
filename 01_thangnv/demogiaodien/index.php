<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- CSS Header/Footer/Above -->
    <style>
        <?php 
            echo file_get_contents("css/cssrun/header.min.css");
            echo file_get_contents("css/cssrun/footer.min.css");
            echo file_get_contents("css/cssrun/above.min.css");
        ?>
    </style>

    <!-- CSS Below -->
    <link rel="stylesheet" href="css/cssrun/below.min.css">
    <title>Demo giao diện web</title>
</head>

<body>

    <?php
        @include('templates/header.php');
    ?>

    <!-- Slide -->
    <aside class="slide">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slide1.jpg" alt="Slide1">
                </div>
                <div class="carousel-item">
                    <img src="img/slide2.jpg" alt="Slide2">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </aside>

    <section class="our-services">
        <h2>OUR SERVICES</h2>
        <div class="content-our-services">
            <div class="item-content-our-services">
                <img src="img/mobile-app.jpg" alt="">
                <h5>Mobile App Development</h5>
                <p>We are experts in mobile development industry for years. We have a team with 10 skilled developers that have
                    been in this field for at least 5 years so far.</p>
                <button class="btn btn-primary">Explore more >></button>
            </div>
            <div class="item-content-our-services">
                <img src="img/web-app.png" alt="">
                <h5>Website Development</h5>
                <p>We provide website development services. We are experts in below fields: WordPress development Magento development
                </p>
                <button class="btn btn-primary">Explore more >></button>
            </div>
            <div class="item-content-our-services">
                <img src="img/mobilyne.png" alt="">
                <h5>Custom IT & Software Services</h5>
                <p>We provide other IT and software services too.We have a team of experts in many fields of software development,coding
                    as well as IT related technologies.</p>
                <button class="btn btn-primary">Explore more >></button>
            </div>
        </div>
    </section>

    <section class="our-clients">
        <h2>OUR CLIENTS</h2>
        <div class="content-our-clients">
            <div>
                <img src="img/oc-1.png" alt="Our Clients">
            </div>
            <div>
                <img src="img/oc-2.png" alt="Our Clients">
            </div>
            <div>
                <img src="img/oc-3.png" alt="Our Clients">
            </div>
            <div>
                <img src="img/oc-4.png" alt="Our Clients">
            </div>
            <div>
                <img src="img/oc-5.png" alt="Our Clients">
            </div>
        </div>
    </section>

    <section class="our-articles">
        <h2>OUR ARTICLES</h2>
        <div class="content-our-articles">
            <div class="item-content-our-articles">
                <img src="img/oa-1.jpg" alt="">
                <h5>Vestibulum Ipsums Eros</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam ....</p>
            </div>
            <div class="item-content-our-articles">
                <img src="img/oa-2.jpg" alt="">
                <h5>Vestibulum Ipsums Eros</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam ....</p>
            </div>
            <div class="item-content-our-articles">
                <img src="img/oa-3.jpg" alt="">
                <h5>Mobile App Development</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam ....</p>
            </div>
        </div>
    </section>


    <?php
    @include('templates/footer.php');
    ?>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>

</html>