$(document).ready(function () {
    $(window).scroll(function(event) {

        vitricuon = $(window).scrollTop();
        if(vitricuon > 600)
        {
            $('.mobiphone ').addClass('show');

        }else if(vitricuon < 500){
            $('.mobiphone ').removeClass('show');
        }
        if (vitricuon > 350) {
            $("#scroll").show();
        }
        else {
            $("#scroll").hide();
        }
        if(vitricuon > 1800)
        {
            $('.laptop ').addClass('show');

        }else if(vitricuon < 1800){
            $('.laptop ').removeClass('show');
        }
        });
        $("#scroll").on("click", function () {
            $("body,html").animate({scrollTop: 0}, 500);
        });
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
var app = angular.module('angularAqua', []);
app.controller('navController', function ($scope) {
    $scope.isActive = false;
    $scope.activeButton = function() {
        $scope.isActive = !$scope.isActive;
    }
});
app.controller('login',['$scope','$http',function ($scope,$http) {
    
    $scope.save = function(){
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
                var a ='<div class="alert alert-danger">'+
                    '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
                    '<strong>Error!</strong>Tài khoản mật khẩu không hợp lệ</div>'
                $('#danger-login').html(a);
            }
            console.log(reponse);
        },function(error){
            
        });
    }
    $scope.register = function(){
        var data = new FormData();  
        $scope.regi.name = $scope.regi.name?$scope.regi.name:'';
        $scope.regi.password = $scope.regi.password?$scope.regi.password:'';
        $scope.regi.password_c = $scope.regi.password_c?$scope.regi.password_c:'';
        $scope.regi.phone = $scope.regi.phone?$scope.regi.phone:'';
        $scope.regi.email = $scope.regi.email?$scope.regi.email:'';
        data.append('name',$scope.regi.name);
        data.append('password',$scope.regi.password);
        data.append('password_c',$scope.regi.password_c);
        data.append('phone',$scope.regi.phone);
        data.append('email',$scope.regi.email);
        $http({
            method:'POST',
            data:data,
            url:'http://localhost:8000/khachhang/signup',
            headers :{'Content-Type':undefined},
        }).then(function(response){
           if(response['data']['code'] == 100){
                // $('#myModalDK').modal('hide');
                $('#singup-error').html('');
                location.reload();
           }
        },function(error){
            var b;
           if(error.data.name){
                b =  error.data.name;
           }else{
             b = error.data.email
           }
            var a ='<div class="alert alert-danger">'+
                    '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
                    '<strong>Danger!</strong>'+b+'</div>'
            $('#singup-error').html(a);
        });
    }
    // $scope.log.$invalid=true;

}]);
app.controller('modal',['$scope','$http',function ($scope,$http) {
    $scope.modal1  = function(state){
        $scope.state = state;
        switch(state) {
            case "login" :
                $('#logina')[0].reset();
                $('#danger').addClass('hidden');
                break;
            case "register" :
                $('#regis')[0].reset();
                $('#danger').addClass('hidden');
                break;
        };
        
    }
}]);
app.directive('validPasswordC', function() {
  return {
    require: 'ngModel',
    scope: {

      reference: '=validPasswordC'

    },
    link: function(scope, elm, attrs, ctrl) {
      ctrl.$parsers.unshift(function(viewValue, $scope) {

        var noMatch = viewValue != scope.reference
        ctrl.$setValidity('noMatch', !noMatch);
        return (noMatch)?noMatch:!noMatch;
      });

      scope.$watch("reference", function(value) {;
        ctrl.$setValidity('noMatch', value === ctrl.$viewValue);

      });
    }
  }
});

 