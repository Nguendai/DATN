<!DOCTYPE html>
<html lang="en">
<head>
    <title> ShopPhone </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="" type="image/x-icon" />
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <base href={{asset('')}}></base>
    <link rel="stylesheet" href="{!! url('front/vendor/bootstrap.css') !!}">
    <link rel="stylesheet" href="{!! url('front/vendor/font-awesome.css') !!}">
    <link rel="stylesheet" href="{!! url('front/css/style.css') !!}">
    <link rel="stylesheet" href="{!! url('front/css/chitiet.css') !!}">
    <link rel="stylesheet" href="{!! url('front/css/category.css') !!}">
    <link rel="stylesheet" href="{!! url('front/css/search.css') !!}">
    <link rel="stylesheet" href="{!! url('front/css/search.css') !!}">
    <link rel="stylesheet" href="{!! url('front/dist/xzoom.css') !!}" media="all">
    <link href="{!! url('front/css/font.css') !!}" rel="stylesheet">
    <script type="text/javascript" src="{!! url('front/vendor/bootstrap.js') !!}"></script>
  <script src="{{url('front/vendor/jquery.min.js')}}"></script>
   
    
</head>
<body ng-app="angularAqua">
     
    <!--header-->
    <div class="header">
        <div class="khoi1">
            <div class="container"  >
                <div class="icon1">
                    <b class="fa fa-phone" aria-hidden="true"></b><span>Switchboard: 04 6681 9779</span>
                </div>
                <div class="icon2"><b class="fa fa-envelope-o" aria-hidden="true"></b><a data-email="dainv95@gmail.com" href="mailto:dainv95@gmail.com">dainv95@gmail.com</a></div>
                <div class="right" ng-controller = "modal" >
                    <ul >
                        <li>
                            <a href="{{url('/')}}">
                                <i class="fa fa-home" title="Home"></i>
                                <span class="hidden-sm hidden-xs">
                                   Trang chủ
                               </span>
                           </a>
                        </li>
                     
                        <li>
                            <a href="{{url('/contact')}}">
                                <i class="fa fa-phone" title="Wish List"></i>
                                <span class="hidden-sm hidden-xs">
                                    Liên hệ
                                </span>
                            </a>
                        </li>
                        @if(Auth::guest())
                        <li>
                         <a ng-click="modal1('login') " data-toggle="modal" data-target="#myModalDN" >
                            <i class="fa fa-lock" title="Login"></i>
                            <span  class="hidden-sm hidden-xs">
                               Đăng nhập
                         </a>
                           @include('front_end.login.login')
                        </li>
                        <li>
                            <a ng-click = "modal1('register')" data-toggle="modal" data-target="#myModalDK">
                                <i class="fa fa-unlock" title="Register"></i>
                                <span class="hidden-sm hidden-xs">
                                   Đăng ký
                               </span>
                           </a>
                           @include('front_end.login.register')
                        </li>
                        @else
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i>{{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#"><i class="fa fa-user fa-fw"></i>user info </a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="{{ url('khachhang/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        @endif
                    </ul>
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
                        <a href="{{url('/')}}"><img src="{!! url('front/img/logo1.png') !!}" title="Spice Shoppe" alt="Spice Shoppe"
                           class="img-responsive"></a>
                       </div>
                   </div>
                   <!-- Logo Starts -->
                   <!-- Search Starts -->
                   <div class="col-md-6">
                    <form action="{!! url('search') !!}" method="get">
                        {{csrf_field()}}
                        <div id="search">
                            <div class="input-group">
                                <input type="text" class="form-control input-lg" name="txttk"  placeholder="Tìm kiếm">
                                
                                <span class="input-group-btn">
                                    <button class="btn btn-lg" type="submit">
                                      <i class="fa fa-search"></i>
                                  </button>
                              </span>
                          </div>
                      </div>
                  </form>
              </div>
              <!-- Search Ends -->
             
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
            <span class="sr-only">Salon</span>
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Nav Header Ends -->
    <!-- Navbar Cat collapse Starts -->
    <div class="collapse navbar-collapse navbar-cat-collapse" ng-controller = "navController">
    </ul>
    </div>
    <!-- Navbar Cat collapse Ends -->
</div>
</nav>
<!-- Main Menu Ends -->
</div>
<!--end header-->