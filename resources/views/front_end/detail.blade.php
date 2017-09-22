@extends('front_end.layouts.master')
@section('content')
    <!-- conten -->
    <div id="main-container" class="container">
        <div class="row">
            <div class="col-md-9">
                <!-- Breadcrumb Starts -->
                <ol class="breadcrumb">
                    <li><a href="#"><font><font>Home</font></font></a></li>
                    <li><a href="#"><font><font class="">Category</font></font></a></li>
                    <li class="active"><font><font class="">Product</font></font></li>
                </ol>
                <div class="row product-info">
                    <!-- Left Starts -->
                    <div class="rowtop">
                        <h1>Điện thoại OPPO F1s [17] 64GB</h1>
                    </div>
                    <div class="col-sm-5 images-block">
                        <p>
                        <ul id="imageGallery">
                            <li data-thumb="{!! url('front/img/ip_7s.png') !!}" data-src="{!! url('front/img/ip_7s.png') !!}">
                                <img src="{!! url('front/img/ip_7s.png') !!}" />
                            </li>
                            <li data-thumb="{!! url('front/img/ip_7s.png') !!}" data-src="{!! url('front/img/ip_7s.png') !!}">
                                <img src="{!! url('front/img/ip_7s.png') !!}" />
                            </li>
                        </ul>
                        </p>
                    </div>
                    <!-- Right Starts -->
                    <div class="col-sm-7 product-details">
                        <!-- Product Name Starts -->
                        <div class="price">
                            <span class="price-head"><font><font>Price: </font></font></span>
                            <span class="price-new"><font><font>$ 199,50</font></font></span>
                        </div>
                        <!-- Product Name Ends -->
                        <hr>
                        <!-- Manufacturer Starts -->
                        <ul class="list-unstyled manufacturer">
                            <li>
                                <span><font><font>Bảo hành: </font></font></span><font><font>1 đổi 1 trong 12 tháng
                                    </font></font></li>
                            <li><span><font><font>Phụ kiện: </font></font></span><font><font> Dây cáp sạc, tai
                                        nghe</font></font></li>
                            <li><span><font><font>Khuyến mại: </font></font></span><font><font> Hỗ trợ trả góp 0% dành cho
                                        các chủ thẻ Ngân hàng Sacombank</font></font></li>

                            <li>
                                <span><font><font>AVAILABILITY: </font></font></span> <strong
                                        class="label label-success"><font><font>IN STOCK</font></font></strong>
                            </li>
                        </ul>
                        <!-- Manufacturer Ends -->
                        <hr>


                        <!-- Available Options Starts -->
                        <div class="options">
                            <div class="cart-button button-group">
                                <button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
                                    <i class="fa fa-heart"></i>
                                </button>
                                <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                    <i class="fa fa-bar-chart-o"></i>
                                </button>
                                <button type="button" class="btn btn-cart"><font><font>
                                            Add to Card
                                        </font></font><i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Available Options Ends -->
                        <hr>
                    </div>
                    <!-- Right Ends -->
                    <!-- Left Ends -->
                </div>
                <div class="product-info-box">
                    <h4 class="heading">DESCRIPTION</h4>
                    <div class="content panel-smart">
                        <p><font><font>
                                    Lorem Ipsum chỉ đơn giản là văn bản giả của ngành công nghiệp in ấn. </font><font>Lorem Ipsum đã
                                    được đoạn văn bản tiêu chuẩn của ngành công nghiệp từ những năm 1500, khi một họa sĩ vô danh
                                    galley loại và tranh giành nó để tạo thành một bản mẫu. </font><font>Nó đã tồn tại không chỉ năm
                                    thế kỷ, nhưng cũng có những bước nhảy vọt vào sắp chữ điện tử, còn lại về cơ bản không thay
                                    đổi. </font><font>Nó đã được phổ biến trong những năm 1960 với việc phát hành giấy Letraset in
                                    những đoạn Lorem Ipsum, và gần đây hơn, xuất bản phần mềm máy tính để bàn như Aldus PageMaker
                                    bao gồm cả các phiên bản của Lorem Ipsum.
                                </font></font></p>
                        <p><font><font>
                                    Nó đã tồn tại không chỉ năm thế kỷ, nhưng cũng có những bước nhảy vọt vào sắp chữ điện tử, còn
                                    lại về cơ bản không thay đổi. </font><font>Nó đã được phổ biến trong những năm 1960 với việc
                                    phát hành giấy Letraset in những đoạn Lorem Ipsum, và gần đây hơn, xuất bản phần mềm máy tính để
                                    bàn như Aldus PageMaker bao gồm cả các phiên bản của Lorem Ipsum.
                                </font></font></p>
                    </div>
                </div>
                <div class="product-info-box">
                    <h4 class="heading"><font><font>RELATED PRODUCTS</font></font></h4>
                    <!-- Products Row Starts -->
                    <div class="row">
                        <!-- Product #1 Starts -->
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="thumbnail">
                                <div class="image">
                                    <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
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
                            </div>
                        </div> <!-- Product #1 Ends -->
                        <!-- Product #1 Starts -->
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="thumbnail">
                                <div class="image">
                                    <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
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
                            </div>
                        </div> <!-- Product #1 Ends -->
                        <!-- Product #1 Starts -->
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="thumbnail">
                                <div class="image">
                                    <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
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
                            </div>
                        </div> <!-- Product #1 Ends -->

                    </div>
                    <!-- Products Row Ends -->
                </div>
            </div> <!-- end  col 9 -->
            <!-- menu right -->
            <div class="col-md-3">
                <h3 class="side-heading"><font><font>Category</font></font></h3>
                <ul class="list-group">
                    <li class="list-group-item"><a href=""><i class="fa fa-chevron-right"></i>
                            Iphone </a></li>
                    <li class="list-group-item"><a href=""><i class="fa fa-chevron-right"></i>
                            Samsung </a></li>
                    <li class="list-group-item"><a href=""><i class="fa fa-chevron-right"></i>
                            Xao Mi </a></li>
                    <li class="list-group-item"><a href=""><i class="fa fa-chevron-right"></i>
                            Oppo </a></li>
                    <li class="list-group-item"><a href=""><i class="fa fa-chevron-right"></i>
                            Sony </a></li>
                </ul>


                <div class="product-new">

                    <!-- Product #1 Starts -->
                    <h3 class="side-heading"><font><font>Product New</font></font></h3>
                    <div class="thumbnail heading">
                        <div class="image">
                            <img src="img/ip_7s.png" alt="product" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h4><a href="">Iphone 7 plus 256G</a></h4>
                            <div class="description">
                                Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                            </div>
                            <div class="moive">
                                New
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
                    </div> <!-- Product #1 Ends -->

                </div>
                <div class="product-hot">

                    <!-- Product #1 Starts -->
                    <h3 class="side-heading"><font><font>BESTSELLERS</font></font></h3>
                    <div class="thumbnail heading">
                        <div class="image">
                            <img src="img/ip_7s.png" alt="product" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h4><a href="">Iphone 7 plus 256G</a></h4>
                            <div class="description">
                                Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
                            </div>
                            <div class="hot">
                                Bán chạy
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
                    </div> <!-- Product #1 Ends -->

                </div>
            </div>
        </div>

    </div>
    <!--end conten-->
    @endsection