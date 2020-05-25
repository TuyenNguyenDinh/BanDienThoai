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
            @foreach($bills as $bill)
            <tr>
                <td>{{ $bill->id}}</td>
                <td>{{ $bill->customer_id}}</td>
                <td>{{ $bill->ngatlap_hd}}</td>
                <td>{{ $bill->noi_nhan_hang}}</td>
                <td>{{ $bill->tong_tien}}</td>
                <td>{{ $bill->ghi_chu}}</td>
                <td>{{ $bill->employee_id}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>