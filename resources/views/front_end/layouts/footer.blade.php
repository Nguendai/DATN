<footer id="footer-area">
    <!-- Footer Links Starts -->
    <div class="footer-links">
        <!-- Container Starts -->
        <div class="container">
            <div class="col-md-2 col-sm-6">
                <h5>Information</h5>
                <ul>
                    <li><a href="">About Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <!-- Contact Us Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>Follow Us</h5>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">RSS</a></li>
                    <li><a href="#">YouTube</a></li>
                </ul>
            </div>

            <!-- Contact Us Starts -->
            <div class="col-md-3 col-sm-12 ">
                <h5>Contact Us</h5>
                <ul>
                    <li>My Company</li>
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
                            width="280" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                    <img src="img/cirrus.png" alt="PaymentGateway">
                </li>
                <li>
                    <img src="img/paypal.png" alt="PaymentGateway">
                </li>
                <li>
                    <img src="img/visa.png" alt="PaymentGateway">
                </li>
                <li>
                    <img src="img/mastercard.png" alt="PaymentGateway">
                </li>
                <li>
                    <img src="img/americanexpress.png" alt="PaymentGateway">
                </li>
            </ul>
            <!-- Payment Gateway Links Ends -->
        </div>
        <!-- Container Ends -->
    </div>
    <!-- Copyright Area Ends -->
</footer>
<!-- Footer Section Ends -->

<div id="scroll" class="tiishop_scroll-top"><i  class="fa fa-arrow-up" aria-hidden="true"></i></div>
<!--  end product list -->
<!-- 2 Column Banners Starts -->
{{--content--}}
<div id="tiishop_contact-us">
    <div id="contact-us-nav">
        <a href="#" class="__click m-font"><i class="fa fa-question-circle-o mr-5 fz-16"></i><span>Hỗ trợ</span> </a>
    </div>
    <div id="contact-us-main">
        <div class="panel-heading clearfix __close text-center"><span class="fz-16 mt-5">Để lại lời nhắn</span><a href="" class="pull-right"><i class="fa fa-times-rectangle fz-16"></i></a></div>
        <div class="__inner-main clearfix">
            <form action="{!! url('contact-us') !!}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <p>Tên của bạn</p>
                    <input type="text" name="txtname" class="form-control" required placeholder="Tên của bạn" />
                </div>
                <div class="form-group">
                    <p>Email</p>
                    <input type="email" name="txtemail" class="form-control" placeholder="Email của bạn" required />
                </div>
                <div class="form-group">
                    <p>Nội dung tin nhắn</p>
                    <textarea name="txttext" id="" cols="30" rows="10"  placeholder="Bạn cần trợ giúp gì?" class="form-control" required ></textarea>
                </div>
                <button class="btn btn-primary pull-right">GỬI</button>
            </form>
        </div>
    </div>
</div>
</body>
<script src="{!! url('front-end/vendors/wow/dist/wow.js') !!}"></script>
<script src="{!! url('front/js/lightgallery-all.min.js') !!}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.19/js/lightgallery-all.min.js"></script>
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('#open_close').on('click', function()
        {
            $('#myModalDN').modal('hide');
            $('#myModalDK').modal('show');
        });
        if ($("#scroll").length > 0) {

            $(window).scroll(function () {
                var e = $(window).scrollTop();
                if (e > 350) {
                    $("#scroll").show();
                }
                else {
                    $("#scroll").hide();
                }
            });
            $("#scroll").on("click", function () {
                $("body,html").animate({scrollTop: 0}, 500);
            });
        }
        $('.__click').on('click',function () {
            $('#contact-us-main').show();
            $(this).hide();
            $('.__close').show();
        });
        $('.__close').on('click',function () {
            $('#contact-us-main').hide();
            $(this).hide();
            $('.__click').show();
        });
        $('#imageGallery').lightSlider({
            gallery:true,
            item:1,
            loop:true,
            thumbItem:9,
            slideMargin:0,
            enableDrag: false,
            currentPagerPosition:'left',
            onSliderLoad: function(el) {
                el.lightGallery({
                    selector: '#imageGallery .lslide'
                });
            }
        });

    });
    $(document).ready(function(){
        $('#lightgallery').lightGallery();
    });

    wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        }
    );
    wow.init();
</script>

</html>
