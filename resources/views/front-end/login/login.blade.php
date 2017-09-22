<!-- Modal -->
<div class="modal fade" id="myModalDN" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></button>
                <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>
            <div class="row modal-body">
                <div class="col-md-12">
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="glyphicon glyphicon-user"></span>
                            <input type="text" class="form-control" placeholder="Tên đăng nhập">
                        </div>
                        <div class="input-group">
                            <span class="glyphicon glyphicon-lock"></span>
                            <input type="password" class="form-control" placeholder="Mật khẩu">
                        </div>
                        <div class="col-md-6 block_rad">
                            <input type="radio">Remember
                        </div>
                        <button type="button" class="btn btn-primary">Login</button>
                        <p class="text-again"><a href="">Quên mật khẩu</a></p>
                    </div>
                    <div class="col-md-6 cache">
                        <img src="{!! url('front-end/assets/image/icon/loginFB.png') !!}" alt="">
                        <img src="{!! url('front-end/assets/image/icon/loginGG.png') !!}" alt="">
                    </div>

                </div>
            </div><!-- row modal-body -->

        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal fade -->