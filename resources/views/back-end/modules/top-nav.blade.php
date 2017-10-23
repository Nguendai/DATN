
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{!!url('/admin/home')!!}"><span>Trang Quản Trị</span> </a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
							 @if (isset(Auth::guard('admin_user')->user()->name) )
                                {!!Auth::guard('admin_user')->user()->name!!}
                            @endif
                            <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
						</ul>
					</li>
				</ul>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe" aria-hidden="true">Suppost</i>
							
                            <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							@foreach($data as $data )
                            <li class="abcd" dai="{{$data->id}}"><a href="#" ><i class="fa fa-btn"></i>{{$data->name}}</a></li>
                            @endforeach
						</ul>
					</li>
				</ul>
			</div>
							
		</div>
	</nav>
	@section('script')
	<script  type="text/javascript" >
		$(document).ready(function(){
			$('.abcd').click(function(){
				var a = $(this).attr('dai');
				var url = 'send/'+a;
				var html = "";
				$.ajax({
                  url: url,
                  dataType: 'json',
                  type:'get',
                  success: function(response){
                  	$('#contact-us-main').show();
                  	$('.__close').show();
                  	$('.__click').hide();
                  	 // var data = JSON.parse(response);
                  	$.each(response.data,function(key,item){
                  		$('#group_id').attr('id-group',item['group_id']);
                  		$('#name_kh').html(item['author']);
                  		html +='<p><strong>'+item['author']+'</strong>:'+item['content']+'</p>';
                  	});
                  	$('#messages').html(html);
                  	// $('#messages').append('<p><strong>'+data.author+'</strong>:'+data.content+'</p>');
               	 }
            	});
			});
		});
	</script>
	@endsection