@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Hãng xe</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Sửa hãng xe</small></h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body">
						@include('errors.note')
						<form action="" method="POST" role="form" enctype="multipart/form-data">
				      		{{ csrf_field() }}
				      		<div class="form-group">
				      			<label for="input-id">Tên hãng xe</label>
				      			<input type="text" name="txtCateName" id="inputTxtCateName" class="form-control" value="{!! old('txtCateName', isset($data->name) ? $data->name : null)!!}" required="required">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Tên nước</label>
				      			<input type="number" name="country_id" id="inputTxtCateName" class="form-control" value="{!! old('country_id', isset($data->country_id) ? $data->country_id : null)!!}" required="required">
				      		</div>
				      		<input  id ="img"  type="file" name="txtimg" value="" onchange="changeImg(this)"  >
				      		<div class="form-group">
				      			<label for="input-id">Hình ảnh</label>
				      		 	<img id="avatar" class="thumbnail" width="300px"
                             	src="{!!url('uploads/manufacturers/'.$data->image_data)!!}">
					      	</div>
				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Sửa hãng xe" class="button" />
				      	</form>			     
				      					      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
	<script type="text/javascript">
    function changeImg(input) {
        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            console.log(reader);
            //Sự kiện file đã được load vào website
            reader.onload = function (e) {
                //Thay đổi đường dẫn ảnh
                $('#avatar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function () {
        $('#avatar').click(function () {
            $('#img').click();
        });
    });
</script>
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection