@extends('front_end.layouts.master')
@section('content')
<!-- conten -->
<div id="main-container" class="container">
  <div class="row">
    <div class="col-md-9">
      <!-- Breadcrumb Starts -->

      <ol class="breadcrumb">
        <li><a href="#"><font><font>Home</font></font></a></li>
        <li class="active"><font><font class="">{{$shop->name}}</font></font></li>
      </ol>
      <div class="row product-info">
        <!-- Left Starts -->
        <div class="rowtop">
          <h1>{{$shop->name}}</h1>
        </div>
        <div class="col-sm-5 images-block">
          <p>
            <img src="{!! url('uploads/garages/'.$shop->images[0]) !!}"  width="500px" src="{!! url('uploads/garages/'.$shop->images[0]) !!}" xoriginal="{!! url('uploads/garages/'.$shop->images[0]) !!}" alt="hình ảnh" class="img-responsive thumbnail xzoom">
          </p>
          <div class="xzoom-thumbs">
            <a href="{!! url('uploads/garages/'.$shop->images[0]) !!}">
              <img class="xzoom-gallery" width="75" src="{!! url('uploads/garages/'.$shop->images[0]) !!}"  xpreview="{!! url('uploads/garages/'.$shop->images[0]) !!}">
            </a>
            @foreach($shop->images as $data)
            <a href="{!! url('uploads/garages/'.$data) !!}">
              <img class="xzoom-gallery" width="75" src="{!! url('uploads/garages/'.$data) !!}">
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
              <span><font><font><b><i class="fa fa-envelope"></i> Email:</b> </font></font></span><font><font style="color: #1f60c5;">{{$shop->email}}
              </font></font></li>
              <li><span><font><font><b><i class="fa fa-facebook-square"></i> Facebooks:</b> </font></font></span><font><font style="color: #1f60c5;"> 
                {{$shop->facebook}}</font></font></li>
                <li><span><font><font><b><i class="fa fa-location-arrow"></i> Địa chỉ:</b> </font></font></span><font><font><i style="color: #c5201f;"> {{$shop->address}}</i></font></font></li>
                <li> <span ><i class="fa fa-clock"></i><font><font><i>{{$shop->openning}} </i></font></font></span><span>-</span><span><font><font><i>{{$shop->closing}} PM</i></font></font></span></li>
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
              <h4 class="heading">Giới Thiệu</h4>
              <div class="description-info" >
                <p><?php  echo html_entity_decode($shop->discription); ?>   </p>
              </div>
            </div>
            <div class="product-info-box">
              <h4 class="heading">Dịch vụ</h4>
              <div class="description-info" >
               <ul>
                @foreach($shop->service as $ser)
                 <li>{{$ser}}</li>
                @endforeach
               </ul>
             </div>
           </div>
           <div class="product-info-box">
            <h4 class="heading">Khuyến mãi</h4>
            <div class="description-info" >
               <ul>
                @foreach($shop->brand as $ser)
                 <li>{{$ser}}</li>
                @endforeach
               </ul>
            </div>
          </div>
          <div class="product-info-box">
            <h4 class="heading">Map</h4>
            <div style="height: 243px">
              <div id="map-canvas" style="width: 100%; height: 100%; margin: 0; padding: 0;"></div>
            </div>
          </div>
          <!-- Products Row Ends -->
          <div class="__comment">
           <h4 ><span class="m-font">{{$numb_comment}}</span> Bình luận</h4>
           <hr/>
           <form method="post" action="" class="clearfix" >
             {{csrf_field()}}
             <div class="form-group">
               <textarea name="txtcomment" id="comment" cols="20" rows="5" class="form-control" required></textarea>
             </div>
             @if(Auth::guest())
             <button type= "button"  data-toggle="modal" data-target="#myModalDN" class="btn btn-primary m-font mb-20 pull-right"> GỬI</button>
             @else
             <input type="text" id="user_id" hidden value="{{Auth::user()->id }}"/>
             <button type="button" id="send"  class="btn btn-primary m-font mb-20 pull-right"> GỬI</button>
             @endif
           </form>
           <div class="__description mb-40">
            @foreach($comment as $data)
             <ul class="clearfix">
               <li class="m-font fz-18 mb-5">
                 {{$data->author}}
               </li>
               <li>{{$data->comment}}</li>
               <li class="color-gray_8 pull-right"><?php   echo substr( $data->created_at->date,0,19); ?></li>
             </ul>
             @endforeach
           </div>
         </div>
       </div> <!-- end  col 9 -->
       <!-- menu right -->
       <div class="col-md-3"></div>
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
    var numb_comment = $('.m-font').html();

     $('#send').click(function(event){

      var url ="api/comment";
      var  gara_id = '<?php echo $shop->id; ?>';
      var  user_id =$('#user_id').val() ;
      var comment = $('#comment').val();
            $.ajax({
        url: url,
        data: {
          comment:comment,
          gara_id:gara_id,
          user_id:user_id,
        },
        dataType: 'json',
        type:'POST',
        success: function(response){
          numb_comment = numb_comment + 1;
          var html = '<ul class="clearfix">'+
               '<li class="m-font fz-18 mb-5">'+
                 response.data.author
               +'</li>'
               +'<li>'+response.data.comment+'</li>'
               +'<li class="color-gray_8 pull-right">'+response.data.created_at+'</li>'
             '</ul>'
          $('.__description').prepend(html);
          $('#comment').val('');
        },
        error: function(error){
          alert(error);
        }
      });
     // $(this).prop('disabled', true);
   });
     $('#ratea').change(function(){
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