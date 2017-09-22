@extends('front-end.layouts.master')
@section('content')
    <main class="product_detail">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-12">

                    <div class="__title-related mb-10">
                        <p class="m-font mb-0  bg-primary fz-20">CHI TIẾT SẢN PHẨM</p>
                    </div>
                    <!-- Breadcrumb Starts -->
                    <ol class="breadcrumb">
                        <li><a href="#"><font><font>Home</font></font></a></li>
                        <li><a href="#"><font><font class="">Category</font></font></a></li>
                        <li class="active"><font><font class="">Product</font></font></li>
                    </ol>
                    <div class="row">
                        <div class="col-md-4">
                            <div class=" xzoom-container">
                                <img  src="{!! url('uploads/products/'.$pro->images) !!}"  xoriginal="{!! url('uploads/products/'.$pro->images) !!}" alt="" class=" xzoom img-responsive center-block"  id="xzoom-default">
                                @foreach($pro_img as $data)
                                    <div class="xzoom-thumbs">
                                        <a href="{!! url('uploads/products/details/'.$data->images) !!}"><img class="xzoom-gallery img-responsive" width="80" src="{!! url('uploads/products/details/'.$data->images) !!}"  xpreview="{!! url('uploads/products/details/'.$data->images) !!}" title="The description goes here"></a>
                                        {{--<img src="{!! url('uploads/products/details/'.$data->images) !!}" alt="" class="img-responsive center-block" />--}}
                                    </div>
                                @endforeach
                            </div>
                            <div class="large-7 column"><div id="xzoom2-id" style="float: right; width: 200px; height: 200px;"></div></div>
                        </div>
                        {{--<div class="col-md-2 mb-20">--}}
                            {{--<div  class="slider-nav center-block">--}}
                                {{--<div class="__product-img center-block">--}}
                                    {{--<img  src="{!! url('uploads/products/'.$pro->images) !!}" alt="" class="  img-responsive">--}}
                                {{--</div>--}}
                                {{--@foreach($pro_img as $data)--}}
                                    {{--<div  class="__product-img" >--}}
                                        {{--<img src="{!! url('uploads/products/details/'.$data->images) !!}" alt="" class="img-responsive" />--}}
                                    {{--</div>--}}
                                {{--@endforeach--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="col-md-6 mb-50">
                            <div class="__product_detail pt-20">
                                <h3 class="text-primary">{{$pro->name}}</h3>
                                <h4>Giá: <span class="color-main1"><i>{!! number_format($pro->price,0,",",".") !!} đ</i></span></h4>
                                <ul class="ml-15 mb-20">
                                    <li>Bảo hành:12 tháng</li>
                                    <li>Tình trạng:máy mới 100%</li>
                                    <li>{{$pro->promo1}}</li>
                                    <li>{{$pro->promo2}}</li>
                                </ul>
                                <h4>Hoàn trả</h4>
                                <p>Tận hưởng 30 ngày miễn phí đổi trả cho sản phẩm này. Nếu bạn có thắc mắc về sản phẩm, vui lòng liên hệ với bộ phận Chăm Sóc Khách Hàng tại tienlq@newayict.com</p>
                                @if($pro->qty > 0)
                                    <a href="{!! url('mua-hang/'.$pro->id.'/'.$pro->slug) !!}" class="btn btn-primary">ĐẶT HÀNG NGAY</a>
                                @else
                                    <a class="btn btn-danger pt-15 pb-15">TẠM HẾT HÀNG</a>
                                    <a class="btn btn-success pt-5 pb-5">GỌI 19001696 <br> <span class="fz-10">(Tư vấn nhanh cước gọi miễn phí)</span></a>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 mb-40">
                            <div class="__information pt-30">
                                <table>
                                    <tr>
                                        <td class="fz-18">CẤU HÌNH CHI TIẾT SẢN PHẨM</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Màn hình</td>
                                        <td>{{$pro->product_detail->screen}}</td>
                                    </tr>
                                    <tr>
                                        <td>Hệ điều hành</td>
                                        <td>{{$pro->product_detail->os}}</td>
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
                                        <td>{{$pro->product_detail->cpu}}</td>
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
                                        <td>{{$pro->product_detail->pin}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="__comment">
                                <h4 class="m-font">Bình luận sản phẩm</h4>
                                <form method="post" action="{!! url('khachhang/comment/'.$pro->id.'/'.$pro->slug) !!}"class="clearfix" >
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <textarea name="txtcomment" id="" cols="30" rows="10" class="form-control" required></textarea>
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
                </div>
                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="__title-related mb-10">
                        <p class="m-font mb-0 text-center bg-primary fz-20">SẢN PHẨM TƯƠNG TỰ</p>
                    </div>
                    @foreach($pro_related as $item)
                        <div class="__product __product-related-detail text-center mb-30">
                            <a href="{!!url($item->id.'-'.$item->slug)!!}">
                                <img src="{!! url('uploads/products/'.$item->images) !!}" alt="" >
                                <h4>{{$item->name}}</h4>
                                <p class="color-main1">{!! number_format($item->price,0,",",".") !!} đ</p>
                                <div class="tiishop_overlay">
                                    <div class="tiishop_cell-wrapper">
                                        <div class="tiishop_cell-middle ">
                                            <h4>{{$item->name}}</h4>
                                            <p class="color-main3">{!! number_format($item->price,0,",",".") !!} đ</p>
                                            <ul class="__gift text-left">
                                                <li>{{$item->promo1}}</li>
                                                <li>{{$item->promo2}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@stop
