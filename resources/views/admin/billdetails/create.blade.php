<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ route('billdetails.store')}}">
        {{ csrf_field() }}
        <label>{{ trans('billdetail.label.bill_id')}}</></br>
            <input name="bill_id"></br>

            @if ($errors->has('bill_id'))
            <span class="help-block">
                <strong>{{ $errors->first('bill_id')}}</strong></br>
            </span>
            @endif

            <label>{{ trans('billdetail.label.product_id')}}</label></br>
            <input name="product_id"></br>

            @if ($errors->has('product_id'))
            <span class="help-block">
                <strong>{{ $errors->first('product_id')}}</strong></br>
            </span>
            @endif

            <label>{{ trans('billdetail.label.so_luong_mua')}}</label></br>
            <input name="so_luong_mua"></br>

            @if ($errors->has('so_luong_mua'))
            <span class="help-block">
                <strong>{{ $errors->first('so_luong_mua')}}</strong></br>
            </span>
            @endif

            <label>{{ trans('billdetail.label.don_gia')}}</label></br>
            <input name="don_gia"></br>

            @if ($errors->has('don_gia'))
            <span class="help-block">
                <strong>{{ $errors->first('don_gia')}}</strong></br>
            </span>
            @endif

            <button>Submit</button>
    </form>

</body>

</html>