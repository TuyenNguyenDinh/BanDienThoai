@extends('layouts.admin');
@section('title','Add Customer')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Thêm khách hàng</div>
                <div class="panel-body">
                    <form method="post" action="{{ route('customers.index') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Tên khách hàng</label>
                                    <input require type="text" name="ten" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input required type="number" name="sdt" class="form-control">
                                    @if ($errors->has('ten'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ten')}}</strong></br>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input require type="text" name="dia_chi" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Mail</label>
                                    <input required type="text" name="mail" class="form-control">
                                </div>
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ route('customers.index')}}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- 
    <form method="POST" action="{{ route('customers.store')}}">
        {{ csrf_field() }}
        <label>{{ trans('customer.label.ten')}}</label></br>
        <input name="ten"></br>
        @if ($errors->has('ten'))
        <span class="help-block">
            <strong>{{ $errors->first('ten')}}</strong></br>
        </span>
        @endif
        <label>{{ trans('customer.label.sdt')}}</label></br>
        <input name="sdt"></br>

        <label>{{ trans('customer.label.dia_chi')}}</label></br>
        <input name="dia_chi"></br>

        @if ($errors->has('dia_chi'))
        <span class="help-block">
            <strong>{{ $errors->first('dia_chi')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('customer.label.mail')}}</label></br>
        <input name="mail"></br>
        <button>Submit</button>
    </form> -->