
<footer class="footer">
    <div id="parallax-one" class="parallax" style="background-image: url(img/parallax/02.jpg);">
        <div class="footer-promo">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="font-family: Roboto; font-size: 48px; color: #666666; line-height: 96px;">Posta Kenya</h2>
                        <h4 style="color: #666666;">Touching lives</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-info">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h6>Services</h6>
                    <ul style="list-style: none;">
                        <li>Domestic Mail</li>
                        <li>International Mail</li>
                        <li>Franked mail</li>
                        <li>Bulk Mail</li>
                        <li>Posta Dispatch</li>
                        <li>Private letter boxes/bags</li>
                        <li>Direct Mail Marketing</li>
                        <li>Business reply services</li>
                    </ul>
                    <div class="space30"></div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h6>&nbsp;</h6>
                    <ul style="list-style: none;">
                        <li>Registration of newspapers</li>
                        <li>Slogan Dye service</li>
                        <li>Mail registration & insurance services</li>
                        <li>Certification of Posting</li>
                        <li>Philately</li>
                        <li>Posta Pesa</li>
                        <li>Posta Courier</li>
                        <li>Money Order</li>
                    </ul>
                    <div class="space30"></div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h6>RECENT NEWS</h6>
                    <ul class="list-5">
                        <li><a href="#"><i class="fa fa-caret-right"></i>Posta ISO 344 certified</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i>Q4 Profits up again</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i>Mozambique Benchmarks</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i>E-commerce Parcel integration is on</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i>Posta now recognized by IPRC</a></li>
                    </ul>
                    <div class="space30"></div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h6>CONTACT INFO</h6>
                    81 Sunnyvale Street<br>
                    Nairobi, Kenya County<br>
                    Kenya<br>
                    <br>
                    <div class="item-icon">
                        <i class="fa fa-phone"></i>
                        (613) 555-0000-852<br>
                    </div>
                    <div class="item-icon">
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:info@riley-template.com">info@posta.ke</a><br>
                    </div>
                    <div class="item-icon">
                        <i class="fa fa-comment"></i>
                        <a href="mailto:chat@riley-template.com">chat@posta.co.ke</a><br>
                    </div>
                    <div class="space30"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="logo-footer">
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="copyright-info">&copy; {{ date('Y') }}. All Rights Reserved. Postal Corporation Of Kenya</div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- Footer End -->

<a href="#" class="back-to-top"><span></span></a>

<script type="text/javascript" src="public/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="public/js/select2.min.js"></script>
<script type="text/javascript" src="public/js/bootstrap.js"></script>
<script type="text/javascript" src="public/js/jquery.easing.js"></script>
<script type="text/javascript" src="public/js/jquery.sticky.js"></script>
<script type="text/javascript" src="public/js/tinynav.min.js"></script>
<script type="text/javascript" src="public/js/animate.js"></script>
<script type="text/javascript" src="public/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="public/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="public/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="public/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="public/js/retina.js"></script>
<script type="text/javascript" src="public/js/respond.min.js"></script>
<script type="text/javascript" src="public/js/scale.fix.js"></script>
<script type="text/javascript" src="public/js/jquery.countdown.js"></script>
<script type="text/javascript" src="public/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="public/js/jquery.refineslide.js"></script>
<script type="text/javascript" src="public/layerslider/js/greensock.js"></script>
<script type="text/javascript" src="public/layerslider/js/layerslider.transitions.js"></script>
<script type="text/javascript" src="public/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script type="text/javascript" src="public/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="public/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="public/masterslider/masterslider.js"></script>
<script type="text/javascript" src="public/js/functions.js"></script>


<script type="text/javascript">
    $(document).ready(function () {

        $('#get_coords_btn').click(function () {

            $.ajax({
                url: "<?= url('get_post_office_location') ?>",
                type: 'GET',
                dataType: 'json',
                data: $('#testform').serialize(),
                success: function (response) {
                    var lat = response[0].latitude;
                    var long = response[0].longitude;
                    //alert(lat);
                    initialize(lat, long);                 
                }
            });

            return false;
        });


        $("#reset_map").click(function () {
            $("#map-canvas").html("");
        });


        //Load Google maps
        $("#load_map").click(function () {
            $("#branch_map").html("<div>This is the new map</div>");
        });





    });


    function initialize(lat, long) {
        var myLatlng = new google.maps.LatLng(lat, long);
        var mapOptions = {
            zoom: 15,
            center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Here'
        });
    }

</script>
</body>
</html>