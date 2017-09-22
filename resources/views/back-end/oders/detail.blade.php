@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Chi tiết đơn hàng </li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<form action="" method="POST" role="form">	
					<input type="hidden" name="_token" value="{{ csrf_token() }}">				
					<div class="panel panel-default">
						@include('errors.note')
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>ID</th>
											<th> Họ-tên khách hàng</th>
											<th>Địa chỉ</th>
											<th>Điện thoại</th>
											<th>Ngày đặt</th>
											<th>Tổng tiền</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{!!$oder->id!!}</td>
											<td>{!!$oder->name!!}</td>
											<td>{!!$oder->address!!}</td>
											<td>{!!$oder->phone!!}</td>
											<td>{!!$oder->created_at!!}</td>
											<td>{!! number_format($oder->total,0,",",".") !!}đ</td>
										</tr>
									</tbody>
								</table>
							</div>
						<div class="panel-heading">						 
							Chi tiết sản phẩm trong đơn đặt hàng
						</div>
						<div class="panel-body" style="font-size: 12px;">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>										
											<th>STT</th>
											<th>Hình ảnh</th>
											<th>Tên sản phẩm</th>
											<th>Tóm tắt chức năng</th>
											<th> Số lượng </th>
											<th>Giá bán</th>
											<th>Tồn kho</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									<?php
											$i=1;
									?>
										@foreach($data as $row)
											<tr>
												<td>{!!$i++!!}</td>
												<td> <img src="{!!url('uploads/products/'.$row->images)!!}" alt="iphone" width="50" height="40"></td>
												<td>{!!$row->name!!}</td>
												<td>{!!$row->intro!!}</td>
												<td>{!!$row->od_qty!!} </td>
												<td>{!! number_format($row->price,0,",",".") !!} đ</td>
												@if($row->qty>0)
													<td>{{$row->qty}}</td>
												@else
													<td class="text-danger">
														Hết hàng
													</td>
												@endif
												<td>
													@if($row->od_status==0)
														@if($row->qty>0)
												    <a href="{!!url('admin/donhang/check-detail/'.$row->id.'/'.$row->od_qty."/".$row->od_id)!!}"  title="Xác nhận" ><span class="glyphicon glyphicon-check"></span></a>
														@else
														<a href="{!!url('admin/donhang/del-detail/'.$row->od_id)!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"  title="Xóa" ><span class="glyphicon glyphicon-remove"></span></a>
														@endif
													@endif
													@if($row->od_status==1)
														<span style="color:#27ae60;"> Đã xác nhận</span>
													@endif
												</td>
											</tr>
										@endforeach								
									</tbody>
								</table>
							</div>
						</div>
					</div>
					@if($oder->status==0)
					<button type="submit" onclick="return xacnhan('Xác nhận đơn hàng này ?')"  class="btn btn-danger"> Xác nhận đơn hàng </button>
						@else
						<a href="{{url('admin/donhang')}}" class="btn btn-warning pull-left"><i class="glyphicon glyphicon-menu-left"></i><span class="m-font">QUAY LẠI</span></a>
						@endif
				</form>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection