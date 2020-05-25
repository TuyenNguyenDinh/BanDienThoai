<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ route('products.store')}}">
        {{ csrf_field() }}
        <label>{{ trans('product.label.category_id')}}</label>
        <select name="category_id">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select></br>

        <label>{{ trans('product.label.ten')}}</label></br>
        <input name="ten"></br>

        @if ($errors->has('ten'))
        <span class="help-block">
            <strong>{{ $errors->first('ten')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('product.label.anh')}}</label></br>
        <input name="anh"></br>

        <label>{{ trans('product.label.gia')}}</label></br>
        <input name="gia_sp"></br>

        <label>{{ trans('product.label.so_luong')}}</label></br>
        <input name="so_luong"></br>

        <label>{{ trans('product.label.thong_tin_cu_the')}}</label></br>
        <input name="thong_tin_cu_the"></br>

        <button>Submit</button>
    </form>

</body>

</html>