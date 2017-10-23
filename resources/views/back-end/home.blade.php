@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
<style>
	/*.row{
		margin-left: 15px !important;
	}*/
</style>		
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Home</li>
		</ol>
	</div><!--/.row-->
	<?php
	$oder = DB::table('oders')->count('*');
	$oder_new = DB::table('oders')->where('status',0)->count('*');
	$mem = DB::table('users')->count('*');
	$pro = DB::table('products')->count('*');

	?>

	<div class="row" >
		<div class="col-lg-12">
			<h1 class="page-header">Dashboard</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-6 col-lg-3">
			<div class="panel panel-blue panel-widget ">
				<div class="row no-padding">
					<div class="col-sm-3 col-lg-5 widget-left">
						<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"/></svg>
					</div>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large">{{$oder}}</div>
						<div class="text-muted"> tổng đơn hàng</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-3">
			<div class="panel panel-red panel-widget ">
				<div class="row no-padding">
					<div class="col-sm-3 col-lg-5 widget-left">
						<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"/></svg>
					</div>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large">{{$oder_new}}</div>
						<div class="text-muted"> Đơn hàng mới</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-3">
			<div class="panel panel-orange panel-widget">
				<div class="row no-padding">
					<div class="col-sm-3 col-lg-5 widget-left">
						<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"/></svg>
					</div>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large">{{$pro}}</div>
						<div class="text-muted">Sản phẩm</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-3">
			<div class="panel panel-teal panel-widget">
				<div class="row no-padding">
					<div class="col-sm-3 col-lg-5 widget-left">
						<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
					</div>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large">{{$mem}}</div>
						<div class="text-muted">Khách hàng</div>
					</div>
				</div>
			</div>
		</div>		
	</div><!--/.row-->
	<div class="row" >
	
		<div class="col-md-12">
			<!-- Basic area chart -->
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Basic area</h5>
					<div class="heading-elements">
						<!-- <ul class="icons-list">
							<li><a data-action="collapse"></a></li>
							<li><a data-action="reload"></a></li>
							<li><a data-action="close"></a></li>
						</ul> -->
					</div>
				</div>

				<div class="panel-body">
					<div class="chart-container">
						<div class="chart has-fixed-height" id="basic_area"></div>
					</div>
				</div>
			</div>
			<!-- /basic area chart -->	
		</div>	
	</div>
	<div class="row">
		<div class="col-xs-6 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body easypiechart-panel">
					<h4>Đơn hàng mới</h4>
					<div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body easypiechart-panel">
					<h4>Đán giá mới</h4>
					<div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body easypiechart-panel">
					<h4>Khách hàng mới</h4>
					<div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body easypiechart-panel">
					<h4>Lượt truy cập</h4>
					<div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span>
					</div>
				</div>
			</div>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-8">
			<small>Coppyright 2016</small>
		</div><!--/.col-->
	</div><!--/.row-->
</div>	<!--/.main-->
<script  type="text/javascript" >
	/* ------------------------------------------------------------------------------
 *
 *  # Echarts - lines and areas
 *
 *  Lines and areas chart configurations
 *
 *  Version: 1.0
 *  Latest update: August 1, 2015
 *
 * ---------------------------------------------------------------------------- */

 $(function() {


    // Set paths
    // ------------------------------

    require.config({
    	paths: {
    		echarts: base_url+'/assets/js/plugins/visualization/echarts'
    	}
    });


    // Configuration
    // ------------------------------

    require(
    	[
    	'echarts',
    	'echarts/theme/limitless',
    	'echarts/chart/bar',
    	'echarts/chart/line'
    	],


        // Charts setup
        function (ec, limitless) {


            // Initialize charts
            // ------------------------------

            
            var basic_area = ec.init(document.getElementById('basic_area'), limitless);




            // Charts setup
            // ------------------------------

            //
            // Basic lines options
            //






            //
            // Basic area options
            //

            basic_area_options = {

                // Setup grid
                grid: {
                	x: 40,
                	x2: 20,
                	y: 35,
                	y2: 25
                },

                // Add tooltip
                tooltip: {
                	trigger: 'axis'
                },

                // Add legend
                legend: {
                	data: ['New orders', 'In progress', 'Closed deals']
                },


                // Enable drag recalculate
                calculable: true,

                // Horizontal axis
                xAxis: [{
                	type: 'category',
                	boundaryGap: false,
                	data: [
                	'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
                	]
                }],

                // Vertical axis
                yAxis: [{
                	type: 'value'
                }],

                // Add series
                series: [
                {
                	name: 'Closed deals',
                	type: 'line',
                	smooth: true,
                	itemStyle: {normal: {areaStyle: {type: 'default'}}},
                	data: [10, 12, 21, 54, 260, 830, 710]
                },
                {
                	name: 'In progress',
                	type: 'line',
                	smooth: true,
                	itemStyle: {normal: {areaStyle: {type: 'default'}}},
                	data: [30, 182, 434, 791, 390, 30, 10]
                },
                {
                	name: 'New orders',
                	type: 'line',
                	smooth: true,
                	itemStyle: {normal: {areaStyle: {type: 'default'}}},
                	data: [1320, 1132, 601, 234, 120, 90, 20]
                }
                ]
            };




            //
            // Reversed value axis options
            //



            // Apply options
            // ------------------------------

            
            basic_area.setOption(basic_area_options);
            


            // Resize charts
            // ------------------------------

            window.onresize = function () {
            	setTimeout(function () {

            		basic_area.resize();

            	}, 200);
            }
        }
        );
});

</script>
@endsection


