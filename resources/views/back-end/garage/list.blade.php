@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Sản phẩm</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-8"><div class="form-group">
								<label for="inputLoai" class="col-sm-3 control-label"><strong> Danh sách garage </strong></label>
								<div class="col-md-3">
									<form action="{!! url('admin/sanpham/search') !!}" method="get">
										{{csrf_field()}}
										<input type="search" name="txttk" id="inputTxttk" class="form-control" value="" placeholder="Tìm sản phẩm..." required="required" title="">
									</form>
								</div>
							</div>
							</div>
							<div class="col-md-2">
									<a href="{!!url('admin/garage/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm Mới Sản Phẩm</button></a>
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
										<th>Tên</th>
										<th>Địa chỉ</th>
										<th>Phone</th>
										<th>Email</th>
										<th>Luot xem</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($garage as $row)
										<tr>
											<td>{!!$row->garage_id!!}</td></td>
											<td>{!!$row->name!!}</td>
											<td>{!!$row->address!!}</td>
											<td>{!!$row->phone!!}</td>
											<td>{!!$row->email!!}</td>
											<td>{!!$row->total_view!!} </td>
											<td>
											    <a href="{!!url('admin/garage/edit/'.$row->garage_id)!!}" title="Sửa"><span class="glyphicon glyphicon-edit">Sửa</span> </a> &nbsp;
											    <a href="{!!url('admin/garage/del/'.$row->garage_id)!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"><span class="glyphicon glyphicon-remove">Xóa</span> </a>
											</td>
										</tr>
									@endforeach								
								</tbody>
							</table>
						</div>
						{!! $garage->render() !!}
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection