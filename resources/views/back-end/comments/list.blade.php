@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Bình luận</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-10">
								<label for="inputLoai" class=" control-label"><strong> Danh sách bình luận  </strong>:<i style="color: #30a5ff;">{{$product->name}}</i></label>
							</div>
							<div class="col-md-2">
									<a href="{!!url('admin/sanpham/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Quản lý bình luận</button></a>
							</div>
						</div> 
						
					</div>
					@include('errors.note')
					<div class="panel-body" style="font-size: 12px;">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>										
										<th>Name</th>
										<th>Comment</th>
										<th>Ngày đăng</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data as $row)
										<tr>
											<td>{!!$row->id!!}</td>
											
											<td>{!!$row->name!!}</td>
											<td>{!!$row->comment!!}</td>
											<td>{!!$row->created_at!!}</td>
											
											<td>
											   <!--  <a href="{!!url('admin/sanpham/edit/'.$row->id)!!}" title="Sửa"><span class="glyphicon glyphicon-edit">Sửa</span> </a> &nbsp; -->
											    <a href="{!!url('admin/sanpham/comments/del/'.$row->id.'/'.$product->id)!!}"  title="Xóa" onclick="return xacnhan('Xóa binh luận này này ?')"><span class="glyphicon glyphicon-remove">Xóa</span> </a>
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