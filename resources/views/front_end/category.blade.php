@extends('front_end.layouts.master')
@section('content')
<!-- conten -->
<div id="main-container" class="container">
	<div class="row">
		<div class="col-md-12">
			<!-- Breadcrumb Starts -->
			<ol class="breadcrumb">
				<li><a href="{{ url('/') }}"><font><font>Home</font></font></a></li>
				<li><a href="{{ url('loai-san-pham/'.$name_cate->id.'/'.$name_cate->slug)}}"><font><font class="">{{$name_cate->name}}</font></font></a></li>

			</ol>

			<div class="product-info-box">
				<!-- Products Row Starts -->
				<div class="row">
                  @foreach($product as $data)
                  
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="thumbnail wow fadeInUp " data-wow-duration="1.6s" data-wow-delay="0">
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
          <!-- Products Row Ends -->
      </div>
  </div> <!-- end  col 12 -->

</div>

</div>
<!--end conten-->
@endsection