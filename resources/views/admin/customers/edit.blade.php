@extends('layouts.admin')
@section('main')
@section('title','Edit Customer')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Khách hàng</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa khách hàng</div>
                <div class="panel-body">
                    <form action="{{ route('customers.update', $customer->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                            <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" name="ten" value="{{ $customer->ten }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input require type="text" name="sdt" value="{{ $customer->sdt }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input required type="text" name="dia_chi" value="{{ $customer->dia_chi }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Mail</label>
                                    <input required type="text" name="mail" value="{{ $customer->mail }}" class="form-control">
                                </div>
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ route('customers.index')}}" class="btn btn-danger">Hủy bỏ</a>
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