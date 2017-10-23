<!-- left menu - menu ben  trai	 -->
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<div class="form-group ">
			</div>
		<ul class="nav menu ">
			<li class="active"><a href="{!!url('admin/home/')!!}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li id="danhmuc"><a href="{!!url('admin/danhmuc')!!}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Danh mục</a></li>

			<li id="sanpham"><a href="{!!url('admin/sanpham/')!!}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Sản phẩm </a></li>
			<li><a href="{!!url('admin/donhang/new')!!}"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"/></svg> Đơn hàng mới</a></li>
			{{-- <li><a href="{!!url('admin/nhaphang')!!}"><svg class="glyph stroked download"><use xlink:href="#stroked-download"/></svg> Nhập hàng</a></li> --}}

			<li><a href="{!!url('admin/donhang')!!}"><svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"/></svg> Đơn đặt hàng</a></li>
			@if(Auth::guard('admin_user')->user()->level == 1)
			<li><a href="{!!url('admin/khachhang')!!}"><svg class="glyph stroked app-window"><use xlink:href="#stroked-line-graph"></use></svg>  Khách hàng</a></li>
			@endif

			<li><a href="{!!url('admin/nhanvien')!!}"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg> Nhân Viên</a></li>

		</ul>

	</div><!--/.sidebar-->
<!-- /left menu - menu ben  trai	 -->