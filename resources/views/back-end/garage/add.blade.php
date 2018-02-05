@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Garage</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Thêm mới Garage:</small></h1>
			</div>
		</div><!--/.row-->		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
						@include('errors.note')
						<form action="" method="POST" role="form" enctype="multipart/form-data">
				      		{{ csrf_field() }}
				      		<div class="row">
				      		<div class="form-group col-md-6">
					      		<label for="input-id">Chọn danh mục</label>
					      		<select class="js-example-basic-multiple" name="brand[]" w multiple="multiple">
					      			@foreach($manufacturer as $data)
									<option value="{{$data->brand_id}}">{{$data->name}}</option>
									@endforeach
								</select>
				      		</div>

				      		<div class="form-group col-md-6">
				      			<label for="input-id">Tên gara</label>
				      			<input type="text" name="txtname" id="inputTxtname" class="form-control" value="{{ old('txtname') }}"  >
				      		</div>
				      	</div>
				      		<div class="form-group">
				      			<label for="input-id">Thông tin</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Open
				      					<div id="datetimepicker3" class="input-append">
								   			<input data-format="hh:mm" name = "openning_time" class="form-control" type="text"></input>
								           <span class="add-on">
								          	<i data-time-icon="icon-time" data-date-icon="icon-calendar">
								           </i>
								       		</span>
									</div>
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Close
						      				<div id="datetimepicker3" class="input-append">
										    <input data-format="hh:mm" class="form-control" name="closing_time" type="text"></input>
										    <span class="add-on">
										      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
										      </i>
										    		</span>
												</div>
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Địa chỉ : <input type="text" name="address"  id="inputtxtpromo3" value="{{ old('address') }}" class="form-control" >
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">				      			
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Dịch vụ : <select class="js-example-basic-multiple" name="service[]"  multiple="multiple">
						      			@foreach($service as $data)
										<option value="{{$data->service_id}}">{{$data->name}}</option>
										@endforeach
								</select>
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Lat Loc : <input type="text" name="lat_loc" id="inputtxtRam" value="{{ old('phone') }}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Lng Log : <input type="text" name="lng_log" id="inputtxtRam" value="{{ old('phone') }}" class="form-control" >
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id"> Thông tin</label>
				      			<div class="row">
					      			
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Phone : <input type="text" name="phone" id="inputtxtRam" value="{{ old('phone') }}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Email : <input type="email" name="email" id="inputtxtStorage" value="{{ old('email') }}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-left: 0;">	
					      				Facebooks	<input type="text" name="facebooks" id="inputtxtExtend" value="{{ old('facebooks') }}" class="form-control">
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Payment method <input type="text" name="pay_method " id="inputtxtscreen" value="{{ old('pay_method') }}" class="form-control" >
					      			</div>
					      		</div>
					      					      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Hình ảnh</label>
				      			<div class="row">
					      			@for( $i=1; $i<=4; $i++)
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Hình ảnh {!!$i!!} : <input type="file" name="txtdetail_img[]" value="{{ old('txtdetail_img[]') }}"  id="inputtxtdetail_img" class="form-control">
					      			</div>
					      			@endfor
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Đánh giá</label>
				      			<div class="row">	
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id">Bài đánh giá chi tiết</label>
					      				<textarea name="txtReview" id="inputtxtReview" class="form-control" rows="4" value="{{ old('txtReview') }}" required="required"></textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtReview',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
					      			</div>
					      		</div>				      			
				      		</div>		      				      		

				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Thêm sản phẩm" class="button" />
				      	</form>			      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->

<!-- =====================================main content - noi dung chinh trong chu -->
@endsection
@section('script')
<script src="{!!url('asset/js/select2.min.js')!!}"></script>
<script type="text/javascript">
	$(document).ready(function() {
    	$('.js-example-basic-multiple').select2();
	});
</script>
@endsection
