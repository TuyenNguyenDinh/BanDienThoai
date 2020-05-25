<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ route('employees.store')}}">
        {{ csrf_field() }}
        <label>{{ trans('employee.label.ten')}}</label></br>
        <input name="ten"></br>

        @if ($errors->has('ten'))
        <span class="help-block">
            <strong>{{ $errors->first('ten')}}</strong></br>
        </span>
        @endif

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
    </form>

</body>

</html>