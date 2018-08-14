<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="view-port" content="width= device-width">
    <link rel="stylesheet" href="css/cssrun/below.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Vinsofts</title>
</head>
<style>
    <?php 
        echo file_get_contents("css/cssrun/above.css"); 
        echo file_get_contents("css/cssrun/header.css");
        echo file_get_contents("css/cssrun/footer.css");
    ?>
</style>
<body>
    <!-- main -->
    <main>
        <!-- header -->
        <?php include('templates/header.php') ?>
        <!-- end header -->
        <!-- menu responsive -->
        <nav class="menu-responsive">
            <select>
                <option value="#">Home</option>
                <option value="#">Protfolio</option>
                <option value="#">Services</option>
                <option value="#">Gallery</option>
                <option value="#">Contact</option>
                <option value="#">Recruitment</option>
            </select>
        </nav>
        <!-- end menu -->
        <!-- slide -->
        <div class="slide">
            <div class="text-title">WEB DESIGN COMPANY REPUPATION</div>
            <div class="text-content">we've been brougth the most valued products and
                    servecies to our global clients during last 10 year</div>
        </div>
        <!-- end slide -->
        <!-- content -->
        <content>
            <section class="title">
                <p>OUR SERVICES</p>
                <span>We Get The Job Done, No Matter The Project</span>
            </section>
            <article class="box-main">
                    <ul>
                        <li>
                            <div class="box-img"><img src="images/ipad.jpg" alt="" height="104px"></div>
                            <div class="box-title">Mobile App Development</div>
                            <div class="box-desc">We are experts in mobile development
                                    industry for years. We have a team with 10
                                    skilled developers that have been in this
                                    field for at least 5 years so far.</div>
                            <div class="box-link"><span>Explore more >></span></div>
                        </li>
                        <li>
                            <div class="box-img"><img src="images/pc.jpg" alt="" height="104px"></div>
                            <div class="box-title">Mobile Development</div>
                            <div class="box-desc">We provide website development services.
                                    We are experts in below fields:
                                    WordPress development
                                    Magento development.</div>
                            <div class="box-link"><span>Explore more >></span></div>
                        </li>
                            <li>
                                <div class="box-img"><img src="images/m.jpg" alt="" height="104px"></div>
                                <div class="box-title">Custom IT & Software Services</div>
                                <div class="box-desc">We provide other IT and software services
                                        too.We have a team of experts in many fields
                                        of software development,coding as well as IT
                                        related technologies.</div>
                                <div class="box-link"><span>Explore more >></span></div>
                            </li>
                    </ul>
            </article>
            <div class="clear"></div>
            <section class="title">
                <div class="line"></div>
                <p>OUR CLIENTS</p>
                <span>The Circle Of Live And Deft Continute..</span>
            </section>
            <article class="people">
                <ul>
                    <li><img src="images/people.jpg" alt=""></li>
                    <li><img src="images/people2.jpg" alt=""></li>
                    <li><img src="images/people3.jpg" alt=""></li>
                    <li><img src="images/people4.jpg" alt=""></li>
                    <li><img src="images/people5.jpg" alt=""></li>
                </ul>
            </article>
            <div class="clear"></div>
            <section class="title">
                <div class="line"></div>
                <p>OUR ARTICLE</p>
                <span>We Like To Keep Everyone Updated</span>
            </section>
            <article class="product">
                <ul>
                    <li>
                        <div class="product-img"><img src="images/article1.jpg" alt=""></div>
                        <div class="product-title">Vestibulum Ipsums Eros</div>
                        <div class="product-desc">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam ....</div>
                    </li>
                    <li>
                        <div class="product-img"><img src="images/article2.jpg" alt=""></div>
                        <div class="product-title">Vestibulum Ipsums Eros</div>
                        <div class="product-desc">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam ....</div>
                    </li>
                    <li>
                        <div class="product-img"><img src="images/article3.jpg" alt=""></div>
                        <div class="product-title">Vestibulum Ipsums Eros</div>
                        <div class="product-desc">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam ....</div>
                    </li>
                </ul>
            </article>
            <div class="clear"></div>
        </content>
        <!-- end content -->
        <!-- footer -->
        <?php include('templates/footer.php') ?>
        <!-- end footer -->
    </main>
    <!-- end main -->
</body>
</html>
