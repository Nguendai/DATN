@extends('front_end.layouts.master')
@section('content')
<!-- conten -->
<div id="main-container" class="container">
	<div class="row">
		<!-- menu left -->
		<div class="col-md-3">
			<h3 class="side-heading"><font><font>Category</font></font></h3>
			<ul class="list-group">
				<li class="list-group-item"><a href=""><i class="fa fa-chevron-right"></i>
				Iphone </a></li>
				<li class="list-group-item"><a href=""><i class="fa fa-chevron-right"></i>
				Samsung </a></li>
				<li class="list-group-item"><a href=""><i class="fa fa-chevron-right"></i>
				Xao Mi </a></li>
				<li class="list-group-item"><a href=""><i class="fa fa-chevron-right"></i>
				Oppo </a></li>
				<li class="list-group-item"><a href=""><i class="fa fa-chevron-right"></i>
				Sony </a></li>
			</ul>


			<div class="product-new">

				<!-- Product #1 Starts -->
				<h3 class="side-heading"><font><font>Product New</font></font></h3>
				<div class="thumbnail heading">
					<div class="image">
						<img src="{{ url('front/img/ip_7s.png') }}" alt="product" class="img-responsive">
					</div>
					<div class="caption">
						<h4><a href="">Iphone 7 plus 256G</a></h4>
						<div class="description">
							Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
						</div>
						<div class="moive">
							New
						</div>
						<div class="price">
							<span class="price-new">$199.50</span>
							<span class="price-old">$249.50</span>
						</div>
						<div class="cart-button button-group">
							<button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
								<i class="fa fa-heart"></i>
							</button>
							<button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
								<i class="fa fa-bar-chart-o"></i>
							</button>
							<button type="button" class="btn btn-cart">
								Add to cart
								<i class="fa fa-shopping-cart"></i>
							</button>
						</div>
					</div>
				</div> <!-- Product #1 Ends -->

			</div>
			<div class="product-hot">

				<!-- Product #1 Starts -->
				<h3 class="side-heading"><font><font>BESTSELLERS</font></font></h3>
				<div class="thumbnail heading">
					<div class="image">
						<img src="{{ url('front/img/ip_7s.png') }}" alt="product" class="img-responsive">
					</div>
					<div class="caption">
						<h4><a href="">Iphone 7 plus 256G</a></h4>
						<div class="description">
							Cơ hội trúng xe SH150i 2017 khi mua iPhone tại Hà Nội, Đà Nẵng .....
						</div>
						<div class="hot">
							Bán chạy
						</div>
						<div class="price">
							<span class="price-new">$199.50</span>
							<span class="price-old">$249.50</span>
						</div>
						<div class="cart-button button-group">
							<button type="button" class="btn btn-wishlist" data-toggle="tooltip" title="Thích">
								<i class="fa fa-heart"></i>
							</button>
							<button type="button" class="btn btn-compare" data-toggle="tooltip" title="Biểu đồ">
								<i class="fa fa-bar-chart-o"></i>
							</button>
							<button type="button" class="btn btn-cart">
								Add to cart
								<i class="fa fa-shopping-cart"></i>
							</button>
						</div>
					</div>
				</div> <!-- Product #1 Ends -->

			</div>
		</div><!-- end menu left -->
		<!--  main-cart -->
		<div class="col-md-9">
			<ol class="breadcrumb">
				<li><a href="#"><font><font>Home</font></font></a></li>
				<li><a href="#" class="active"><font><font class="">Cart</font></font></a></li>
				<!-- <li class="active"><font><font class="">Product</font></font></li> -->
			</ol>
			<div class="table-responsive shopping-cart-table">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td class="text-center">
								<p>Image</p> 
							</td>
							<td class="text-center">
								<p>Product Details</p>
							</td>                           
							<td class="text-center">
								<p>Quantity</p> 
							</td>
							<td class="text-center">
								<p>Price</p>
							</td>
							<td class="text-center">
								<p>Total</p>
							</td>
							<td class="text-center">
								<p>Action</p>
							</td>
						</tr>
					</thead>
					<tbody>
						@if(Cart::count() > 0)
						@foreach($content as $data)
						<tr>
							<td class="text-center">
								<a href="#">
									<img src="{{ url('uploads/products/'.$data->options->images) }}" alt="Product Name" title="Product Name" class="img-thumbnail" width="200px">
								</a>
							</td>
							<td class="text-center">
								<a href="#">{{$data->name}}</a>
							</td> 
							<form action="khachhang/update_cart/{{$data->rowId}}" method="POST" >                         
							<td class="text-center">
								<div class="input-group btn-block">
									<input type="text" name="quantity" value="{{$data->qty}}" size="1" class="form-control">
								</div>                              
							</td>
							<td class="text-center">
								 ${{$data->price}}
							</td>
							<td class="text-center">
								$<?php 
                                    $total1 = $data->qty*$data->price;
                                    echo $total1;
                                     ?>
							</td>
							<td class="text-center">
								<button type="submit" title="" class="btn btn-default tool-tip" data-original-title="Update">
									<i class="fa fa-refresh"></i>
								</button>
								<button type="button" title="" class="btn btn-default tool-tip" data-original-title="Remove">
									<a href="{!! url('khachhang/delete-item/'.$data->rowId) !!}"><i class="fa fa-times-circle"></i></a>
								</button>
							</td>
							</form> 
						</tr> 
						@endforeach                    
					</tbody>
					<tfoot>
						<tr>
							<td colspan="4" class="text-right">
								<strong>Total :</strong>
							</td>
							<td colspan="2" class="text-left">{{$subtotal}}
							</td>
						</tr>
					</tfoot>
					@endif
				</table>                
			</div>
			<div class="panel panel-smart">
				<div class="panel-heading">
					<h3 class="panel-title">
						Shipping &amp; Taxes
					</h3>
				</div>
				<div class="panel-body">
					<!-- Form Starts -->
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputFname" class="col-sm-3 control-label">First Name :</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputFname" placeholder="First Name">
							</div>
						</div>
						<div class="form-group">
							<label for="inputLname" class="col-sm-3 control-label">Last Name :</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputLname" placeholder="Last Name">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail" class="col-sm-3 control-label">Email :</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="inputEmail" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPhone" class="col-sm-3 control-label">Phone :</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputPhone" placeholder="Phone">
							</div>
						</div>
						<div class="form-group">
							<label for="inputAddress1" class="col-sm-3 control-label">Address :</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputAddress" placeholder="Address">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPostCode" class="col-sm-3 control-label">Postal Code :</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputPostCode" placeholder="Postal Code">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<button type="submit" class="btn btn-warning">
									Pay Shopping
								</button>
							</div>
						</div>
					</form>
					<!-- Form Ends -->
				</div>
			</div>
		</div>
	</div>

</div>
<!--end conten-->
@endsection