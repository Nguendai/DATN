<script src="{!!url('asset/js/bootstrap.min.js')!!}"></script>
<script src="{!!url('asset/js/jquery-1.11.1.min.js')!!}"></script>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.js"></script> -->
	<script src="{!!url('asset/js/chart.min.js')!!}"></script>
	<script src="{!!url('asset/js/chart-data.js')!!}"></script>
	<script src="{!!url('asset/js/easypiechart.js')!!}"></script>
	<script src="{!!url('asset/js/easypiechart-data.js')!!}"></script>
	<script src="{!!url('asset/js/bootstrap-datepicker.js')!!}"></script>\
@include('back-end.layouts.contact')
	<script>
		function xacnhan(msg) {
			if (window.confirm(msg)) {
				return true;
			}
			return false;
		}
		$(document).ready(function () {
			setTimeout(function () {
				$('.tiishop_alert').slideUp('2000');
			},3000);
		});
		$('#calendar').datepicker({
		});

		// !function ($) {
		//     $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		//         $(this).find('em:first').toggleClass("glyphicon-minus");      
		//     }); 
		//     $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		// }(window.jQuery);

		// $(window).on('resize', function () {
		//   if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		// })
		// $(window).on('resize', function () {
		//   if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		// })
    	$(document).ready(function(){
         $('.__click').on('click',function () {
            $('#contact-us-main').show();
            $(this).hide();
            $('.__close').show();
        });
        $('.__close').on('click',function () {
            $('#contact-us-main').hide();
            $(this).hide();
            $('.__click').show();
        });
    	});
	</script>	
</body>

</html>
