<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>RollNPlay-</title>
    <style>
        .checkout{
            margin-top: 10%;
            margin-bottom: 5%
        }
    </style>
</head>
<body>
    @include('layouts/navbar')
    <div class="container checkout">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            @foreach($receipt as $r)
            <tr>
                <td>{{$r -> name}}</td>
                <td>{{$r -> quantity}}</td>
                <td>{{$r -> price}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    @include('layouts/script')
    @include('layouts/footer')
</body>
</html>
