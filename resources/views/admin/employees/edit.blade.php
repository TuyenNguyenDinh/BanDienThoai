@extends('layouts.admin')
@section('title', 'Edit employee')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Nhân viên</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa nhân viên</div>
                <div class="panel-body">
                    <form action="{{ route('employees.update', $employee->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                            <div class="form-group">
                                    <label>Tên nhân viên</label>
                                    <input type="text" name="ten" value="{{ $employee->ten }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ngày sinh</label>
                                    <input require type="text" name="ngay_sinh" value="{{ $employee->ngay_sinh }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input required type="text" name="dia_chi" value="{{ $employee->dia_chi }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input required type="text" name="sdt" value="{{ $employee->sdt }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tài khoản</label>
                                    <input require type="text" name="tai_khoan" value="{{ $employee->tai_khoan }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input require type="password" name="mat_khau" value="{{ $employee->mat_khau }}" class="form-control">
                                </div>
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ route('employees.index')}}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                        </>
                        <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->   
@endsection