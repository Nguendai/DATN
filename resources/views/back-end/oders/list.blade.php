@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Dơn đặt hàng</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-heading">
					Danh sách đơn đặt hàng						
				</div>
				<div class="panel panel-default">
					<form action="{{url('admin/donhang/date')}}" method="get" class="center-block" style="max-width: 50%;padding-top: 10px">
						{{csrf_field()}}
						<div class="text-center "><h3 for="">Lọc đơn đặt hàng</h3></div>
						<div class="form-group">
							<label for="">Từ ngày:</label><input type="date" name="date1" required class="form-control" style="width:28% ;display: inline-block"/>
							<label for="">Đến ngày:</label><input type="date"  name="date2"  class="form-control" style="width:28% ;display: inline-block" required/>
							<button type="submit" class="btn btn-primary" style="display: inline-block" >Tìm kiếm</button>
						</div>

					</form>
					@include('errors.note')
					<div class="panel-body" style="font-size: 13px;">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>										
										<th>Tên khách hàng</th>
										<th>Địa chỉ</th>
										<th>Điện thoại</th>
										<th>Email</th>										
										<th>Ngày đặt</th>
										<th>Thành tiền</th>
										<th>Trạng thái</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data as $row)
										<tr>
											<td>{!!$row->id!!}</td>
											<td>{!!$row->name!!}</td>
											<td>{!!$row->address!!}</td>
											<td>{!!$row->phone!!}</td>
											<td>{!!$row->email!!}</td>
											<td>{!!$row->created_at!!}</td>
											<td>{!! number_format($row->total,0,",",".")!!}đ</td>
											<td>
												@if($row->status ==0)
													<span style="color:#d35400;">Chưa xác nhận</span>
												@else
													<span style="color:#27ae60;"> Đã xác nhận</span>
												@endif
											</td>
											<td>
											    <a href="{!!url('admin/donhang/detail/'.$row->id)!!}" title="Chi tiết">Chi tiết  </a> &nbsp;
											    <a href="{!!url('admin/donhang/del/'.$row->id)!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"> Hủy bỏ</a>
											</td>
										</tr>
									@endforeach								
								</tbody>
							</table>
						</div>
						{!! $data->render() !!}
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection