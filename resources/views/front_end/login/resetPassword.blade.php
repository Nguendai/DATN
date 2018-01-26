@extends('front_end.layouts.noslide')
@section('content')
<div id="main-container" class="container">
	<div class="row">
		<section class="contact-list col-md-12 container">
			<ol class="breadcrumb">
				<li><a href="{{ url('/') }}"><font><font>Home</font></font></a></li>

				<li class="active"><font><font class=""></font>Reset Password</font></li>
			</ol>
			@include('errors.note')
			<div class="resetPass">
				<form class="" action="khachhang/resetPassword" method="post" accept-charset="utf-8" >
					   {{ csrf_field() }}
					<div class="form-group">
						<label for="pwd">Email:</label>
						<input type="email" name="email" class="form-control" id="pwd">
					</div>
					<button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"> </i>Send</button>
				</form>
			</div>
		</section>
	</div>
</div>

@stop