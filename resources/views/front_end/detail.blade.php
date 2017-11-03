@extends('front_end.layouts.master')
@section('content')
<!-- conten -->
<div id="main-container" class="container">
  <div class="row">
    <div class="col-md-9">
      <!-- Breadcrumb Starts -->
      <ol class="breadcrumb">
        <li><a href="#"><font><font>Home</font></font></a></li>
        <li><a href="{{url('loai-san-pham/'.$pro->category->id.'/'.$pro->category->slug)}}"><font><font class="">{!! $pro->category->name !!}</font></font></a></li>
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
               @if(Auth::guest())
                <div class="cart-button button-group " >
                  <button type="button" class="btn btn-wishlist"  data-toggle="modal" data-target="#myModalDN"  data-toggle="tooltip" title="Thích">
                      <i class="fa fa-heart"></i>
                  </button>
                  <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                      <i class="fa fa-bar-chart-o"></i>
                  </button>
                  <button type="button"    data-toggle="modal" data-target="#myModalDN" class="btn btn-cart">
                      Add to cart
                      <i class="fa fa-shopping-cart"></i>
                  </button>
              </div>

            @else
            <div class="cart-button button-group" >
             <?php
             $like = DB::table('binhchon')->where('pro_id',$pro->id)->where('user_id',Auth::user()->id)->first();
             if($like){
               ?>
               <button type="button" class="btn btn-wishlist"  data-toggle="tooltip" title="Thích">
                <i style="color:#ffb400" class="fa fa-heart"></i></a>
              </button>
              <?php }else{ ?> 
              <button type="button" class="btn btn-wishlist"  data-toggle="tooltip" title="Thích">
                <a href="{{ url('khachhang/binhchon/'.$pro->id) }}"><i class="fa fa-heart"></i></a>
              </button>

              <?php   }   ?>
              <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
                <i class="fa fa-bar-chart-o"></i>
              </button>
              <button type="button"    class="btn btn-cart"><font><font>
                <a href="{{ url('khachhang/getcart/'.$pro->id) }}">Add to cart</a>
              </font></font><i class="fa fa-shopping-cart"></i>
            </button>
          </div>
          @endif

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
            <span class="price-new">${{$data->price}}</span>
            <span class="price-old">${{$data->price + $data->price*10/100}}</span>
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

     <form method="post" action="" class="clearfix" >
       {{csrf_field()}}
       <div class="form-group">
         <textarea name="txtcomment" id="comment" cols="20" rows="5" class="form-control" required></textarea>
       </div>
       @if(Auth::guest())
       <button type= "button"  data-toggle="modal" data-target="#myModalDN" class="btn btn-primary m-font mb-20 pull-right"> GỬI</button>
       @else
       <button type="button" id="send"  class="btn btn-primary m-font mb-20 pull-right"> GỬI</button>
       @endif
     </form>
     <div class="__description mb-40">
       <?php
       $comment=DB::table('comments')->where('pro_id',$pro->id)->orderBy('id','DESC')->paginate(5);
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
@include('front_end.layouts.menu_right')
</div>

</div>
<!--end conten-->
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
    $('#send').click(function(event){
      // event.preventDefault();
      var url = 'khachhang/comment/<?php echo $pro->id; ?>/<?php echo $pro->slug; ?>';
      var comment = $('#comment').val();
      $.ajax({
        url: url,
        data: {
          comment:comment,
        },
        dataType: 'text',
        type:'POST',
        success: function(response){
          $('.__description').prepend(response);
          $('#comment').val('');
        }
      });
     // $(this).prop('disabled', true);
    });
    $(".xzoom").xzoom({tint: '#333', Xoffset: 15});
  });
</script>
@endsection