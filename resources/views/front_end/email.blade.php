<div id="wrap-inner" class="col-md-9">
    <div class="row list-product">
          <div class="col-md-12">
            <div class="clearfix"></div>
            <h3>Thông tin khách hàng</h3>
            <p>
                <span class="info">Khách hàng:{{$info['name']}}</span>
            </p>
            <p>
                <span class="info">Email:{{$info['email']}} </span>
            </p>
            <p>
                <span class="info">Điện thoại:{{$info['phone']}} </span>
            </p>
            <p>
                <span class="info">Địa chỉ:{{$info['address']}} </span>
            </p>
        </div>
        <div class="col-md-12">
            <div class="clearfix"></div>
            <h3>Hóa đơn mua hàng</h3>
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <td>Tên sản phẩm</td>
                    <td>Giá</td>
                    <td>Số lượng</td>
                    <td>Thành tiền</td>
                </tr>

                @foreach($cart as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->qty}}</td>
                    <td>{!! number_format($data->price * $data->qty,0,",",".") !!}đ </td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="3">Tổng tiền:</td>
                    <td style="color:red;font-size: 24px;font-weight: bold">{!! $total !!} đ</td>
                </tr>
            </table>
        </div>
    </div>
</div>
