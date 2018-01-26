<!-- Footer Section Starts -->
<footer id="footer-area">
    <!-- Footer Links Starts -->
    <div class="footer-links">
        <!-- Container Starts -->
        <div class="container">
            <div class="col-md-2 col-sm-6">
                <h5>Thông tin</h5>
                <ul>
                    <li><a href="{{url('contact')}}">About Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <!-- Contact Us Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>Follow Us</h5>
                <ul>
                    <li><a href="https://www.facebook.com/">Facebook</a></li>
                    <li><a href="https://twitter.com/?lang=vi">Twitter</a></li>
                    <li><a href="#">RSS</a></li>
                    <li><a href="https://youtobes.com">YouTube</a></li>
                </ul>
            </div>

            <!-- Contact Us Starts -->
            <div class="col-md-3 col-sm-12 ">
                <h5>Liên hệ</h5>
                <ul>
                    <li>Công ty</li>
                    <li>
                        175- Tây Sơn- Hà Nội
                    </li>
                    <li>
                        Email: <a href="#">nguyendaishop@gmail.com</a>
                    </li>
                </ul>
                <h4 class="lead">
                    Tel: <span>1(234) 567-9842</span>
                </h4>
            </div>

            <!-- Contact Us Ends -->

            <div class="col-md-5 col-sm-12 ">
                <div class="bando">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6925279073907!2d105.82395761417945!3d21.004958793967962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac80d8971297%3A0x86601fde6d3d4884!2zxJDhuqFpIGjhu41jIHRodeG7tyBs4bujaQ!5e0!3m2!1svi!2s!4v1487812759194"
                            width="270" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

            <!-- Contact Us Ends -->

        </div>
        <!-- Container Ends -->
    </div>
    <!-- Footer Links Ends -->
    <!-- Copyright Area Starts -->
    <div class="copyright">
        <!-- Container Starts -->
        <div class="container">
            <!-- Starts -->
            <p class="pull-left">
                &nbsp; 2017 Spice Shoppe Stores. Bootstrap Layout All Rights Reserved. Designed By <a
                    href="#">Nguyen Van Dai</a>
            </p>
            <!-- Ends -->
            <!-- Payment Gateway Links Starts -->
            <ul class="pull-right list-inline">
                <li>
                    <img src="{!! url('front/img/cirrus.png') !!}" alt="PaymentGateway">
                </li>
                <li>
                    <img src="{!! url('front/img/paypal.png') !!}" alt="PaymentGateway">
                </li>
                <li>
                    <img src="{!! url('front/img/visa.png') !!}" alt="PaymentGateway">
                </li>
                <li>
                    <img src="{!! url('front/img/mastercard.png') !!}" alt="PaymentGateway">
                </li>
                <li>
                    <img src="{!! url('front/img/americanexpress.png') !!}" alt="PaymentGateway">
                </li>
            </ul>
            <!-- Payment Gateway Links Ends -->
        </div>
        <!-- Container Ends -->
    </div>
    <!-- Copyright Area Ends -->
</footer>
<div class="modal fade" id="mapModel" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div id="map">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Footer Section Ends -->
<div id="scroll" class="tiishop_scroll-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>
<!-- @include('front_end.layouts.contact-us') -->
<!--  end product list -->
<!-- 2 Column Banners Starts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js" ></script>


<script type="text/javascript" src="{!! url('front/vendor/angular.min.js') !!}"></script>
<script type="text/javascript" src="{!! url('front/js/foundation.min.js') !!}"></script>
<script type="text/javascript" src="{!! url('front/js/setup.js') !!}"></script>
<script type="text/javascript" src="{!! url('front/js/ranks.js') !!}"></script>
<script src="{!! url('front/dist/xzoom.min.js') !!}" type="text/javascript" ></script>

 <!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="{!! url('front/js/index.js') !!}"></script>
</body>

<!-- <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
 -->
</html>