@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Shops</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Thêm mới cửa hàng:</small></h1>
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
							        <?php MenuMulti($data,0,$str='---| ',old('sltCate')); ?>
					      		</select>
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Tên Cửa hàng</label>
				      			<input type="text" name="txtname" id="inputTxtname" class="form-control" value="{{ old('txtname') }}"  >
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Địa chỉ</label>
				      			<input type="text" name="address" id="inputTxtintro" class="form-control" value="{{ old('address') }}" required="required">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Thông tin</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Phone : <input type="text" name="phone" id="inputtxtpromo1" value="{{ old('txtpromo1') }}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Email : <input type="text" name="email" id="inputtxtpromo2" value="{{ old('txtpromo2') }}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Website : <input type="text" name="website" id="inputtxtpromo3" value="{{ old('website') }}" class="form-control" >
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">				      			
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Hình ảnh : <input type="file" name="txtimg"  id="inputtxtimg" value="{{ old('txtimg') }}" class="form-control" required="required">
					      			</div>
					      			
					      		</div>				      			
				      		</div>
				      		
				      		<div class="form-group">
				      			<label for="input-id">Đánh giá chi tiết sản phẩm</label>
				      			<div class="row">
					      			@for( $i=1; $i<=5; $i++)
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Hình ảnh {!!$i!!} : <input type="file" name="txtdetail_img[]" value="{{ old('txtdetail_img[]') }}"  id="inputtxtdetail_img" class="form-control">
					      			</div>
					      			@endfor
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Đánh giá chi tiết sản phẩm</label>
				      			<div class="row">					      			
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id">Tóm tắt đánh giá</label>
					      				<textarea name="discription" id="inputTxtre_Intro" class="form-control" value="{{ old('discription') }}" rows="2" required="required"></textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('discription',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
					      			</div>
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