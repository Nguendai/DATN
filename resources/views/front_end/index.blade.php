@extends('front_end.layouts.master')
@section('content')
<!--slide-->
<div class="slide ">
    <div class="container">
        <div id="carousel-id" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                <li data-target="#carousel-id" data-slide-to="3" class=""></li>
                <li data-target="#carousel-id" data-slide-to="4" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="item">
                    <img src="{!! url('front/img/slide12.jpg') !!}" alt="">
                </div>
                <div class="item ">
                    <img src="{!! url('front/img/slide12.jpg') !!}" alt="">
                </div>
                <div class="item active">
                    <img src="{!! url('front/img/slide12.jpg') !!}" alt="">
                </div>
                <div class="item">
                    <img src="{!! url('front/img/slide12.jpg') !!}" alt="">
                </div>
                <div class="item">
                    <img src="{!! url('front/img/slide12.jpg') !!}" alt="">
                </div>


            </div>
            <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span
                        class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#carousel-id" data-slide="next"><span
                        class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div>
</div>
<!-- end slide -->
<!-- 3 Column Banners Starts -->
<div class="col3-banners">
    <div class="container">
        <ul class="row list-unstyled">
            <li class="col-sm-4">
                <img src="{!! url('front/img/mobile1.png') !!}" alt="banners" class="img-responsive">
            </li>
            <li class="col-sm-4">
                <img src="{!! url('front/img/mobile4.png') !!}" alt="banners" class="img-responsive">
            </li>
            <li class="col-sm-4">
                <img src="{!! url('front/img/mobile3.png') !!}" alt="banners" class="img-responsive">
            </li>
        </ul>
    </div>
</div>
<!-- 3 Column Banners Ends -->
<!-- Latest Products Starts -->
<section class="products-list">
    <div class="container">
        <!-- Heading Starts -->
        <h2 class="product-head">Latest Products</h2>
        <!-- Heading Ends -->
        <!-- Products Row Starts -->
        <div class="row">
            <!-- Product #1 Starts -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow fadeInUp " data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
                    </div>
                    <div class="moive">
                        New
                    </div>
                    <div class="caption">
                        <h4><a href="">Iphone 7 plus 256G</a></h4>
                        <div class="description">
                            Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="politis">
                        <div class="title">
                            <h4>Iphone 7 plus 256G</h4>
                            <ul class="list-group">
                                <li class="">Screen: 5.5", Retina HD</li>
                                <li class="">OS: iOS 10</li>
                                <li class="">CPU: Apple A10 Fusion 4 nhân</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                                <li class="">Camera : 12+2 MP, Selfie: 8MP</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Starts -->
            <!-- Product #1 Starts -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow fadeInUp " data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
                    </div>
                    <div class="moive">
                        New
                    </div>
                    <div class="caption">
                        <h4><a href="">Iphone 7 plus 256G</a></h4>
                        <div class="description">
                            Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="politis">
                        <div class="title">
                            <h4>Iphone 7 plus 256G</h4>
                            <ul class="list-group">
                                <li class="">Screen: 5.5", Retina HD</li>
                                <li class="">OS: iOS 10</li>
                                <li class="">CPU: Apple A10 Fusion 4 nhân</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                                <li class="">Camera : 12+2 MP, Selfie: 8MP</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Starts -->
            <!-- Product #1 Starts -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow fadeInUp " data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
                    </div>
                    <div class="moive">
                        New
                    </div>
                    <div class="caption">
                        <h4><a href="">Iphone 7 plus 256G</a></h4>
                        <div class="description">
                            Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="politis">
                        <div class="title">
                            <h4>Iphone 7 plus 256G</h4>
                            <ul class="list-group">
                                <li class="">Screen: 5.5", Retina HD</li>
                                <li class="">OS: iOS 10</li>
                                <li class="">CPU: Apple A10 Fusion 4 nhân</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                                <li class="">Camera : 12+2 MP, Selfie: 8MP</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Starts -->
            <!-- Product #1 Starts -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow fadeInUp " data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
                    </div>
                    <div class="moive">
                        New
                    </div>
                    <div class="caption">
                        <h4><a href="">Iphone 7 plus 256G</a></h4>
                        <div class="description">
                            Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="politis">
                        <div class="title">
                            <h4>Iphone 7 plus 256G</h4>
                            <ul class="list-group">
                                <li class="">Screen: 5.5", Retina HD</li>
                                <li class="">OS: iOS 10</li>
                                <li class="">CPU: Apple A10 Fusion 4 nhân</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                                <li class="">Camera : 12+2 MP, Selfie: 8MP</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Starts -->
            <!-- Product #1 Starts -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow fadeInUp " data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
                    </div>
                    <div class="moive">
                        New
                    </div>
                    <div class="caption">
                        <h4><a href="">Iphone 7 plus 256G</a></h4>
                        <div class="description">
                            Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="politis">
                        <div class="title">
                            <h4>Iphone 7 plus 256G</h4>
                            <ul class="list-group">
                                <li class="">Screen: 5.5", Retina HD</li>
                                <li class="">OS: iOS 10</li>
                                <li class="">CPU: Apple A10 Fusion 4 nhân</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                                <li class="">Camera : 12+2 MP, Selfie: 8MP</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Starts -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow fadeInUp " data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
                    </div>
                    <div class="moive">
                        New
                    </div>
                    <div class="caption">
                        <h4><a href="">Iphone 7 plus 256G</a></h4>
                        <div class="description">
                            Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="politis">
                        <div class="title">
                            <h4>Iphone 7 plus 256G</h4>
                            <ul class="list-group">
                                <li class="">Screen: 5.5", Retina HD</li>
                                <li class="">OS: iOS 10</li>
                                <li class="">CPU: Apple A10 Fusion 4 nhân</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                                <li class="">Camera : 12+2 MP, Selfie: 8MP</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Starts -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow fadeInUp " data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
                    </div>
                    <div class="moive">
                        New
                    </div>
                    <div class="caption">
                        <h4><a href="">Iphone 7 plus 256G</a></h4>
                        <div class="description">
                            Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="politis">
                        <div class="title">
                            <h4>Iphone 7 plus 256G</h4>
                            <ul class="list-group">
                                <li class="">Screen: 5.5", Retina HD</li>
                                <li class="">OS: iOS 10</li>
                                <li class="">CPU: Apple A10 Fusion 4 nhân</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                                <li class="">Camera : 12+2 MP, Selfie: 8MP</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Starts -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow fadeInUp " data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
                    </div>
                    <div class="moive">
                        New
                    </div>
                    <div class="caption">
                        <h4><a href="">Iphone 7 plus 256G</a></h4>
                        <div class="description">
                            Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="politis">
                        <div class="title">
                            <h4>Iphone 7 plus 256G</h4>
                            <ul class="list-group">
                                <li class="">Screen: 5.5", Retina HD</li>
                                <li class="">OS: iOS 10</li>
                                <li class="">CPU: Apple A10 Fusion 4 nhân</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                                <li class="">Camera : 12+2 MP, Selfie: 8MP</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Starts -->
        </div>
    </div>
</section><!--  end product list -->
<!-- 2 Column Banners Starts -->
<div class="col2-banners">
    <div class="container">
        <ul class="row list-unstyled">
            <li class="col-sm-4">
                <img src="{!! url('front/img/galaxy.png') !!}" alt="banners" class="img-responsive">
            </li>
            <li class="col-sm-8">
                <img src=" {!! url('front/img/banner.png') !!}" alt="banners" class="img-responsive">
            </li>
        </ul>
    </div>
