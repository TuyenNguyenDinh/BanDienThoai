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
            @foreach($billdetails as $billdetail)
            <tr>
                <td>{{ $billdetail->id}}</>
                <td>{{ $billdetail->bill_id}}</td>
                <td>{{ $billdetail->product_id}}</td>
                <td>{{ $billdetail->so_luong_mua}}</td>
                <td>{{ $billdetail->don_gia}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>