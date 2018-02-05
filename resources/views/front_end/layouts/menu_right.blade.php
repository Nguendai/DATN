<!-- menu left -->
<div class="col-md-3">
	<ul class="nav">
		<h3 class="side-heading"><font><font  >Danh Muc</font></font></h3> 
		<?php
		$data = DB::table('categories')->select('id','name','parent_id','slug')->where('parent_id',0)->get();
		?>
		@foreach($data as $list)	
		<li class="list-group-item" id="dropdown"><a style="color: #848484;font-weight: 500;" data-toggle="collapse" href="#{{$list->slug}}"><i class="fa fa-chevron-right"></i>
			{{$list->name}} </a></li>
			<div id="{{$list->slug}}" class=" collapse">
				<?php $data2 = DB::table('categories')->select('id','name','parent_id','slug')->where('parent_id',$list->id)->get();?>
				@foreach($data2 as $list2)
				<li class="list-group-item" style="padding-left: 50px;" ><a href="{{url('loai-san-pham/'.$list2->id.'/'.$list2->slug)}}" style="color: #848484;font-weight: 500;" ><i class="fa fa-chevron-right"></i>
					{{$list2->name}} </a></li>
					@endforeach
				</div>
				@endforeach
			</ul>


			<div class="product-new">

				<!-- Product #1 Starts -->
				<h3 class="side-heading"><font><font>Sản phẩm mới</font></font></h3>
				<div class="thumbnail wow fadeInUp " data-wow-duration="1.6s" data-wow-delay="0">
					<div class="image">
						<img src="{!! url('uploads/products/'.$pro_new->images) !!}" width="300px" alt="product" class="img-responsive">
					</div>
					<div class="caption">
						<h4><a href="{!!url('chi-tiet-san-pham/'.$pro_new->id.'/'.$pro_new->slug)!!}">{{$pro_new->name}}</a></h4>
						<div class="description">
							<?php   echo substr( $pro_new->promo2,0,60).'...'; ?>
						</div>
						<div class="price">
							<span class="price-new">${{$pro_new->price}}</span>
							<span class="price-old">${{$pro_new->price + $pro_new->price*10/100}}</span>
						</div>
						@if(Auth::guest())
						<div class="cart-button button-group " ng-controller = "modal">
							<button type="button" class="btn btn-wishlist"  data-toggle="modal" data-target="#myModalDN"  data-toggle="tooltip" title="Thích">
								<i class="fa fa-heart"></i>
							</button>
							<button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
								<i class="fa fa-bar-chart-o"></i>
							</button>
							<button type="button"    data-toggle="modal" data-target="#myModalDN" class="btn btn-cart">
								Mua hàng
								<i class="fa fa-shopping-cart"></i>
							</button>
						</div>
						@else
						<div class="cart-button button-group " >
							
							<button type="button" class="btn btn-wishlist"  data-toggle="tooltip" title="Thích">
								<i style="color:#ffb400" class="fa fa-heart"></i></a>
							</button>
							
							<button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
								<i class="fa fa-bar-chart-o"></i>
							</button>
							<button type="button"  class="btn btn-cart">
								<a href="{{ url('khachhang/getcart/'.$pro_new->id) }}">Mua hàng</a>
								<i class="fa fa-shopping-cart"></i>
							</button>
						</div>
						@endif
					</div>
					<div class="politis">
						<div class="title">
							<a href="{!!url('chi-tiet-san-pham/'.$pro_new->id.'/'.$pro_new->slug)!!}"><h4>{{$pro_new->name}}</h4></a>
							<ul class="list-group">
								<li class="">Screen: {{$pro_new->screen}}</li>
								<li class="">OS: {{$pro_new->os}}</li>
								<li class="">CPU: {{$pro_new->vga}}</li>
								<li class="">RAM: {{$pro_new->ram}}</li>
								<li class="">Camera : {{$pro_new->cam1}}, Selfie:{{$pro_new->cam2}}</li>
								<li class="">ROM: {{$pro_new->storage}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="product-hot">
				<!-- Product #1 Starts -->
				<h3 class="side-heading"><font><font>Sản phẩm hot</font></font></h3>
				<div class="thumbnail wow fadeInUp " data-wow-duration="1.6s" data-wow-delay="0">
					<div class="image">
						<img src="{!! url('uploads/products/'.$best_vote->images) !!}" width="300px" alt="product" class="img-responsive">
					</div>
					<div class="caption">
						<h4><a href="{!!url('chi-tiet-san-pham/'.$best_vote->id.'/'.$best_vote->slug)!!}">{{$best_vote->name}}</a></h4>
						<div class="description">
							<?php   echo substr( $best_vote->promo2,0,60).'...'; ?>
						</div>
						<div class="price">
							<span class="price-new">${{$best_vote->price}}</span>
							<span class="price-old">${{$best_vote->price + $best_vote->price*10/100}}</span>
						</div>
						@if(Auth::guest())
						<div class="cart-button button-group " ng-controller = "modal">
							<button type="button" class="btn btn-wishlist"  data-toggle="modal" data-target="#myModalDN"  data-toggle="tooltip" title="Thích">
								<i class="fa fa-heart"></i>
							</button>
							<button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
								<i class="fa fa-bar-chart-o"></i>
							</button>
							<button type="button"    data-toggle="modal" data-target="#myModalDN" class="btn btn-cart">
								Mua hàng
								<i class="fa fa-shopping-cart"></i>
							</button>
						</div>
						@else
						<div class="cart-button button-group " >
							


							<button type="button" class="btn btn-wishlist"  data-toggle="tooltip" title="Thích">
								<i style="color:#ffb400" class="fa fa-heart"></i></a>
							</button>


							<button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
								<i class="fa fa-bar-chart-o"></i>
							</button>
							<button type="button"  class="btn btn-cart">
								<a href="{{ url('khachhang/getcart/'.$best_vote->id) }}">Mua hàng</a>
								<i class="fa fa-shopping-cart"></i>
							</button>
						</div>
						@endif
					</div>
					<div class="politis">
						<div class="title">
							<a href="{!!url('chi-tiet-san-pham/'.$best_vote->id.'/'.$best_vote->slug)!!}"><h4>{{$best_vote->name}}</h4></a>
							<ul class="list-group">
								<li class="">Screen: {{$best_vote->screen}}</li>
								<li class="">OS: {{$best_vote->os}}</li>
								<li class="">CPU: {{$best_vote->vga}}</li>
								<li class="">RAM: {{$best_vote->ram}}</li>
								<li class="">Camera : {{$best_vote->cam1}}, Selfie:{{$best_vote->cam2}}</li>
								<li class="">ROM: {{$best_vote->storage}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end menu left -->