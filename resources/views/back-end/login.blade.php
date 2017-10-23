<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin </title>
    <!-- Custom CSS -->
    <!-- <link href="{!! url('asset/sb-admin-2.css') !!}" rel="stylesheet"> -->
    <link href="{!! url('asset/css/bootstrap.min.css') !!}" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="">
            </div>
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Đăng nhập</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="{{ url('admin/login') }}" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Mật khẩu" name="password" type="password"
                                       value="">
                            </div>
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-lg btn-success btn-block">Đăng nhập</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->

</body>

</html>
