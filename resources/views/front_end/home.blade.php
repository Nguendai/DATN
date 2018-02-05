@extends('front_end.layouts.master')
@section('content')
<!-- 3 Column Banners Starts -->
<!-- <div class="col3-banners">
    <div class="container">
        <ul class="row list-unstyled">
            <li class="col-sm-4">
                <img src="{!! url('front/img/mobile1.png') !!}" alt="banners" class="img-responsive">
            </li>
            <li class="col-sm-4">
                <img src="{!! url('front/img/mobile4.png') !!}" alt="banners" class="img-responsive">
            </li>
            <li class="col-sm-4">
                <img src="{!! url('front/img/mobile3.png') !!}" alt="banners" class="img-responsive">
            </li>
        </ul>
    </div>
</div> -->
<!-- Latest Products Starts -->
<section class="products-list">
    <div class="container">
        <!-- Heading Starts -->
        <h2 class="product-head">SALON</h2>
        <!-- Heading Ends -->
        <!-- Products Row Starts -->
        <div class="row mobiphone show">

            @foreach($datas as $data)

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail wow fadeInUp "  data-wow-duration="1.6s" data-wow-delay="0">
                    <div class="image">
                        <img src="{!! url('uploads/garages/profiles/'.$data->image) !!}" style="min-height: 180px" alt="product" class="img-responsive">
                    </div>
                    <div class="caption">
                        <h4><a href="{!!url('chi-tiet-shop/'.$data->id)!!}">{{$data->name}}</a></h4>
                        <div class="stars row">
                            <div class="col-md-6">
                                <input type="hidden" class="rating" value="3" data-filled="fa fa-star fa-1x" data-empty="fa fa-star-o fa-1x"/>
                            </div>
                            <div class="col-md-offset-1 col-md-5">
                                <i style="color: gray;"> {{$data->total_view}} lượt xem</i>
                            </div>
                        </div>
                        <div class="description">
                            <?php   echo substr( $data->address,0,100).'...'; ?>
                        </div> 

                        @if(Auth::guest())
                        <div class="cart-button button-group " ng-controller = "modal">
                            <button type="button" class="btn btn-wishlist" ng-click="modal1('login')" data-toggle="modal" data-target="#myModalDN"  data-toggle="tooltip" title="Thích">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-compare"   data-toggle="tooltip" title="Bieu do">
                                <i class="fa fa-map-marker"></i>
                            </button>
                            <button type="button"  class="btn btn-cart">
                                <a href="{!!url('chi-tiet-shop/'.$data->id)!!}}">Chi tiết</a>
                                <i class="fa fa-info" style="color: #fff" aria-hidden="true"></i>
                            </button>

                        </div>
                        @else
                        <div class="cart-button button-group " >
                            
                           <button type="button" class="btn btn-wishlist"  data-toggle="tooltip" title="Thích">
                            <i style="color:#ffb400" class="fa fa-heart"></i></a>
                        </button>
                        <button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ" data-toggle="modal" data-target="#myModalDN">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </button>
                        <button type="button"  class="btn btn-cart">

                            <a href="{!!url('chi-tiet-san-pham/'.$data->id)!!}}">Chi tiết</a>
                            <i class="fa fa-info" style="color: #fff" aria-hidden="true"></i>
                        </button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <button  class="viewadd btn btn-warning col-md-2 col-md-offset-5"  >Xem them</button>
</div>
</section>
<!--  end product list -->
<!-- 2 Column Banners Starts -->
<!-- <div class="col2-banners">
    <div class="container">
        <ul class="row list-unstyled">
            <li class="col-sm-4">
                <img src="{!! url('front/img/galaxy.png') !!}" alt="banners" class="img-responsive">
            </li>
            <li class="col-sm-8">
                <img src="{!! url('front/img/banner.png') !!}" alt="banners" class="img-responsive">
            </li>
        </ul>
    </div>
</div> -->
<!-- 2 Column Banners Ends -->
<!-- SPECIALS Products Starts -->

