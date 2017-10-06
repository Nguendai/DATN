
<div class="modal fade" id="myModalDK" ng-controller="login"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button>
            <h4 class="modal-title" id="myModalLabel">Register</h4>
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
                               <input type="text" name="name" id="name" ng-model="regi.name" ng-minlength="6" class="form-control"
                               required placeholder="Họ và tên">
                               <span id="helpBlock2" style="color: red"  class="help-block"
                               ng-show=" regis.name.$error.required && regis.name.$touched && regis.name.$dirty ">Please,Enter Name</span>
                               <span id="helpBlock2" style="color: red" class="help-block" ng-show="regis.name.$error.minlength  ">Name less 6 char</span>
                           </div>
                           <div class="input-group" id="us2">
                               <span class="glyphicon glyphicon-lock"></span>
                               <input type="password" name="password" id="password_dk" ng-model="regi.password" minlength="6" class="form-control" required
                               placeholder="Mật khẩu ( 6- 15 ) ">
                               <span id="helpBlock2" style="color: red"  class="help-block"
                               ng-show=" regis.password.$error.required && regis.password.$touched && regis.password.$dirty ">Please,Enter Password</span>
                               <span id="helpBlock2" style="color: red" class="help-block" ng-show="regis.password.$error.minlength  ">Name less 6 char</span>
                           </div>
                           <div class="input-group" id="us3">
                               <span class="glyphicon glyphicon-lock"></span>
                               <input type="password" id="password_c" name="password_c" class="form-control" ng-model="regi.password_c" placeholder="confirm password" valid-password-c="regi.password" required />
                               <span id="helpBlock2" style="color: red"  class="help-block" ng-show="regis.password_c.$error.required  && regis.password_c.$touched && regis.password_c.$dirty ">
                               Password required!</span>
                               <span id="helpBlock2" style="color: red"  class="help-block" ng-show="regis.password_c.$error.noMatch">
                               Fields are not equal!</span>

                           </div>
                           <div class="input-group" id="us4">
                               <span class="glyphicon glyphicon-earphone"></span>
                               <input type="number" name="phone" id="phone"  ng-model="regi.phone"  class="form-control"
                               placeholder="Nhập số điện thoại" maxlength="12" required>
                               <span id="helpBlock2" style="color: red"  class="help-block"
                               ng-show=" regis.phone.$error.required && regis.phone.$touched && regis.phone.$dirty ">Please,Enter Phone</span>
                               <span id="helpBlock2" style="color: red" class="help-block" ng-show="regis.phone.$error.number ">Not valid number!</span>               
                           </div>
                           <div class="input-group" id="us5">
                               <span class="glyphicon glyphicon-envelope"></span>
                               <input type="email" name="email" id="email" ng-model="regi.email" class="form-control" required
                               placeholder="Please, Enter email">
                               <span id="helpBlock2" style="color: red"  class="help-block"
                               ng-show=" regis.email.$error.required && regis.email.$touched && regis.email.$dirty ">Please,Enter Email!</span>
                               <span id="helpBlock2" style="color: red" class="help-block" ng-show="regis.email.$error.email ">Not valid Email!</span>
                           </div>
                           <button type="button" id="submit1"  ng-click = "register()" ng-disabled="regis.$invalid" class="btn btn-primary">Register</button>
                       </div>
                   </form>
               </div>
           </div>
       </div><!-- modal-content -->
   </div><!-- modal-dialog -->
</div><!-- modal fade -->