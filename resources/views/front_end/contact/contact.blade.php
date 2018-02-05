@extends('front_end.layouts.noslide')
@section('content')
<div id="main-container" class="container">
	<div class="row">
		<section class="contact-list col-md-12 container">
			<!-- Breadcrumb Starts -->
			<ol class="breadcrumb">
				<li><a href="{{ url('/') }}"><font><font>Home</font></font></a></li>

				<li class="active"><font><font class=""></font>Contact</font></li>
			</ol>
				<div class="contact_form  col-lg-5 col-md-6 col-sm-12 col-xs-12">
					<h2>Contact us</h2>
					<form >
						<div class="form-group">
							<label for="usr">Name:</label>
							<input type="text" class="form-control" id="usr">
						</div>
						<div class="form-group">
							<label for="pwd">Email:</label>
							<input type="email" class="form-control" id="pwd">
						</div>
						<div class="form-group">
							<label for="pwd">Phone:</label>
							<input type="text" class="form-control" id="pwd">
						</div>
						<div class="form-group">
							<label for="pwd">Content:</label>
							<textarea name="txttext"  cols="30" rows="2"  placeholder="Can I help you?" class="form-control" required ></textarea>
						</div>
						<button type="submit" class="btn btn-primary pull-right">Send</button>
					</form>
			</div>
			<div class="contact_form  col-lg-5 col-md-6 col-sm-12 col-xs-12">
				 <div class="address">
				 	<div class="col-md-6">
				 		<p>
				 			<strong>Ha Noi</strong>
				 		</p>
				 		<p><b>Địa chỉ 1:</b> 119 - 121 Thái Thịnh, Đống Đa</p>
				 		<p><b>Điện thoại: </b>0917.999.919</p>
				 		<br>
				 		<p><b>Địa chỉ 2:</b> 208 Xã Đàn , Đống Đa</p>
				 		<p><b>Điện thoại: </b>0917.999.919</p>
				 	</div>
				 	<div class="col-md-6">
				 		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6925279073907!2d105.82395761417945!3d21.004958793967962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac80d8971297%3A0x86601fde6d3d4884!2zxJDhuqFpIGjhu41jIHRodeG7tyBs4bujaQ!5e0!3m2!1svi!2s!4v1487812759194"
                            width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				 	</div>
                   
                </div>
			</div>
		</section>
	</div>
</div>
@endsection