<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
    </form>

</body>

</html>