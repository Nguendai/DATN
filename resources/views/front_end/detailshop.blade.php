@extends('front_end.layouts.master')
@section('content')
<!-- conten -->
<div id="main-container" class="container">
  <div class="row">
    <div class="col-md-9">
      <!-- Breadcrumb Starts -->

      <ol class="breadcrumb">
        <li><a href="#"><font><font>Home</font></font></a></li>
        <li><a href="{{url('loai-san-pham/'.$shop->cat_id.'/'.$category->slug)}}"><font><font class="">{!! $category->name !!}</font></font></a></li>
        <li class="active"><font><font class="">{{$shop->slug}}</font></font></li>
      </ol>
      <div class="row product-info">
        <!-- Left Starts -->
        <div class="rowtop">
          <h1>{{$shop->name}}</h1>
        </div>
        <div class="col-sm-5 images-block">
          <p>
            <img src="{!! url('uploads/shops/'.$shop->image) !!}"  width="500px" src="{!! url('uploads/shops/'.$shop->image) !!}" xoriginal="{!! url('uploads/shops/'.$shop->image) !!}" alt="hình ảnh" class="img-responsive thumbnail xzoom">
          </p>
          <div class="xzoom-thumbs">
            <a href="{!! url('uploads/shops/'.$shop->image) !!}">
              <img class="xzoom-gallery" width="75" src="{!! url('uploads/shops/'.$shop->image) !!}"  xpreview="{!! url('uploads/shops/'.$shop->image) !!}">
            </a>
            @foreach($shop->images as $data)
            <a href="{!! url('uploads/shops/details/'.$data) !!}">
              <img class="xzoom-gallery" width="75" src="{!! url('uploads/shops/details/'.$data) !!}">
            </a>
            @endforeach
          </div>
        </div>
        <!-- Right Starts -->
        <div class="col-sm-7 product-details">
          <!-- Product Name Starts -->
          <div class="price">
            <span class="price-head"><font><font>Liên hệ: </font></font></span>
            <span class="price-new"><font><font>$ {{$shop->phone}}</font></font></span>
          </div>
          <!-- Product Name Ends -->
          <hr>
          <!-- Manufacturer Starts -->
          <ul class="list-unstyled manufacturer">
            <li>
              <span><font><font><b>+ email:</b> </font></font></span><font><font>{{$shop->email}}
              </font></font></li>
              <li><span><font><font><b>+ website:</b> </font></font></span><font><font> 
              {{$shop->website}}</font></font></li>
              <li><span><font><font><b>+ Địa chỉ:</b> </font></font></span><font><font><i> {{$shop->address}}</i></font></font></li>
              <li><span><b>+ Discription:</b> <font><font><i>{{$shop->discription}}</i></font></font></li>
              </ul>
              <!-- Manufacturer Ends -->
              <hr>
              <!-- Available Options Starts -->
              <div id="ratea">
                <input type="hidden" class="rating" id="rateing"  data-filled="fa fa-star fa-3x" data-empty="fa fa-star-o fa-3x"/>
              </div>
        </div>
        <!-- Available Options Ends -->
        <hr>
      </div>
      <!-- Right Ends -->
  <div class="product-info-box">
      <h4 class="heading">Map</h4>
      <div style="height: 243px">
      <div id="map-canvas" style="width: 100%; height: 100%; margin: 0; padding: 0;"></div>
      </div>
  </div>
   <div class="product-info-box">
    <h4 class="heading"><font><font>SẢN PHẨM</font></font></h4>
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
            <?php   echo substr($data->promo2,0,60).'...';?>
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
              Mua ngay
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
              <a href="{{ url('khachhang/getcart/'.$data->id) }}">Mua ngay</a>
              <i class="fa fa-shopping-cart"></i>
            </button>
          </div>
          @endif
        </div>
        <div class="politis">
          <div class="title">
            <a href="{!!url('chi-tiet-san-pham/'.$data->id.'/'.$data->slug)!!}"><h4>{{$data->name}}</h4></a>
            <ul class="list-group">
             
            </ul>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <!-- Products Row Ends -->
</div>
</div> <!-- end  col 9 -->
<!-- menu right -->
@include('front_end.layouts.menu_right')
</div>

</div>
<!--end conten-->
@endsection
@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDD5F9Zet_TmckkgQ20Y2-NHq026f-68cw">
    </script>
    <script type="text/javascript">
   salon_name = 'Mercedes-Benz Haxaco Điện Biên Phủ ';
      salon_address = '333 Điện Biên Phủ, Q.Bình Thạnh, TP HCM';
      var salon_url = 'http://mercedes-benz-haxaco.bonbanh.com/';
      var glat = '10.801454';
      var glong = '106.709982';
      var map,
          infowindow,                
          marker = new Array(),
          old_id = 0,
          defaultLatLng = new google.maps.LatLng(glat, glong),
          infoWindowArray = new Array(),
          infowindow_array = new Array();

        function loadMarker(myLocation, myInfoWindow, id) {
            marker[id] = new google.maps.Marker({position: myLocation, map: map, visible: true});
            var popup = myInfoWindow;
            infowindow_array[id] = new google.maps.InfoWindow({content: popup});
            google.maps.event.addListener(marker[id], 'mouseover', function () {
                if (id == old_id) return;
                if (old_id > 0) infowindow_array[old_id].close();
                infowindow_array[id].open(map, marker[id]);
                old_id = id;
            });
            google.maps.event.addListener(infowindow_array[id], 'closeclick', function () {
                old_id = 0;
            });
            console.log(map)
        }
        function moveToMaker(id) {
            var location = marker[id].position;
            map.setCenter(location);
            if (old_id > 0) infowindow_array[old_id].close();
            infowindow_array[id].open(map, marker[id]);
            old_id = id;
            console.log('da chay vao day');
        }
        function initialize() {
            var mapOptions = {
                center: defaultLatLng,
                zoom: 16,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            map.setCenter(defaultLatLng);

            infoWindowArray[7895] = '<div class="map_description"><div class="map_title">' + salon_name + '</div><div>'
                    + salon_address + '</div></div>';
            loadMarker(defaultLatLng, infoWindowArray[7895], 7895);

            moveToMaker(7895);
            console.log('da chay vao day');
        }
        google.maps.event.addDomListener(window, 'load', initialize());
</script>
<script type="text/javascript">
 
	$(document).ready(function(){
    $(ratea).change(function(){
      var rate = $('#rateing').val();
      var shop_id =parseInt('<?php echo $shop->id?>');
      var url = 'api/rating';
      $.ajax({
        url: url,
        data:{
          rate :rate,
          shop_id : shop_id,
        },
        type:'POST',
        dataType:'json',
        success:function(data){
          console.log(data);
        }
        

           
      });
    });
    
  
  $(".xzoom").xzoom({tint: '#333', Xoffset: 15});
  });
</script>
@endsection