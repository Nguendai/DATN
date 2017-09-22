<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                <img src="{!! url('front-end/assets/image/tiishop.png') !!}" alt="" >
                <p class="pt-10 pb-10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <ul class="__social">
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                <h2 class="m-font">LIÊN HỆ</h2>
                <ul class="__contact">
                    <li><i class="fa fa-map-marker"></i><p>102A,Nhà vườn,KĐT Việt Hưng,Long Biên,Hà Nội</p></li>
                    <li><i class="icon-phone"></i><p>01679178772</p></li>
                    <li><i class="icon-paper-plane"></i><p>dainv95@gmail.com</p></li>
                    <li><i class="icon-mobile"></i><p>01679178772</p></li>
                    <li><i class="icon-clock"></i><p>T2 - T7:9:00 - 18:00</p></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                <h2 class="m-font">TUYỂN DỤNG</h2>
                <ul class="__work">
                    <li><a href="">Tuyển dụng mới nhất</a></li>
                    <li><a href="">Câu hỏi thường gặp</a></li>
                    <li><a href="">Các chính sách</a></li>
                    <li><a href="">Hệ thống bảo hành</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                <h2 class="m-font">HỆ THỐNG <i></i></h2>
                <ul class="__work">
                    <li><a href="">Kiểm tra hàng Apple chính hãng</a></li>
                    <li><a href="">Giới thiệu máu đổi trả</a></li>
                    <li><a href="">Giới thiệu xả hàng</a></li>
                    <li><a href="">Tin khuyến mãi</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="footer_below m-font text-center pt-25 pb-25 color-light_d">
    © 2017 Tii Shop. Copy right OEC Solution
</div>
<div id="scroll" class="tiishop_scroll-top"><i class="icon-up"></i></div>
@include('front-end.layouts.contact-us')
</body>
<script src="{!! url('front-end/vendors/jquery/jquery-1.12.0.min.js') !!}"></script>
<script src="{!! url('front-end/vendors/bootstrap/js/bootstrap.js') !!}"></script>
<script src="{!! url('front-end/vendors/angular/angular.min.js') !!}"></script>
<script src="{!! url('front-end/vendors/angular/angular-route.min.js') !!}"></script>
<script src="{!! url('front-end/vendors/angular/angular-sanitize.js') !!}"></script>
<script src="{!! url('front-end/vendors/angular/angular-animate.js') !!}"></script>
<script src="{!! url('front-end/vendors/slick/slick.min.js') !!}"></script>
<script src="{!! url('front-end/vendors/wow/dist/wow.js') !!}"></script>
<script src="{!! url('front-end/assets/js/main.js') !!}"></script>
<script type="text/javascript" src=" {!! url('front-end/hammer.js/1.0.5/jquery.hammer.min.js') !!}"></script>
<script src=" {!! url('front-end/js/vendor/modernizr.js') !!}"></script>
{{--<script src="{!! url('front-end/js/vendor/jquery.js') !!}"></script>--}}
<script src="{!! url('front-end/js/foundation.min.js') !!}"></script>
<script src="{!! url('front-end/js/setup.js') !!}"></script>
<!-- xzoom plugin here -->
<script type="text/javascript" src="{!! url('front-end/dist/xzoom.min.js') !!}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#__search-pro').on('change',function () {
            var parent_id =$(this).val();
            var token =$("input[name='_token']").val();
            $.ajax({
                url:'search-pro/'+parent_id,
                type:'GET',
                dataType: 'json',
                cache:'FALSE',
                data:{"_token":token,"parent_id":parent_id},
                success:function (data) {
                    if(data){
                        var html="";
                        $.each(data,function (key,val) {
                            html+="<option value='"+val.id+"'>"+val.name+"</option><br>";
                        });
                        $("#product-append").html(html);
                    }
                }
            })
        });

        if ($('#tiishop-header').length > 0) {

            $(window).scroll(function () {
                var e = $(window).scrollTop();
                if (e > 250) {
                    $('#tiishop-header').addClass("tiishop_fixed");
                    $(".search-btn").addClass("add-bonus");
                    $(".__cart-view").addClass("add-pt");
                    $(".tiishop_nav").addClass("__cart-bonus");
                }
                else{
                    $('#tiishop-header').removeClass("tiishop_fixed");
                    $(".search-btn").removeClass("add-bonus");
                    $(".__cart-view").removeClass("add-pt");
                    $(".tiishop_nav").removeClass("__cart-bonus");
                }
            });
        }
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
        setTimeout(function () {
            $('.tiishop_alert').slideUp('2000');
        },7000);
        $("#search").on('click',function () {
            $(".search-btn").slideToggle();
            $("#icon-search1").toggleClass("fa-close");

        });
        $(".tiishop-slider").slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            autoplay:true,
            prevArrow: '<a class="button_left"></a>',
            nextArrow: '<a class="button_right"></a>'
        });
        $(".tiishop-slider1").slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            autoplay:true,
            prevArrow: '<a class="button_left"></a>',
            nextArrow: '<a class="button_right"></a>'
        });

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

        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: true,
            centerMode: true,
            focusOnSelect: true
        });
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