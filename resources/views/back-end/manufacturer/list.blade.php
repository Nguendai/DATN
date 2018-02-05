@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Danh mục</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Sánh sách loại sản phẩm
						<a href="{!!url('admin/manufacturer/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm mới hãng xe</button></a>
					</div>
					@include('errors.note')
					<div class="panel-body" style="font-size: 12px;">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>										
										<th>Tên hãng</th>
										<th>Tên nước</th>
										<th>hình ảnh</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data as $row)
										<tr>
											<td>{!!$row->manufacture_id!!}</td>
											<td>{!!$row->name!!}</td>
											<td>{!!$row->country_id!!}</td>
											<td>{!!$row->image_data!!}</td>
											<td>
											    <a href="{!!url('admin/manufacturer/edit/'.$row->manufacture_id)!!}" title="Sửa"><span class="glyphicon glyphicon-edit">Sửa</span> </a> &nbsp;
											    <a href="{!!url('admin/manufacturer/del/'.$row->manufacture_id)!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"><span class="glyphicon glyphicon-remove">Xóa</span> </a>
											</td>
										</tr>
									@endforeach								
								</tbody>
							</table>
						</div>
						{!! $data->render() !!}
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection