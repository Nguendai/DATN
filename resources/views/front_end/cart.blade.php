@extends('front_end.layouts.master')
@section('content')
<!-- conten -->
<div id="main-container" class="container">
	<div class="row">
		@include('front_end.layouts.menu_right')
				<!--  main-cart -->
				<div class="col-md-9">
					<ol class="breadcrumb">
						<li><a href="#"><font><font>Home</font></font></a></li>
						<li class="active"><font><font class="">Cart</font></font></li>
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
										<a href="chi-tiet-san-pham-sl/{{$data->id}}">{{$data->name}}</a>
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
							<form class="form-horizontal" action="khachhang/send" method="post" accept-charset="utf-8">
								<div class="form-group">
									<label for="inputFname" class="col-sm-3 control-label">First Name :</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="name" id="inputFname" placeholder="First Name"  required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputLname" class="col-sm-3 control-label">Last Name :</label>
									<div class="col-sm-6">
										<input type="text" class="form-control"  id="inputLname" placeholder="Last Name" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-sm-3 control-label">Email :</label>
									<div class="col-sm-6">
										<input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPhone" class="col-sm-3 control-label">Phone :</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="phone" id="inputPhone" placeholder="Phone" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputAddress1" class="col-sm-3 control-label">Address :</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="address" id="inputAddress" placeholder="Address" required>
									</div>
								</div>
								 @if(Auth::guest())
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
                                            <button data-toggle="modal" data-target="#myModalDN" class="btn btn-warning">
                                                Pay Shopping
                                            </button>
                                        </div>
								</div>
								@else
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-warning">
                                                Pay Shopping
                                            </button>
                                        </div>
								</div>
								@endif
							</form>
					
					<!-- Form Ends -->
				</div>
			</div>
		</div>
	</div>

</div>
<!--end conten-->
@endsection