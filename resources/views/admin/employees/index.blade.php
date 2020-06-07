@extends('layouts.admin')
@section('title','Employees')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách nhân viên</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <div class="col-lg-6 right">
                                <div style="margin-top:20px; margin-bottom:20px">
                                    <a href="{{ route('employees.create') }}" class="btn btn-primary">Thêm nhân viên</a>
                                </div>
                                <!-- add modal -->
                            </div>
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th >Tên nhân viên</th>
                                        <th >Ngày sinh</th>
                                        <th>Địa chỉ</th>
                                        <th>Số điện thoại</th>
                                        <th>Tài khoản</th>
                                        <th>Mật khẩu</th>
                                        <th width="10%">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($employees as $employee)
                                    <tr style="text-align: center;">
                                        <td>{{ $employee->id}}</td>
                                        <td>{{ $employee->ten}}</td>
                                        <td>{{ $employee->ngay_sinh}}</td>
                                        <td>{{ $employee->dia_chi}}</td>
                                        <td>{{ $employee->sdt}}</td>
                                        <td>{{ $employee->tai_khoan}}</td>
                                        <td>{{ $employee->mat_khau}}</td>
                                        <td>
                                            <div class="row action-button" style="padding-left: 10px;">
                                                <!-- edit button -->
                                                <div class="action-edit">
                                                    <p><a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a></p>
                                                </div>
                                                <!-- delete button -->
                                                <div class="action-delete">
                                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <p><input class="btn btn-danger" type="submit" value="Xóa"></p>
                                                    </form>
                                                </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
@endsection
<!-- <table>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id}}</td>
                <td>{{ $employee->ten}}</td>
                <td>{{ $employee->ngay_sinh}}</td>
                <td>{{ $employee->dia_chi}}</td>
                <td>{{ $employee->sdt}}</td>
                <td>{{ $employee->tai_khoan}}</td>
                <td>{{ $employee->mat_khau}}</td>
            </tr>
            @endforeach
        </tbody>
    </table> -->