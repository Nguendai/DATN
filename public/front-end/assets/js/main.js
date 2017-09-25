$(document).ready(function () {
	$(".email-signup").hide();
	$("#signup-box-link").click(function(){
		$(".email-login").fadeOut(100);
		$(".email-signup").delay(100).fadeIn(100);
		$("#login-box-link").removeClass("active");
		$("#signup-box-link").addClass("active");
	});

	$("#login-box-link").click(function(){
		$(".email-login").delay(100).fadeIn(100);;
		$(".email-signup").fadeOut(100);
		$("#login-box-link").addClass("active");
		$("#signup-box-link").removeClass("active");
	});

	$(".update-cart").on('click',function () {
		var rowid=$(this).attr('id');
		var qty =$(this).parent().parent().find('.qty').val();
		var token =$("input[name='_token']").val();
		$.ajax({
			url:'cap-nhat/'+rowid+'/'+qty,
			type:'GET',
			cache:'FALSE',
			data:{"_token":token,"id":rowid,"qty":qty},
			success:function (data) {
				if (data=="ok"){
					window.location='gio-hang';
				}
			}
		});
	});
});

var app = angular.module('angularAqua', ['ngAnimate','ngRoute', 'ngSanitize']);
app.controller('navController', function ($scope) {
    $scope.isActive = false;
    $scope.activeButton = function() {
        $scope.isActive = !$scope.isActive;
    }
});
app.controller('login',['$scope','$http',function ($scope,$http) {
	
    $scope.save = function(){
    	console.log($scope.logs.username);
        var data = new FormData();
        $scope.logs.username = $scope.logs.username?$scope.logs.username:'';
        $scope.logs.password = $scope.logs.password?$scope.logs.password:'';
		data.append('username',$scope.logs.username);
		data.append('password',$scope.logs.password);
        $http({
            method:'POST',
            data:data,
            url:'http://localhost:8000/khachhang/login',
            headers :{'Content-Type':undefined},
        }).then(function(reponse){
        	if(reponse['data']['code'] == 100){
        		location.reload();
        	}else{
        		$('#danger').removeClass('hidden');
        	}
        },function(error){

        });
	}
    // $scope.log.$invalid=true;

}]);
app.controller('modal',['$scope','$http',function ($scope,$http) {
	$scope.modal = function(){
		$('#logina')[0].reset();;
		$('#danger').addClass('hidden');
	}
}]);
