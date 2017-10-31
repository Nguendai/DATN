<!-- Modal -->
<div class="modal fade" ng-controller="login" id="myModalDN" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button>
            <h4 class="modal-title" id="myModalLabel">Login</h4>
        </div>
        <div class="row modal-body">
            <div class="col-md-12" id="danger-login">
                
            </div>
            <div class="col-md-12" >
                <div id="_1">
                    <form action="" name="log" id="logina">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="glyphicon glyphicon-user"></span>
                                <input type="email" id="username"  name="username" ng-model="logs.username" ng-model-options="{allowInvalid: true}" class="form-control" ng-model-options="{allowInvalid: true}" ng-maxlength="100" required placeholder="Email đăng nhập">
                                <span id="helpBlock2" style="color: red" class="help-block" ng-show=" log.username.$error.required && log.username.$touched && log.username.$dirty ">Email không được để trống</span>
                                <span id="helpBlock2" style="color: red" class="help-block" ng-show=" log.username.$error.email && log.username.$dirty ">Email không đúng !</span>
                            </div>
                            <div class="input-group">
                                <span class="glyphicon glyphicon-lock"></span>
                                <input type="password" id="password" name="password" ng-model="logs.password" ng-model-options="{allowInvalid: true}" ng-maxlength="20" ng-minlength="6" class="form-control" required placeholder="Mật khẩu">
                                <span id="helpBlock2" style="color: red" class="help-block" ng-show=" log.password.$error.required && log.password.$touched && log.password.$dirty ">Please,Enter Pasword</span>
                                <span id="helpBlock2" style="color: red" class="help-block" ng-show=" log.password.$error.minlength ">Password 6-20 kí tự</span>
                                <span id="helpBlock2" style="color: red" class="help-block" ng-show=" log.password.$error.maxlength ">Password 6-20 kí tự</span>
                            </div>
                            <button type="button" id="login" ng-click="save()"  ng-disabled="log.$invalid"  class="btn btn-primary">Login</button>
                            <p class="text-again"><a href="khachhang/resetPassword" style="color: blue;">Quên mật khẩu</a></p>
                        </div>
                    </form>
                    <div class="col-md-6 cache">
                        <a href="{!! url('auth/facebook') !!}"><img src="{!! url('front/img/loginFB.png') !!}" alt=""></a>
                        <a href="{!! url('auth/google') !!}"><img src="{!! url('front/img/loginGG.png') !!}" alt=""></a>
                    </div>
                </div>
            </div>
        </div><!-- row modal-body -->

    </div><!-- modal-content -->
</div><!-- modal-dialog -->
                    </div><!-- modal fade -->