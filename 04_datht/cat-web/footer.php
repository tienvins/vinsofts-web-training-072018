<footer class="row">
            <div class="col-md-3 col-sm-12 about">
                    <div class="col-xs-12"></div>
                <h4>ABOUT VINSOFTS</h4>
                <div>
                    Vinsoft Co,.Ltd is softwere
                    innovation and outsourcing company based in Hanoi, Vietnam. We provide top quality outsourcing services to global clients from USA to Australia,from Japan to EU countries.
                </div>
            </div>
            <div class="col-md-4 col-sm-12 form-guest">
                    <div class="col-xs-12"></div>
                            <div class="col-md-12 col-sm-12 col-xs-10">
                                    <h4>CONTACT US</h4>
                            </div>
                            <div class="col-xs-2">
                                <button id="add__form">+</button>
                            </div>
                   
                    
                    
                    <form action="" class="form col-xs-12">
                        <div class="form-group">
                            <label>Name <span style="color: red">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email<span style="color: red">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Conment<span style="color: red">*</span></label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
            </div>
            <div class="col-md-5 map">
                
                    <h4>OUR INFO</h4>
                    <div id="map" style="width:100%">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930.9536719806252!2d105.78562978806224!3d21.04009955081291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab34493f1719%3A0xcb0b2a50ed7cf561!2zQsOgaSBU4bqtcCAxMjMgTHV54buHbiBUaGkgVHLhuq9jIE5naGnhu4dtIE9ubGluZSBNaeG7hW4gUGjDrQ!5e0!3m2!1svi!2s!4v1533830107036" width="350" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div>Ki ốt số 3 Nhà N9,Khu 212,Học Viện Kĩ Thuật Quân Sự,Đường Tân Xuân,Phường Xuân Đỉnh, Quận Bắc Từ Liêm,Hà Nội</div>
            </div>
            <script>
            $(document).ready(function(){
                $("#add__form").click(function(){
                    $(".form").slideToggle();
                })
            });
        </script>
        <script>
            $(function() {
                $('.lazy').lazyload({
                    effect : "fadeIn"
                    
                });
            });
            $(window).on("load", function() {
                var timeout = setTimeout(function() {
                    $("img.lazy").trigger("sporty")
                }, 5000);
        });
        </script>
        </footer>