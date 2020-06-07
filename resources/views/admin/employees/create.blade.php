@extends('layouts.admin')
@section('title', 'Add Employee')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Nhân viên</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Thêm nhân viên</div>
                <div class="panel-body">
                    <form method="post" action="{{ route('employees.index') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Tên nhân viên</label>
                                    <input require type="text" name="ten" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ngày sinh</label>
                                    <input required type="text" name="ngay_sinh" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input require type="text" name="dia_chi" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input required type="text" name="sdt" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tài khoản</label>
                                    <input required type="text" name="tai_khoan" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input required type="password" name="mat_khau" class="form-control">
                                </div>
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ route('employees.index')}}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
@endsection
<!-- <form method="POST" action="{{ route('employees.store')}}"> -->
        <!-- {{ csrf_field() }}
        <label>{{ trans('employee.label.ten')}}</label></br>
        <input name="ten"></br>

        @if ($errors->has('ten'))
        <span class="help-block">
            <strong>{{ $errors->first('ten')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('employee.label.ngay_sinh')}}</label></br>
        <input name="ngay_sinh"></br>

        @if ($errors->has('ngay_sinh'))
        <span class="help-block">
            <strong>{{ $errors->first('ngay_sinh')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('employee.label.dia_chi')}}</label></br>
        <input name="dia_chi"></br>

        <label>{{ trans('employee.label.sdt')}}</label></br>
        <input name="sdt"></br>

        <label>{{ trans('employee.label.tai_khoan')}}</label></br>
        <input name="tai_khoan"></br>

        @if ($errors->has('tai_khoan'))
        <span class="help-block">
            <strong>{{ $errors->first('tai_khoan')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('employee.label.mat_khau')}}</label></br>
        <input name="mat_khau"></br>
        <button>Submit</button>
    </form> -->