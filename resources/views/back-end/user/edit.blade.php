@extends('back-end.layouts.master')
@section('content')
    <!-- main content - noi dung chinh trong chu -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Nhân viên</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><small>Sửa thông nhân viên</small></h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                    @include('errors.note')
                        <form action="" method="POST" role="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="input-id">Tên Khách hàng</label>
                                <input type="text" name="txtName" id="inputTxtName" class="form-control" value="{!! old('txtName', isset($user['name']) ? $user['name'] : null)!!}" required="required">
                            </div>
                            <div class="form-group">
                                <label for="input-id">Email</label>
                                <input type="email" name="txtEmail" id="inputTxtName" class="form-control" value="{!! old('txtEmail', isset($user['email']) ? $user['email'] : null)!!}" required="required" disabled>
                            </div>
                            <div class="form-group">
                                <label for="input-id">Mật khẩu</label>
                                <input type="password" name="txtPassword" id="inputTxtPassword" class="form-control"  >
                            </div>
                            <div class="form-group">
                                <label for="input-id">Xác nhận mật khẩu</label>
                                <input type="password" name="txtRePassword" id="inputTxtRePassword" class="form-control"  >
                            </div>
                            @if(Auth::guard('admin_user')->user()->level <> $id)
                                @if(Auth::guard('admin_user')->user()->level==1)
                            <div class="form-group">
                                <label for="input-id"> Chọn Quyền </label>
                                <select name="sltLevel" id="inputSltLevel" class="form-control">
                                    <option <?php if ($user['level'] == 2) echo "selected"?> value="2">-- Quản trị viên --</option>
                                    <option <?php if ($user['level'] == 3) echo "selected"?> value="3">- Nhân viên --</option>

                                </select>
                            </div>
                                    @else
                                    <div class="form-group">
                                        <label for="input-id"> Chọn Quyền </label>
                                        <select name="sltLevel" id="inputSltLevel" class="form-control" disabled>
                                            <option selected  value="3">-- Nhân viên --</option>
                                        </select>
                                    </div>
                                    @endif
                            @endif
                            <input type="submit" name="btnCateAdd" class="btn btn-primary" value="Sửa thành viên" class="button" />
                        </form>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>	<!--/.main-->
    <!-- =====================================main content - noi dung chinh trong chu -->
@endsection