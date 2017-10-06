@extends('front_end.layouts.master')
@section('content')
<!-- conten -->
<div id="main-container" class="container">
  <div class="row">
    <div class="col-md-9">
      <!-- Breadcrumb Starts -->
      <ol class="breadcrumb">
        <li><a href="#"><font><font>Home</font></font></a></li>
        <li><a href="#"><font><font class="">{!! $pro->category->name !!}</font></font></a></li>
        <li class="active"><font><font class="">{{$pro->slug}}</font></font></li>
      </ol>
      <div class="row product-info">
        <!-- Left Starts -->
        <div class="rowtop">
          <h1>{{$pro->name}}</h1>
        </div>
        <div class="col-sm-5 images-block">
          <p>
            <img src="{!! url('uploads/products/'.$pro->images) !!}"  width="500px" src="{!! url('uploads/products/'.$pro->images) !!}" xoriginal="{!! url('uploads/products/'.$pro->images) !!}" alt="hình ảnh" class="img-responsive thumbnail xzoom">
          </p>
          <div class="xzoom-thumbs">
            <a href="{!! url('uploads/products/'.$pro->images) !!}">
              <img class="xzoom-gallery" width="75" src="{!! url('uploads/products/'.$pro->images) !!}"  xpreview="{!! url('uploads/products/'.$pro->images) !!}">
            </a>
            @foreach($pro_img as $data)
            <a href="{!! url('uploads/products/details/'.$data->images) !!}">
              <img class="xzoom-gallery" width="75" src="{!! url('uploads/products/details/'.$data->images) !!}">
            </a>
            @endforeach
          </div>
        </div>
        <!-- Right Starts -->
        <div class="col-sm-7 product-details">
          <!-- Product Name Starts -->
          <div class="price">
            <span class="price-head"><font><font>Price: </font></font></span>
            <span class="price-new"><font><font>$ {{$pro->price}}</font></font></span>
          </div>
          <!-- Product Name Ends -->
          <hr>
          <!-- Manufacturer Starts -->
          <ul class="list-unstyled manufacturer">
            <li>
              <span><font><font><b>+ Bảo hành:</b> </font></font></span><font><font>1 đổi 1 trong 12 tháng
              </font></font></li>
              <li><span><font><font><b>+ Phụ kiện:</b> </font></font></span><font><font> Dây cáp sạc, tai
              nghe</font></font></li>
              <li><span><font><font><b>+ Khuyến mại:</b> </font></font></span><font><font><i> {{$pro->promo1}}</i></font></font></li>
              <li><span><font><font><i>{{$pro->promo2}}</i></font></font></li>

                
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
          <div class="table-responsive">
            <table class="table">
              <tr>
               <td>Màn hình</td>
               <td style="color:#288ad6">{{$pro->product_detail->screen}}</td>
             </tr>
             <tr>
               <td>Hệ điều hành</td>
               <td style="color:#288ad6" >{{$pro->product_detail->os}}</td>
             </tr>
             <tr>
               <td>Cammera trước</td>
               <td>{{$pro->product_detail->cam1}}</td>
             </tr>
             <tr>
               <td>Cammera sau</td>
               <td>{{$pro->product_detail->cam2}}</td>
             </tr>
             <tr>
               <td>CPU</td>
               <td style="color:#288ad6" >{{$pro->product_detail->cpu}}</td>
             </tr>
             <tr>
               <td>RAM</td>
               <td>{{$pro->product_detail->ram}}</td>
             </tr>
             <tr>
               <td>Bộ nhớ trong</td>
               <td>{{$pro->product_detail->storage}}</td>
             </tr>
             <tr>
               <td>Hỗ trợ thẻ nhớ</td>
               <td>{{$pro->product_detail->extend_memmory}}</td>
             </tr>
             <tr>
               <td>Thẻ SIM</td>
               <td>{{$pro->product_detail->sim}}</td>
             </tr>
             <tr>
               <td>Dung lượng PIN</td>
               <td style="color:#288ad6">{{$pro->product_detail->pin}}</td>
             </tr>
           </table>
         </div>
         
       </div>
       <div class="product-info-box">
        <h4 class="heading"><font><font>RELATED PRODUCTS</font></font></h4>
        <!-- Products Row Starts -->
        <div class="row">
         @foreach($mobile as $data)
         
         <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
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
      </div>
      <!-- Products Row Ends -->
      <div class="col-xs-12">
       <div class="__comment">
         <h4 class="m-font">Bình luận sản phẩm</h4>
         <form method="post" action="{!! url('khachhang/comment/'.$pro->id.'/'.$pro->slug) !!}"class="clearfix" >
           {{csrf_field()}}
           <div class="form-group">
             <textarea name="txtcomment" id="" cols="20" rows="5" class="form-control" required></textarea>
           </div>
           <button type="submit" class="btn btn-primary m-font mb-20 pull-right"> GỬI</button>
         </form>
         <div class="__description mb-40">
           <?php
           $comment=DB::table('comments')->orderBy('id','DESC')->paginate(4);
           ?>
           @foreach($comment as $value)
           <ul class="clearfix">
             <li class="m-font fz-18 mb-5">
               {{$value->name}}
             </li>
             <li>{{$value->comment}}</li>
             <li class="color-gray_8 pull-right">{{$value->created_at}}</li>
           </ul>
           @endforeach
         </div>
       </div>
     </div>
   </div>
 </div> <!-- end  col 9 -->
 <!-- menu right -->
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
          <img src="{!! url('front/img/ip_7s.png')!!}" alt="product" class="img-responsive">
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
          <img src="{!! url('front/img/ip_7s.png') !!}" alt="product" class="img-responsive">
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
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$(".xzoom").xzoom({tint: '#333', Xoffset: 15});
	});
</script>
@endsection