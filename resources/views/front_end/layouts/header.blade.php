<!DOCTYPE html>
<html lang="en">
<head>
    <title> Example </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="{!! url('front/vendor/bootstrap.js') !!}"></script>
    <script type="text/javascript" src="1.js"></script>
    <link rel="stylesheet" href="{!! url('front/vendor/bootstrap.css') !!}">
    <link rel="stylesheet" href="{!! url('front/vendor/font-awesome.css') !!}">
    <link rel="stylesheet" href="{!! url('front/css/cart.css') !!}">
    <link rel="stylesheet" href="{!! url('front/css/category.css') !!}">
    <link rel="stylesheet" href="{!! url('front/css/search.css') !!}">
    <link rel="stylesheet" href="{!! url('front/css/style.css') !!}">
    <link rel="stylesheet" href="{!! url('front/css/lightgallery.css') !!}">


    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
<!--header-->
<div class="header">
    <div class="khoi1">
        <div class="container">
            <div class="row">
            <!-- <div class="col-md-4 ">
            <div class="icon1">
                <b class="fa fa-phone" aria-hidden="true"></b><span>Switchboard: 04 6681 9779</span>
            </div>
            <div class="icon2"><b class="fa fa-envelope-o" aria-hidden="true"></b><span>dainv95@gmail.com</span></div>
            </div> -->
                <div class="col-md-6 col-md-offset-6 col-xs-12">
                    <div class="right">
                        <ul>
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home" title="Home"></i>
                                    <span class="hidden-sm hidden-xs ">
                             Home
                           </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-newspaper-o" title="Wish List"></i>
                                    <span class="hidden-sm hidden-xs ">
                            News
                           </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-phone" title="Wish List"></i>
                                    <span class="hidden-sm hidden-xs ">
                            Contact
                           </span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="modal" class="myModal" data-target="#myModalDN">
                                    <i class="fa fa-lock" title="Login"></i>
                                    <span class="hidden-sm hidden-xs ">
                                     Login
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="myModalDN" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button>
                                                <h4 class="modal-title" id="myModalLabel">Login</h4>
                                            </div>
                                            <div class="row modal-body">
                                                <div class="col-md-12">
                                                    <div class="alert alert-danger">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                        <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <p class="loginUser">Login</p>
                                                        <hr>
                                                        <div class="input-group">
                                                            <span class="glyphicon glyphicon-user"></span>
                                                            <input type="text" class="form-control" placeholder="Tên đăng nhập">
                                                        </div>
                                                        <div class="input-group">
                                                            <span class="glyphicon glyphicon-lock"></span>
                                                            <input type="password" class="form-control" placeholder="Mật khẩu">
                                                        </div>
                                                        <div class="col-md-6 block_rad">
                                                            <input type="radio">Remember
                                                        </div>
                                                        <button type="button" class="btn btn-primary">Login</button>
                                                    </div>
                                                    <div class="col-md-6 cache">
                                                        <img src="img/loginFB.png" alt="">
                                                        <img src="img/loginGG.png" alt="">
                                                    </div>

                                                </div>
                                            </div><!-- row modal-body -->

                                        </div><!-- modal-content -->
                                    </div><!-- modal-dialog -->
                                </div><!-- modal fade -->
                            </li>
                            <li>
                                <a data-toggle="modal" class="myModal" data-target="#myModalDK">
                                    <i class="fa fa-unlock" title="Register"></i>
                                    <span class="hidden-sm hidden-xs">
                             Register
                           </span>
                                </a>
                                <div class="modal fade" id="myModalDK" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button>
                                                <h4 class="modal-title" id="myModalLabel">Register</h4>
                                            </div>
                                            <div class="row modal-body">
                                                <div class="col-md-12 ">
                                                    <div class="alert alert-danger">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                        <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-md-offset-3">
                                                    <div class="input-group">
                                                        <span class="glyphicon glyphicon-user"></span>
                                                        <input type="text" class="form-control" placeholder="Tên đăng nhập ( 4- 10 )">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="glyphicon glyphicon-lock"></span>
                                                        <input type="password" class="form-control" placeholder="Mật khẩu ( 4- 10 ) ">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="glyphicon glyphicon-lock"></span>
                                                        <input type="password" class="form-control" placeholder="Nhập lại mật khẩu">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="glyphicon glyphicon-earphone"></span>
                                                        <input type="number" class="form-control" placeholder="Nhập số điện thoại">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="glyphicon glyphicon-envelope"></span>
                                                        <input type="email" class="form-control" placeholder="Nhập email">
                                                    </div>
                                                    <button type="button" class="btn btn-primary">Register</button>
                                                </div>
                                            </div><!-- row modal-body -->
                                        </div><!-- modal-content -->
                                    </div><!-- modal-dialog -->
                                </div><!-- modal fade -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    <div class="nava">
        <div class="container">
            <div class="main-head">
                <div class="row">
                    <!-- Logo Starts -->
                    <div class="col-md-6">
                        <div id="logo">
                            <a href="#"><img src="{!! url('front/img/logo1.png') !!}" title="Spice Shoppe" alt="Spice Shoppe"
                                             class="img-responsive"></a>
                        </div>
                    </div>
                    <!-- Logo Starts -->
                    <!-- Search Starts -->
                    <div class="col-md-3">
                        <form action="">
                            <div id="search">
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" placeholder="Search">
                                    <span class="input-group-btn">
                                    <button class="btn btn-lg" type="button">
                                      <i class="fa fa-search"></i>
                                    </button>
                                  </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Search Ends -->
                    <!-- Shopping Cart Starts -->
                    <div class="col-md-3">
                        <div id="cart" class="btn-group btn-block">
                            <button type="button" data-toggle="dropdown" class="btn btn-block btn-lg dropdown-toggle">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="hidden-md">Cart:</span>
                                <span id="cart-total">2 item(s) - $340.00</span>
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <table class="table table-striped hcart">
                                        <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <a href="#">
                                                    <img src="{!! url('front/img/ip_6s.png') !!}" alt="image" title="image"
                                                         class="img-thumbnail img-responsive">
                                                </a>
                                            </td>
                                            <td class="text-left">
                                                <a href="#">
                                                    iphone 6s
                                                </a>
                                            </td>
                                            <td class="text-right1"><span>x 1</span></td>
                                            <td class="text-right">$120.68</td>
                                            <td class="text-center">
                                                <a href="">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <a href="#">
                                                    <img src="{!! url('front/img/ip_6s.png') !!}" alt="image" title="image"
                                                         class="img-thumbnail img-responsive">
                                                </a>
                                            </td>
                                            <td class="text-left">
                                                <a href="#">
                                                    iphone 6s
                                                </a>
                                            </td>
                                            <td class="text-right1"><span>x 2</span></td>
                                            <td class="text-right">$240.00</td>
                                            <td class="text-center">
                                                <a href="">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <table class="table table-bordered total">
                                        <tbody>
                                        <tr>
                                            <td class="text-right"><strong>Sub-Total</strong></td>
                                            <td class="text-left">1,101.00 VND</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>VAT (17.5%)</strong></td>
                                            <td class="text-left">192.68VND</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>Total </strong></td>
                                            <td class="text-left">1,297.68VND</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <p class="text-right btn-block1">
                                        <a href="#">
                                            View Cart
                                        </a>

                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Shopping Cart Ends -->
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu Starts -->
    <nav id="main-menu" class="navbar" role="navigation">
        <div class="container">
            <!-- Nav Header Starts -->
            <div class="navbar-header">
                <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-cat-collapse">
                    <span class="sr-only">Phone Shop</span>
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- Nav Header Ends -->
            <!-- Navbar Cat collapse Starts -->
            <div class="collapse navbar-collapse navbar-cat-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="">Phone &amp; Shop</a></li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                            Sam Sung
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a tabindex="-1" href="#">Galaxy S5</a></li>
                            <li><a tabindex="-1" href="#">Galaxy S6</a></li>
                            <li><a tabindex="-1" href="#">Galaxy S7</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">Apple</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    <li class="dropdown-header">Iphone</li>
                                    <li><a tabindex="-1" href="#">Iphone 5</a></li>
                                    <li><a tabindex="-1" href="#">Iphone 6</a></li>
                                    <li><a tabindex="-1" href="#">Iphone 7</a></li>
                                    <li><a tabindex="-1" href="#">Iphone 4</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="dropdown-header">Ipad</li>
                                    <li><a tabindex="-1" href="#">Ipad Ari</a></li>
                                    <li><a tabindex="-1" href="#">Ipad Ari 2</a></li>
                                    <li><a tabindex="-1" href="#">Ipad 3</a></li>
                                    <li><a tabindex="-1" href="#">Ipad 4</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="dropdown-header">App wath</li>
                                    <li><a tabindex="-1" href="#">item 1</a></li>
                                    <li><a tabindex="-1" href="#">item 2</a></li>
                                    <li><a tabindex="-1" href="#">item 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="">OPPO</a></li>
                    <li><a href="">XAOMI</a></li>
                    <li><a href="">SONY</a></li>
                    <li><a href="">Accessories </a></li>

                </ul>
            </div>
            <!-- Navbar Cat collapse Ends -->
        </div>
    </nav>
    <!-- Main Menu Ends -->
</div>
<!--end header-->
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