<!-- Footer Section Starts -->
<!-- {{ url('khachhang/binhchon/'.$data->id) }} -->


<!-- Modal -->

@endsection
@section('script')

<script type="text/javascript">

    $(document).ready(function(){

     var page = 2;
     $('.viewadd').click(function(){
        var url = "api/product/"+ page;
        var html = "";
        $.ajax({
            url: url,
            data: {},
            dataType: 'json',
            type:'GET',
            success: function(response){
                if(response.code == 101){
                    for (i = 0; i < 4; i++) {
                        html += '<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">'+
                        '<div class="thumbnail wow fadeInUp "  data-wow-duration="1.6s" data-wow-delay="0">'
                        +'<div class="image">'
                        +'<img src="uploads/shops/'+response.datas[i].image+'" style="min-height: 180px" alt="product" class="img-responsive">'
                        +'</div>'
                        +  '<div class="caption">'
                        +'<h4><a href="chi-tiet-shop/'+response.datas[i].id+'/'+response.datas[i].slug+')!!}">'+response.datas[i].name+'</a></h4>'
                        +'<div class="stars row">'
                        +    '<div class="col-md-6">'

                        +  '<input type="hidden" class="rating" value="3" data-filled="fa fa-star fa-1x" data-empty="fa fa-star-o fa-1x"/>'
                        +   '</div>'
                        +    '<div class="col-md-offset-1 col-md-5">'
                        +        '<i style="color: gray;">'+ response.datas[i].total_view +'lượt xem</i>'
                        +    '</div>'
                        +'</div>'
                        + '<div class="description">'
                        +response.datas[i].address.substr(0,100)+'...'
                        +'</div>'
                        +'@if(Auth::guest())'
                        +'<div class="cart-button button-group " ng-controller = "modal">'
                        +   '<button type="button" class="btn btn-wishlist" ng-click="modal1'+"('login')"+'" data-toggle="modal" data-target="#myModalDN"  data-toggle="tooltip" title="Thích" style="margin-right:3px" >'
                        +        '<i class="fa fa-heart"></i>'
                        +    '</button>'
                        +    '<button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ" style="margin-right:3px" >'
                        +        '<i class="fa fa-map-marker" aria-hidden="true"></i>'
                        +    '</button>'
                        +    '<button type="button"  class="btn btn-cart">'
                        +       '<a href="chi-tiet-shop/'+response.datas[i].id+'/'+response.datas[i].slug+'">Chi tiết</a>'
                        +        '<i class="fa fa-info" style="color: #fff" aria-hidden="true"></i>'
                        +    '</button>'

                        +'</div>'
                        +'@else'
                        +'<div class="cart-button button-group" >'
                        
                        +   '<button type="button" id = "like" class="btn btn-wishlist"  data-toggle="tooltip" title="Thích" style="margin-right:3px">'
                        +   '<a href="khachhang/binhchon/'+response.datas[i].id +'}}"> <i class="fa fa-heart"></i></a>'
                        +    '</button>'
                        +    '<button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ" style="margin-right:3px">'
                        +        '<i class="fa fa-map-marker" aria-hidden="true"></i>'
                        +    '</button>'
                        +       '<button type="button"  class="btn btn-cart">'
                        +    '<a href="chi-tiet-shop/'+response.datas[i].id+'/'+response.datas[i].slug+'">Chi tiết</a>'
                        +     '<i class="fa fa-info" style="color: #fff" aria-hidden="true"></i>'
                        +     '   </button>'


                        +' @endif' 
                        +'</div></div></div>';
                        
                    }
                    $('.mobiphone').append(html);
                    abc = '<script type="text/javascript" src="http://localhost/DATN/public/front/js/ranks.js">';
                    $('.mobiphone').append(abc);

                    page ++;
                }else{
                    page ++;
                    alert(response.message);
                    $('.viewadd').addClass('hidden');
                }
            }
        });

});
});
</script>



@endsection
