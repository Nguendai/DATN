
<div class="modal fade" id="myModalDK" ng-controller="login"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button>
            <h4 class="modal-title" id="myModalLabel">Đăng ký</h4>
        </div>
        <div class="row modal-body">
            <div class="col-md-12 " id ="singup-error">

            </div>
            <div class="col-md-12" >
               <div id="_2">
                   <form action="" name="regis" id="regis" method="post">
                       <span class="col-md-12 col-md-offset-3">
                           <div class="input-group" id="us1">
                               <span class="glyphicon glyphicon-user"></span>
                               <input type="text" name="name" id="name" ng-model="regi.name" ng-minlength="6" class="form-control" ng-maxlength="20"
                               required placeholder="Họ và tên">
                               <span id="helpBlock2" style="color: red"  class="help-block"
                               ng-show=" regis.name.$error.required && regis.name.$touched && regis.name.$dirty ">Nhập tên</span>
                               <span id="helpBlock2" style="color: red" class="help-block" ng-show="regis.name.$error.minlength  ">Tên 6-20 ký tự</span>
                               <span id="helpBlock2" style="color: red" class="help-block" ng-show="regis.name.$error.maxlength  ">Tên 6-20 ký tự</span>
                           </div>
                           <div class="input-group" id="us2">
                               <span class="glyphicon glyphicon-lock"></span>
                               <input type="password" name="password" id="password_dk" ng-model="regi.password" minlength="6" maxlength="6" class="form-control" required
                               placeholder="Mật khẩu ( 6- 15 ) ">
                               <span id="helpBlock2" style="color: red"  class="help-block"
                               ng-show=" regis.password.$error.required && regis.password.$touched && regis.password.$dirty ">Password required!</span>
                               <span id="helpBlock2" style="color: red" class="help-block" ng-show="regis.password.$error.minlength  ">Password 6-15 kí tự</span>
                               <span id="helpBlock2" style="color: red" class="help-block" ng-show="regis.password.$error.maxlength  ">Password 6-15 kí tự</span>
                           </div>
                           <div class="input-group" id="us3">
                               <span class="glyphicon glyphicon-lock"></span>
                               <input type="password" id="password_c" name="password_c" class="form-control" ng-model="regi.password_c" placeholder="Mật khẩu ( 6- 15 ) " valid-password-c="regi.password" required />
                               <span id="helpBlock2" style="color: red"  class="help-block" ng-show="regis.password_c.$error.required  && regis.password_c.$touched && regis.password_c.$dirty ">
                               Password required!</span>
                               <span id="helpBlock2" style="color: red"  class="help-block" ng-show="regis.password_c.$error.noMatch">
                               Password không đúng</span>

                           </div>
                           <div class="input-group" id="us4">
                               <span class="glyphicon glyphicon-earphone"></span>
                               <input type="number" name="phone" id="phone"  ng-model="regi.phone"  class="form-control"
                               placeholder="Nhập số điện thoại" maxlength="12" required>
                               <span id="helpBlock2" style="color: red"  class="help-block"
                               ng-show=" regis.phone.$error.required && regis.phone.$touched && regis.phone.$dirty "> Phone required!</span>
                               <span id="helpBlock2" style="color: red" class="help-block" ng-show="regis.phone.$error.number ">Phone không đúng</span>               
                           </div>
                           <div class="input-group" id="us5">
                               <span class="glyphicon glyphicon-envelope"></span>
                               <input type="email" name="email" id="email" ng-model="regi.email" class="form-control" required
                               placeholder="Nhập Email">
                               <span id="helpBlock2" style="color: red"  class="help-block"
                               ng-show=" regis.email.$error.required && regis.email.$touched && regis.email.$dirty ">Email required!</span>
                               <span id="helpBlock2" style="color: red" class="help-block" ng-show="regis.email.$error.email "> Email không đúng!</span>
                           </div>
                           <button type="button" id="submit1"  ng-click = "register()" ng-disabled="regis.$invalid" class="btn btn-primary">Đăng ký</button>
                       </div>
                   </form>
               </div>
           </div>
       </div><!-- modal-content -->
   </div><!-- modal-dialog -->
</div><!-- modal fade -->