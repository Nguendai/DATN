@extends('front_end.layouts.master')
@section('content')
<!-- conten -->
<div id="main-container" class="container">
    <div class="row">
        <!-- menu left -->
        <div class="col-md-3">
           <ul class="nav">
            <h3 class="side-heading"><font><font  >  Category</font></font></h3> 
            <?php
            $data = DB::table('categories')->select('id','name','parent_id','slug')->where('parent_id',0)->get();
            ?>
            @foreach($data as $list)    
            <li class="list-group-item" id="dropdown"><a style="color: #848484;font-weight: 500;" data-toggle="collapse" href="#{{$list->slug}}"><i class="fa fa-chevron-right"></i>
                {{$list->name}} </a></li>
                <div id="{{$list->slug}}" class=" collapse">
                    <?php $data2 = DB::table('categories')->select('id','name','parent_id','slug')->where('parent_id',$list->id)->get();?>
                    @foreach($data2 as $list2)
                    <li class="list-group-item" style="padding-left: 50px;" ><a href="{{url('loai-san-pham/'.$list2->id.'/'.$list2->slug)}}" style="color: #848484;font-weight: 500;" ><i class="fa fa-chevron-right"></i>
                        {{$list2->name}} </a></li>
                        @endforeach
                    </div>
                    @endforeach
                </ul>


                <div class="product-new">

                    <!-- Product #1 Starts -->
                    <h3 class="side-heading"><font><font>Product New</font></font></h3>
                    <div class="thumbnail heading">
                        <div class="image">
                            <img src="{{ url('front/img/ip_7s.png') }}" alt="product" class="img-responsive">
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
                            <img src="{{url('front/img/ip_7s.png')}}" alt="product" class="img-responsive">
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
            </div><!-- end menu left -->
            <!--  main-cart -->
            <!-- Latest Products Starts -->
            <section class="products-list col-md-9 container">

                <!-- Heading Starts -->
                <h2 class="product-head">Search:<span class="she">
                    {{$keyword}}

                </span></h2>
                <!-- Heading Ends -->
                <!-- Products Row Starts -->
                <div class="row">
                    @foreach($products as $data)

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="thumbnail wow fadeInUp " data-wow-duration="1.6s" data-wow-delay="0" style="height: 450px;">
                            <div class="image">
                                <img src="{!! url('uploads/products/'.$data->images) !!}" width="300px" alt="product" class="img-responsive">
                            </div>
                            <div class="caption">
                                <h4><a href="{!!url('chi-tiet-san-pham/'.$data->id.'/'.$data->slug)!!}">{{$data->name}}</a></h4>
                                <div class="description">
                                    <?php   echo substr( $data->promo2,0,60).'...'; ?>
                                </div>
                                <div class="price">
                                    <span class="price-new">${!! number_format($data->price,0,",",".") !!}</span>
                                    <span class="price-old">$249.50</span>
                                </div>
                                @if(Auth::guest())
                                <div class="cart-button button-group " ng-controller = "modal">
                                    <button type="button" class="btn btn-wishlist" ng-click="modal1('login')" data-toggle="modal" data-target="#myModalDN"  data-toggle="tooltip" title="Thích">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                    <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </button>
                                    <button type="button"  ng-click="modal1('login')"  data-toggle="modal" data-target="#myModalDN" class="btn btn-cart">
                                        Add to cart
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </div>
                                @else
                                <div class="cart-button button-group " >
                                    <button type="button" class="btn btn-wishlist"  data-toggle="tooltip" title="Thích">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                    <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </button>
                                    <button type="button"  class="btn btn-cart">
                                        Add to cart
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </div>
                                @endif
                            </div>
                            <div class="politis">
                                <div class="title">
                                    <a href="{!!url('chi-tiet-san-pham/'.$data->id.'/'.$data->slug)!!}"><h4>{{$data->name}}</h4></a>
                                    <ul class="list-group">
                                        <li class="">Screen: {{$data->screen}}</li>
                                        <li class="">OS: {{$data->os}}</li>
                                        <li class="">CPU: {{$data->vga}}</li>
                                        <li class="">RAM: {{$data->ram}}</li>
                                        <li class="">Camera : {{$data->cam1}}, Selfie:{{$data->cam2}}</li>
                                        <li class="">ROM: {{$data->storage}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                    <!-- paginatiomn -->
                    <div class="pagination">
                      <a href="#">&laquo;</a>
                      <a href="#">1</a>
                      <a href="#" class="active">2</a>
                      <a href="#">3</a>
                      <a href="#">4</a>
                      <a href="#">5</a>
                      <a href="#">6</a>
                      <a href="#">&raquo;</a>
                  </div>  <!-- end pag -->
              </div>

          </section><!--  end product list -->
          <!-- 2 Column Banners Starts -->
      </div>
  </div>
  <!--end conten-->
  @endsection