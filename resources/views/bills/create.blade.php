<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ route('bills.store')}}">
        {{ csrf_field() }}
        <label>{{ trans('bill.label.customer_id')}}</label></br>
        <input name="customer_id"></br>

        @if ($errors->has('customer_id'))
        <span class="help-block">
            <strong>{{ $errors->first('customer_id')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('bill.label.ngaylap_hd')}}</label></br>
        <input name="ngaylap_hd"></br>

        @if ($errors->has('ngaylap_hd'))
        <span class="help-block">
            <strong>{{ $errors->first('ngaylap_hd')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('bill.label.noi_nhan_hang')}}</label></br>
        <input name="noi_nhan_hang"></br>

        @if ($errors->has('noi_nhan_hang'))
        <span class="help-block">
            <strong>{{ $errors->first('noi_nhan_hang')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('bill.label.tong_tien')}}</label></br>
        <input name="tong_tien"></br>

        @if ($errors->has('tong_tien'))
        <span class="help-block">
            <strong>{{ $errors->first('tong_tien')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('bill.label.ghi_chu')}}</label></br>
        <input name="ghi_chu"></br>

        @if ($errors->has('ghi_chu'))
        <span class="help-block">
            <strong>{{ $errors->first('ghi_chu')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('bill.label.employee_id')}}</label></br>
        <input name="employee_id"></br>

        @if ($errors->has('employee_id'))
        <span class="help-block">
            <strong>{{ $errors->first('employee_id')}}</strong></br>
        </span>
        @endif

        <button>Submit</button>
    </form>

</body>

</html>