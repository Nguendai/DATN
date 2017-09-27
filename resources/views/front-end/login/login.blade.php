<!-- Modal -->
<div class="modal fade"  ng-controller="login" id="myModalDN" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Nav tabs -->
                   <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" id="login" href="#singin">Singin</a></li>
                        <li><a data-toggle="tab" id="singup" href="#register">Register</a></li>
                    </ul>
                <!-- <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button>
                <h4 class="modal-title" id="myModalLabel">Login</h4> -->
            </div>

            <div class="row modal-body" role="tabpanel">
                <div class="col-md-12" >
                    <div class="alert alert-danger hidden" id ='danger' >
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
                    </div>
                </div>
                <div class="col-md-12  tab-pane fade in active " id="singin" >
                    <div id="_1">
                    <form action="" name="log" id="logina">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="glyphicon glyphicon-user"></span>
                                <input type="email" id="username"  name="username" ng-model="logs.username" ng-model-options="{allowInvalid: true}" class="form-control" ng-model-options="{allowInvalid: true}" ng-maxlength="100" required placeholder="Email đăng nhập">
                                <span id="helpBlock2" style="color: red" class="help-block" ng-show=" log.username.$error.required && log.username.$touched && log.username.$dirty ">Please,Enter Name</span>
                                <span id="helpBlock2" style="color: red" class="help-block" ng-show=" log.username.$error.email && log.username.$dirty ">Error</span>
                            </div>
                            <div class="input-group">
                                <span class="glyphicon glyphicon-lock"></span>
                                <input type="password" id="password" name="password" ng-model="logs.password" ng-model-options="{allowInvalid: true}" ng-maxlength="20" ng-minlength="6" class="form-control" required placeholder="Mật khẩu">
                                <span id="helpBlock2" style="color: red" class="help-block" ng-show=" log.password.$error.required && log.password.$touched && log.password.$dirty ">Please,Enter Name</span>
                                <span id="helpBlock2" style="color: red" class="help-block" ng-show=" log.password.$error.minlength ">Error</span>
                                <span id="helpBlock2" style="color: red" class="help-block" ng-show=" log.password.$error.maxlength ">Error</span>
                            </div>
                            <div class="col-md-6 block_rad">
                                <input type="radio">Remember
                            </div>
                            <button type="button" id="login" ng-click="save()"  ng-disabled="log.$invalid" disabled="disabled" class="btn btn-primary">Login</button>
                            <p class="text-again" data-toggle="modal" data-target="#myModal1"><a href="">Quên mật khẩu</a></p>
                        </div>
                    </form>
                    <div class="col-md-6 cache">
                        <a href="{!! url('auth/facebook') !!}"><img src="{!! url('front-end/assets/image/icon/loginFB.png') !!}" alt=""></a>
                        <a href="{!! url('auth/google') !!}"><img src="{!! url('front-end/assets/image/icon/loginGG.png') !!}" alt=""></a>
                    </div>
                    </div>
                </div>
                <div class="col-md-12 tab-pane fade hidden " id="register">
                   <div id="_2">
                       <form action="" name="regis" method="post">
                           <span class="col-md-12 col-md-offset-3">
                               <div class="input-group" id="us1">
                                   <span class="glyphicon glyphicon-user"></span>
                                   <input type="text" name="name" id="name" ng-model="regi.name" ng-minlength="3" class="form-control"
                                          required placeholder="Họ và tên">
                                   <span id="helpBlock2" style="color: red"  class="help-block"
                                         ng-show=" regis.name.$error.required && regis.name.$touched && regis.name.$dirty ">Please,Enter Name</span>
                                   <span id="helpBlock2" style="color: red" class="help-block" ng-show="regis.name.$error.min  ">Name less 3 char</span>
                               </div>
                               <div class="input-group" id="us2">
                                   <span class="glyphicon glyphicon-lock"></span>
                                   <input type="password" name="password" id="password_dk" ng-model="regi.password" minlength="6" class="form-control" required
                                          placeholder="Mật khẩu ( 6- 15 ) ">
                                   <span id="helpBlock2" style="color: red"  class="help-block"
                                         ng-show=" regis.password.$error.required && regis.password.$touched && regis.password.$dirty ">Please,Enter Name</span>
                                   <span id="helpBlock2" style="color: red" class="help-block" ng-show="regis.password.$error.min  ">Name less 3 char</span>
                               </div>
                               <div class="input-group" id="us3">
                                   <span class="glyphicon glyphicon-lock"></span>
                                   <input ng-model='regi.password_verify' type="password" name='confirm_password' placeholder='confirm password' required data-password-verify="regi.password" class="form-control"
                                          placeholder="Nhập lại mật khẩu">
                                   <span id="helpBlock2" style="color: red"  class="help-block" ng-show="regis.confirm_password.$error.required  && regis.confirm_password.$touched && regis.confirm_password.$dirt ">
                                       Field required!</span>
                                    <span id="helpBlock2" style="color: red"  class="help-block" ng-show="regis.confirm_password.$error.passwordVerify">
                                       Fields are not equal!</span>

                               </div>
                               <div class="input-group" id="us4">
                                   <span class="glyphicon glyphicon-earphone"></span>
                                   <input type="number" name="phone" id="phone" class="form-control"
                                          placeholder="Nhập số điện thoại">
                               </div>
                               <div class="input-group" id="us5">
                                   <span class="glyphicon glyphicon-envelope"></span>
                                   <input type="email" name="email" id="email" ng-model="regi.email" class="form-control" required
                                          placeholder="Nhập email">
                                   <span id="helpBlock2" style="color: red"  class="help-block"
                                         ng-show=" regis.email.$error.required && regis.email.$touched && regis.email.$dirty ">Please,Enter Name</span>
                                   <span id="helpBlock2" style="color: red" class="help-block" ng-show="regis.email.$error.email && regis.email.$dirty ">Error</span>
                               </div>
                               <button type="button" id="submit1" class="btn btn-primary">Register</button>
                           </div>
                       </form>
                   </div>
                </div>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal fade -->
</div>
@section('script')
    <script>
        $(document).ready(function(){

            $(".nav-tabs a").click(function(){
                $(this).tab('show');
            });
            $("#login").click(function () {
               $('#singin').removeClass('hidden');
                $('#register').addClass("hidden");
            });
            $("#singup").click(function () {
                $('#register').removeClass("hidden");
                $('#singin').addClass('hidden');
            });
        });
    </script>
    @endsection
