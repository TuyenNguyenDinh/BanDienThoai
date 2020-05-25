<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id}}</td>
                <td>{{ $employee->ten}}</td>
                <td>{{ $employee->tai_khoan}}</td>
                <td>{{ $employee->mat_khau}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>