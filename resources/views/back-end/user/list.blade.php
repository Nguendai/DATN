@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Nhân viên</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Danh sách nhân viên
						@if(Auth::guard('admin_user')->user()->level==1)
						<a href="{!!url('admin/nhanvien/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm mới nhân viên</button></a>
							@endif
					</div>
				@include('errors.note')
					<div class="panel-body" style="font-size: 13px;">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>ID</th>
										<th>Tên nhân viên</th>
										<th>Email</th>
										<th>Quyền</th>
										<th>Ngày đăng ký</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data as $row)
										<tr>
											<td>{!!$row->id!!}</td>
											<td>{!!$row->name!!}</td>
											<td>{!!$row->email!!}</td>
											<td>
												@if($row->id==1 && $row->level ==1)
													<span style="color:#d35400;">Quản trị hệ thống</span>
												@elseif($row->level==2)
													<span style="color:#2e97e7;">Quản trị viên</span>
												@else
													<span style="color:#27ae60;">Nhân viên</span>
												@endif
											</td>
											<td>{!!$row->created_at!!}</td>
											<td>
											    <a href="{!!url('admin/nhanvien/edit/'.$row->id)!!}" title="Chi tiết"> Cập nhật</a> &nbsp;
											    	<a href="{!!url('admin/nhanvien/del/'.$row->id)!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')">Xóa bỏ</a>
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