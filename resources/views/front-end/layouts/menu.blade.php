<header id="tiishop-header"  class="clearfix"  >
    <div class="container">
        <div class="row" style="display: flex; align-items: center;">
            <div class="col-md-2 col-xs-9 __img">
                <a href="{!! url('/') !!}"><img src="{!! url('front-end/assets/image/tiishop2.png') !!}" alt="" class="img-responsive tiishop_img-boss"></a>
            </div>
            <div class="col-md-7 col-xs-3" ng-controller="navController">
                <?php
                $data = DB::table('categories')->select('id','name','parent_id','slug')->where('parent_id',0)->get();
                ?>
                <ul class="tiishop_nav" ng-class={"show-menu":isActive}>
                    <li class="visible-xs visible-sm mb-10 "><a href="{!! url('/') !!}"><img src="{!! url('front-end/assets/image/tiishop.png') !!}" alt=""  class="img-responsive"></a></li>
                    <li><a href="{!! url('/') !!}"><i class="__menu-icon fa fa-home fz-18"></i>TRANG CHỦ</a></li>
                    @foreach($data as $list)
                        <li ><a href="">{{$list->name}}<i class="fa fa-angle-down"></i></a>
                            <ul>
                                <?php $data2 = DB::table('categories')->select('id','name','parent_id','slug')->where('parent_id',$list->id)->get();?>
                                @foreach($data2 as $list2)
                                    <li ><a href="{{url('loai-san-pham/'.$list2->id.'/'.$list2->slug)}}">{{$list2->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                    <li><a href="{!! url('/') !!}"><i class="__menu-icon fa fa-map fz-16"></i>LIÊN HỆ</a></li>
                </ul>
            </div>
            <div class="col-md-1 clearfix hidden-xs hidden-sm pr-0">
                <div class="__bonus pull-left">
                    <div class="__search">
                        <a href="" id="search">
                            <i id="icon-search1" class="fa fa-search"></i>
                        </a>
                    </div>
                    <div class="search-btn clearfix">
                        <form action="{!! url('search') !!}" method="get" class="form-group">
                            {{csrf_field()}}
                            <div class="form-group clearfix">
                                <h5 for="" class=" m-font color-light">TÌM KIẾM</h5>
                                <input type="text" class="form-control tiishop_search" name="txttk" placeholder="Nhập từ khóa" /><button class="__search-btn"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </form>
                        <form action="{{url('search-pro')}}" method="get">
                            <div id="search-pro-bonus" class="form-group">
                                <h5 class="m-font color-light">LỌC NÂNG CAO</h5>
                                {{csrf_field()}}
                                <select name="sltcategory" id="__search-pro" class="form-control" required>
                                    <option value="" class="form-control">Chọn danh mục</option>
                                    <?php $cate_pro=DB::table('categories')->select('name','id')->where('parent_id',0)->get(); ?>
                                    @foreach($cate_pro as $val1)
                                        <option value="{{$val1->id}}" @if(isset($id) && $val1->id==$id) selected @endif>{{$val1->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="sltproduct" id="product-append" required class="form-control" >
                                    <option value="" >Chọn danh mục sản phẩm</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="sltprice" id="" class="form-control" required>
                                    <option value="">Chọn mức giá</option>
                                    <option value="1">Dưới 5 triệu</option>
                                    <option value="2">5 đến 10 triệu</option>
                                    <option value="3">10 đến 15 triệu</option>
                                    <option value="4">15 đến 20 triệu</option>
                                    <option value="5">Hơn 20 triệu</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Lọc sản phẩm</button>
                            </div>

                        </form>
                    </div>
                    <div class="__cart" >
                        <a href=""><i class="fa fa-shopping-cart"></i><span class="__number-product"></span></a>
                        <div class="__cart-view text-center color-light">
                            <ul>
                                <li>
                                    <table class="table-responsive table  fz-12 bgc-gray_2 mb-0">
                                        <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <a href="#">
                                                    <img src="img/ip_6s.png" alt="image" title="image"
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
                                                    <img src="img/ip_6s.png" alt="image" title="image"
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
                </div>
            </div>
            <div class="col-md-2 clearfix hidden-xs hidden-sm pl-0" ng-controller="modal" >

                @if(Auth::guest())
                    <div class="__login m-font pull-right">
                        <a href=""   class="tiishop_btn fz-12 color-light bgc-main1 color-hover-light bgc-hover-main2" ng-click="modal1()" >
                            <i class="fa fa-user-circle pr-5"></i>ĐĂNG NHẬP</a>
                    </div>

                @else

                    <li class="dropdown __login">
                        <img class=" __avatar" src="{{Auth::user()->images}}" alt="" />
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/user') }}">Thông tin cá nhân</a></li>
                            <li><a href="{{ url('khachhang/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </div>
            <div class="tiishop-separator"></div>
        </div>
    </div>
</header>
@include('front-end.login.login')
