<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="run/below/style.min.css">
    <title>Vinsofts</title>
    <style>
        <?php include "run/above/header_des.min.css" ?>
    </style>
</head>
<body>
    <main>
        <!-- header -->
        <header>
            <!-- header left -->
            <div class="header-left">
                <img src="images/logo.jpg" alt="vinsofts" width="94px;" height="54px;"><br/>
                <p>Your success, our pride!</p>
            </div>
            <!-- header-right -->
            <div class="header-right">
                <div class="header-right-top">
                    <ul>
                        <li><img src="images/skype.jpg" alt="skype">Skype: Vinsofts.com</li>
                        <li><img src="images/mail.jpg" alt="mail">Mail: Contact@vinsofts.com</li>
                        <li><img src="images/phone.jpg" alt="phone">Hotline: 0988 988 988</li>
                    </ul>
                </div>
                <nav>
                    <ul class="menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Protfolio</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Recruitment</a></li>
                    </ul>
                    <ul class="icon">
                            <li><a href="#"><img src="images/fb.jpg" alt="fb"></a></li>
                            <li><a href="#"><img src="images/tw.jpg" alt="tw"></a></li>
                            <li><a href="#"><img src="images/in.jpg" alt="yt"></a></li>
                            <li><a href="#"><img src="images/g.jpg" alt="gg"></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- end header -->
        <!-- slide -->
        <div class="w3-content w3-section slide">
            <img class="mySlides" src="images/slide1.jpg" alt="slide" style="width: 1000px; height: auto;">
            <img class="mySlides" src="images/silde2.jpg" alt="slide2" style="width: 1000px; height: auto;">
            <div class="text-title">WEB DESIGN COMPANY REPUPATION</div>
            <div class="text-content">we've been brougth the most valued products and
                    servecies to our global clients during last 10 year</div>
        </div>
        <script>
        var myIndex=0;carousel();function carousel(){var i;var x=document.getElementsByClassName("mySlides");for(i=0;i<x.length;i++){x[i].style.display="none"}myIndex++;if(myIndex>x.length){myIndex=1}x[myIndex-1].style.display="block";setTimeout(carousel,1000)}
        </script>
        <!-- end slide -->
        <!-- content -->
        <content>
            <section class="title">
                <p>OUR SERVICES</p>
            </section>
            <article class="box-main">
                    <ul>
                        <li>
                            <div class="box-img"><img src="images/ipad.jpg" alt="top" height="104px"></div>
                            <div class="box-title">Mobile App Development</div>
                            <div class="box-desc">We are experts in mobile development
                                    industry for years. We have a team with 10
                                    skilled developers that have been in this
                                    field for at least 5 years so far.</div>
                            <div class="box-link"><span>Explore more >></span></div>
                        </li>
                        <li>
                            <div class="box-img"><img src="images/pc.jpg" alt="mid" height="104px"></div>
                            <div class="box-title">Mobile Development</div>
                            <div class="box-desc">We provide website development services.
                                    We are experts in below fields:
                                    WordPress development
                                    Magento development.</div>
                            <div class="box-link"><span>Explore more >></span></div>
                        </li>
                            <li>
                                <div class="box-img"><img src="images/m.jpg" alt="bott" height="104px"></div>
                                <div class="box-title">Custom IT & Software Services</div>
                                <div class="box-desc">We provide other IT and software services
                                        too.We have a team of experts in many fields
                                        of software development,coding as well as IT
                                        related technologies.</div>
                                <div class="box-link"><span>Explore more >></span></div>
                            </li>
                    </ul>
            </article>
            <div class="clear" style="clear: both"></div>
            <section class="title">
                <div class="line"></div>
                <p>OUR CLIENTS</p>
            </section>
            <article class="people">
                <ul>
                    <li><img src="images/people.jpg" alt="T1"></li>
                    <li><img src="images/people2.jpg" alt="T2"></li>
                    <li><img src="images/people3.jpg" alt="T3"></li>
                    <li><img src="images/people4.jpg" alt="T4"></li>
                    <li><img src="images/people5.jpg" alt="T5"></li>
                </ul>
            </article>
            <section class="title">
                 <div class="line"></div>
                <p>OUR ARTICLE</p>
                <span>We Like To Keep Everyone Updated</span>
            </section>
            <article class="product">
                <ul>
                    <li>
                        <div class="product-img"><img src="images/article1.jpg" alt="product1"></div>
                        <div class="product-title">Vestibulum Ipsums Eros</div>
                        <div class="product-desc">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam ....</div>
                    </li>
                    <li>
                        <div class="product-img"><img src="images/article2.jpg" alt="product2"></div>
                        <div class="product-title">Vestibulum Ipsums Eros</div>
                        <div class="product-desc">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam ....</div>
                    </li>
                    <li>
                        <div class="product-img"><img src="images/article3.jpg" alt="product3"></div>
                        <div class="product-title">Vestibulum Ipsums Eros</div>
                        <div class="product-desc">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam ....</div>
                    </li>
                </ul>
            </article>
            <div class="clear" style="clear: both"></div>
        </content>
        <!-- end content -->
        <!-- footer -->
        <footer>
            <div class="footer-about">
                <p class="footer-about-title">ABOUT VINSOFTS</p>
                <div class="line1" style="border:1px solid #404040; margin-bottom:20px;"></div>
                <p class="footer-about-desc">Vinsofts Co., Ltd is software
                    innovation and outsourcing
                    company based in Hanoi, Vietnam.
                    We provide top quality outsourcing
                    services to global clients from USA
                    to Australia, from Japan to
                    EU countries.</p>
            </div>
            <div class="footer-contact">
                <p class="footer-contact-title">CONTACT US</p>
                <div class="line1" style="border:1px solid #404040; margin-bottom:20px; width:300px;"></div>
                <p>Name<span style="color:red">*</span></p>
                <p><input type="text" style="width:100px;margin-right: 10px;">
                    <input type="text" style="width:190px">
                </p><br/>
                <p>Email<span style="color: red">*</span></p>
                <p><input type="text" style="width:310px"></p><br/>
                <p>Comment<span style="color: red">*</span></p>
                <p><input type="text" style="width:310px; height:100px;"></p><br/>
                <p><input type="button" value="Submit"></p>
            </div>
            <div class="footer-info">
                <p class="footer-info-title">OUR INFO</p>
                <div class="line1" style="border:1px solid #404040; margin-bottom:20px; width:300px;"></div>
                <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBynM-M9Wbv9_qEK3QwTRVcpuygF9Lttqo"></script><div style="overflow:hidden;height:250px;width:300px;"><div id="gmap_canvas" style="height:250px;width:300px;"><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net/wordpress-blog/" id="get-map-data">wordpress blog themes</a></div></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(21.040587,105.786849),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(21.040587, 105.786849)});infowindow = new google.maps.InfoWindow({content:"<b>Cty Vinsoft</b><br/><b>Địa chỉ:</b>Số 8 - Phan Văn Trường - Cầu Giấy<br/> " });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                <p>Số 8 Phan Văn Trường - Cầu Giấy - Hà Nội</p>
            </div>
        </footer>
        <!-- end footer -->
    </main>
</body>
</html>