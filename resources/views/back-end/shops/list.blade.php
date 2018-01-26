@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Cửa hàng</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-8"><div class="form-group">
								<label for="inputLoai" class="col-sm-3 control-label"><strong> Danh sách cửa hàng </strong></label>
								<div class="col-md-3">
									<form action="{!! url('admin/shops/search') !!}" method="get">
										{{csrf_field()}}
										<input type="search" name="txttk" id="inputTxttk" class="form-control" value="" placeholder="Tìm sản phẩm..." required="required" title="">
									</form>
								</div>
							</div>
							</div>
						
							<div class="col-md-2">
									<a href="{!!url('admin/shops/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm Mới Cửa Hàng</button></a>
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
										<th>Hình ảnh</th>
										<th>Tên sản phẩm</th>
										<th>Địa chỉ</th>
										<th>Thương hiệu</th>
										<th>Phone</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data as $row)
										<tr>
											<td>{!!$row->id!!}</td>
											<td> <img src="{!!url('uploads/shops/'.$row->image)!!}" alt="iphone" width="50" height="40"></td>
											<td>{!!$row->name!!}</td>
											<td>{!!$row->address!!}</td>
											<td>{!!$row->category->name!!}</td>
											<td>{!!$row->phone!!} </td>
								
											<td>
											    <a href="{!!url('admin/sanpham/edit/'.$row->id)!!}" title="Sửa"><span class="glyphicon glyphicon-edit">Sửa</span> </a> &nbsp;
											    <a href="{!!url('admin/sanpham/del/'.$row->id)!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"><span class="glyphicon glyphicon-remove">Xóa</span> </a>
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