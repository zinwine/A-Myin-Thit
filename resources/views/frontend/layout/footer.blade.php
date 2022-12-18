<div class="container-fluid footer" style="background-color: #222;">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="ftitle">
                    <p class="wow FadeInLeft" style="padding-top: 10px">Our Company</p>
                    <hr style="background-color: orange;width: 120px;height: 1px;">
                </div>
                <div class="foter">
                    <p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda atque cupiditate earum eveniet explicabo fugit, id illum incidunt iste nam necessitatibus nesciunt perspiciatis possimus quasi quidem quo, reiciendis voluptate.</p>
                    <ul class="icon-footer-list right">
                        <li class="icon-footer-item">
                            <div class="icon-wrap" style="font-size:18px"><i
                                        class="fa fa-facebook"
                                        style="color:#ffffff"> </i></div>
                        </li>
                        <li class="icon-footer-item">
                            <div class="icon-wrap" style="font-size:18px"><i
                                        class="fa fa-instagram"
                                        style="color:#ffffff"> </i></div>
                        </li>
                        <li class="icon-footer-item">
                            <div class="icon-wrap" style="font-size:18px"><i
                                        class="fa fa-twitter"
                                        style="color:#ffffff"> </i></div>
                        </li>
                        <li class="icon-footer-item">
                            <div class="icon-wrap" style="font-size:18px"><i
                                        class="fa fa-google-plus"
                                        style="color:#ffffff"> </i></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="ftitle">
                    <p style="padding-top: 10px">Our design</p>
                    <hr style="background-color: orange;width: 100px;height: 1px;">

                </div>
                <div class="foter">
                    <ul>
                        <li><a href="">Kitchen design</a></li>
                        <li><a href="">Living room design</a></li>
                        <li><a href="">Elegant house</a></li>
                        <li><a href="">New presentation</a></li>
                        <li><a href="">Wooden house</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="ftitle">
                    <p style="padding-top: 10px">Address</p>
                    <hr style="background-color: orange;width: 80px;height: 1px;">
                </div>
                <div class="foter">
                    <ul class="add">
                        <li>
                            <span class="fa fa-home"></span>
                            No.2, SanYeikNyain Street,Yangon
                        </li>
                        <li><span class="fa fa-clock-o"></span> Mon-Sat:9:00 - 5:00</li>
                        <li><span class="fa fa-phone"></span> +95977819343</li>
                        <li><span class="fa fa-envelope"></span> amyinthit@gmail.com</li>
                    </ul>
                    <a href="{{ url('/book') }}"  class="btn" style="margin-bottom: 10px;background-color: rgba(50,50,50,0.7);color: orange">Book A Service</a>
                    <br>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="ftitle">
                    <p style="padding-top: 10px">Our Location</p>
                    <hr style="background-color: orange;width: 120px;height: 1px;">
                </div>
                <div class="locations" id="map" style="margin-bottom: 10px">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid footerbar">
    <div class="row">
        <div class="col-lg-9">
            <div class="pull-left">
                <div class="copyright">
                    <!--<i class="fa fa-copyright"></i>-->
                    <p style="color: white">&copy; 2017 CONSTRUCT. All rights  reserved</p>
                </div>
            </div>

        </div>
    </div>
    </div>


<script>
    function initMap() {
       var uluru = {lat: 16.774914, lng: 96.143478};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVtam6fbTvGFJkRAq7qcY-eHj0XDVYeNg&callback=initMap">
</script>
