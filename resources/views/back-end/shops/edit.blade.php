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
				<h1 class="page-header"><small>Sửa sản phẩm </small></h1>
			</div>
		</div><!--/.row-->		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
					@include('errors.note')
						<form action="" method="POST" role="form" enctype="multipart/form-data">
				      		{{ csrf_field() }}
				      		<div class="form-group">
					      		<label for="input-id">Chọn danh mục</label>
					      		<select name="sltCate" id="inputSltCate" required class="form-control">
					      			<option value="">--Chọn thương hiệu--</option>
							        <?php MenuMulti($cat,0,$str='---| ',$pro["cat_id"]); ?>
								</select>
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Tên cửa hàng</label>
				      			<input type="text" name="txtname" id="inputTxtname" class="form-control" value="{!! old('txtname',isset($pro["name"]) ? $pro["name"] : null) !!}"  required="required">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Địa chỉ</label>
				      			<input type="text" name="address" id="inputTxtintro" class="form-control" value="{!! old('address',isset($pro["address"]) ? $pro["address"] : null) !!}" required="required">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Thông Tin</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Phone : <input type="text" name="phone" id="inputtxtpromo1" value="{!! old('phone',isset($pro["phone"]) ? $pro["phone"] : null) !!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Email : <input type="text" name="email" id="inputtxtpromo2" value="{!! old('email',isset($pro["email"]) ? $pro["email"] : null) !!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Website : <input type="text" name="website" id="inputtxtpromo3" value="{!! old('website',isset($pro["website"]) ? $pro["website"] : null) !!}" class="form-control" >
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">				      			
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Hình ảnh : <input type="file" name="txtimg"  id="inputtxtimg"  class="form-control" >
					      				Ảnh cũ: <img src="{!!url('uploads/shops/'.$pro["image"])!!}" width="80" height="60">
					      			</div>
					      		</div>				      			
				      		</div>				      		
				      		
				      		
				      		<div class="form-group">
				      			<label for="input-id">Hình ảnh chi tiết sản phẩm</label>
				      			<?php $stt=0;
								?>
				      			<div class="row">
					      			@foreach($pro_img as $row)
					      				<?php $stt++; ?>
					      				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
						      				Ảnh cũ: {!!$stt!!}<img src="{!!url('uploads/shops/details/'.$row->images)!!}" alt="{!!$row->images!!}" width="80" height="60">
						      			</div>
					      			@endforeach
					      		</div>
					      		<div class="row">
					      			@for( $i=1; $i<=4; $i++)
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Hình ảnh mới {!!$i!!} : <input type="file" name="txtdetail_img[]" value="{{ old('txtdetail_img[]') }}" accept="image" id="inputtxtdetail_img" class="form-control">
					      			</div>
					      			@endfor
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Đánh giá chi tiết sản phẩm</label>
				      			<div class="row">					      			
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id">Tóm tắt đánh giá</label>
					      				<textarea name="txtre_Intro" id="inputTxtre_Intro" class="form-control"  rows="2">{!! old('txtReview',isset($pro['r_intro']) ? $pro['r_intro'] : null) !!}</textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtre_Intro',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
					      			</div>
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id">Bài đánh giá chi tiết</label>
					      				<textarea name="txtReview" id="inputtxtReview" class="form-control" rows="4" ">{!! old('txtReview',isset($pro['review']) ? $pro['review'] : null) !!}</textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtReview',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
					      			</div>
					      		</div>				      			
				      		</div>		      				      		

				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Lưu lại" class="button" />
				      	</form>			      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection