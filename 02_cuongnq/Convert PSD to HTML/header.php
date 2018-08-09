<header>
    <!-- Logo + menu -->
    <div class="row">
        <div class="col-md-4  logo">
            <img src="images/logo.png" alt="logo">
        </div>
        <div class="col-md-8 ">
            <!-- info -->
            <div class="row info">
                <ul class="none-mobile">
                    <li class="skype"><img src="images/icon_skype.png" alt="skype" > Skype: Vinsofts.com</li>
                    <li><img src="images/icon_email.png" alt="mail"> Mail: Contact@vinsofts.com</li>
                    <li><img src="images/icon_phone.png" alt="hotline"> Hotline: 0988988988</li>
                </ul>
            </div>
            <!-- end-info -->
            <div class="clearfix"></div>
            <!-- menu -->
            <div class="row menu">
                <div class="col-md-9 2 ">
                    <nav class="links navbar navbar-expand-lg navbar-light" id="myDIV">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item"><a href="#" class="btn nav-link active">Home</a></li>
                                <li class="nav-item"><a href="#" class="btn nav-link">Protfolio</a></li>
                                <li class="nav-item"><a href="#" class="btn nav-link">Services</a></li>
                                <li class="nav-item"><a href="#" class="btn nav-link">Gallery</a></li>
                                <li class="nav-item"><a href="#" class="btn nav-link">Contact</a></li>
                                <li class="nav-item"><a href="#" class="btn nav-link">Recruitment</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-3 2 none-mobile">
                    <a href="http://www.facebook.com/"><img src="images/icon_fb.png" alt="Facebook"></a>
                    <a href="https://twitter.com/"><img src="images/icon_tw.png" alt="Twitter"></a>
                    <a href="https://plus.google.com/"><img src="images/icon_gg.png" alt="Google Plus"></a>
                    <a href="http://convertkit.com"><img src="images/icon_in.png" alt="Website"></a>
                </div>
            </div>
            <!-- end-menu -->
        </div>
    </div>
    <div class="slide">
        <div class="text">
            <h3>WEB DESIGN COMPANY REPUPATION</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur veritatis, quia odit rerum? Ex quibusdam neque perspiciatis cum, et nulla pariatur </p>
        </div>
    </div>
</header>
<!-- end-header -->
<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}
</script>