</div>
<!-- 2 Column Banners Ends -->
<!-- SPECIALS Products Starts -->
<section class="products-list">
    <div class="container">
        <!-- Heading Starts -->
        <h2 class="product-head">SPECIALS PRODUCTS</h2>
        <!-- Heading Ends -->
        <!-- Products Row Starts -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow slideInLeft " data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
                    </div>
                    <div class="moive">
                        New
                    </div>
                    <div class="caption">
                        <h4><a href="">Iphone 7 plus 256G</a></h4>
                        <div class="description">
                            Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="politis">
                        <div class="title">
                            <h4>Iphone 7 plus 256G</h4>
                            <ul class="list-group">
                                <li class="">Screen: 5.5", Retina HD</li>
                                <li class="">OS: iOS 10</li>
                                <li class="">CPU: Apple A10 Fusion 4 nhân</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                                <li class="">Camera : 12+2 MP, Selfie: 8MP</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Starts -->
            <!-- Product #1 Starts -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow slideInLeft " data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
                    </div>
                    <div class="moive">
                        New
                    </div>
                    <div class="caption">
                        <h4><a href="">Iphone 7 plus 256G</a></h4>
                        <div class="description">
                            Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="politis">
                        <div class="title">
                            <h4>Iphone 7 plus 256G</h4>
                            <ul class="list-group">
                                <li class="">Screen: 5.5", Retina HD</li>
                                <li class="">OS: iOS 10</li>
                                <li class="">CPU: Apple A10 Fusion 4 nhân</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                                <li class="">Camera : 12+2 MP, Selfie: 8MP</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Starts -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow slideInLeft " data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
                    </div>
                    <div class="moive">
                        New
                    </div>
                    <div class="caption">
                        <h4><a href="">Iphone 7 plus 256G</a></h4>
                        <div class="description">
                            Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="politis">
                        <div class="title">
                            <h4>Iphone 7 plus 256G</h4>
                            <ul class="list-group">
                                <li class="">Screen: 5.5", Retina HD</li>
                                <li class="">OS: iOS 10</li>
                                <li class="">CPU: Apple A10 Fusion 4 nhân</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                                <li class="">Camera : 12+2 MP, Selfie: 8MP</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Starts -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow slideInLeft " data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
                    </div>
                    <div class="moive">
                        New
                    </div>
                    <div class="caption">
                        <h4><a href="">Iphone 7 plus 256G</a></h4>
                        <div class="description">
                            Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="politis">
                        <div class="title">
                            <h4>Iphone 7 plus 256G</h4>
                            <ul class="list-group">
                                <li class="">Screen: 5.5", Retina HD</li>
                                <li class="">OS: iOS 10</li>
                                <li class="">CPU: Apple A10 Fusion 4 nhân</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                                <li class="">Camera : 12+2 MP, Selfie: 8MP</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Starts -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow slideInLeft " data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
                    </div>
                    <div class="moive">
                        New
                    </div>
                    <div class="caption">
                        <h4><a href="">Iphone 7 plus 256G</a></h4>
                        <div class="description">
                            Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="politis">
                        <div class="title">
                            <h4>Iphone 7 plus 256G</h4>
                            <ul class="list-group">
                                <li class="">Screen: 5.5", Retina HD</li>
                                <li class="">OS: iOS 10</li>
                                <li class="">CPU: Apple A10 Fusion 4 nhân</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                                <li class="">Camera : 12+2 MP, Selfie: 8MP</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Starts -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow slideInLeft " data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
                    </div>
                    <div class="moive">
                        New
                    </div>
                    <div class="caption">
                        <h4><a href="">Iphone 7 plus 256G</a></h4>
                        <div class="description">
                            Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="politis">
                        <div class="title">
                            <h4>Iphone 7 plus 256G</h4>
                            <ul class="list-group">
                                <li class="">Screen: 5.5", Retina HD</li>
                                <li class="">OS: iOS 10</li>
                                <li class="">CPU: Apple A10 Fusion 4 nhân</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                                <li class="">Camera : 12+2 MP, Selfie: 8MP</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Starts -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow slideInLeft " data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
                    </div>
                    <div class="moive">
                        New
                    </div>
                    <div class="caption">
                        <h4><a href="">Iphone 7 plus 256G</a></h4>
                        <div class="description">
                            Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="politis">
                        <div class="title">
                            <h4>Iphone 7 plus 256G</h4>
                            <ul class="list-group">
                                <li class="">Screen: 5.5", Retina HD</li>
                                <li class="">OS: iOS 10</li>
                                <li class="">CPU: Apple A10 Fusion 4 nhân</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                                <li class="">Camera : 12+2 MP, Selfie: 8MP</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Starts -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow slideInLeft " data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
                    </div>
                    <div class="moive">
                        New
                    </div>
                    <div class="caption">
                        <h4><a href="">Iphone 7 plus 256G</a></h4>
                        <div class="description">
                            Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="politis">
                        <div class="title">
                            <h4>Iphone 7 plus 256G</h4>
                            <ul class="list-group">
                                <li class="">Screen: 5.5", Retina HD</li>
                                <li class="">OS: iOS 10</li>
                                <li class="">CPU: Apple A10 Fusion 4 nhân</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                                <li class="">Camera : 12+2 MP, Selfie: 8MP</li>
                                <li class="">RAM: 3 GB, ROM: 128 GB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Starts -->
        </div>
    </div>
    </div>

    </div>
</section>
<!-- Footer Section Starts -->
@endsection