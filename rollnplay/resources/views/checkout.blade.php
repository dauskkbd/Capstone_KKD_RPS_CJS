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
        <form action="/shop/checkout" method="POST">
            @csrf
            <table class="table">  
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                @foreach($cart as $c)
                <tr>
                    <td>{{$c -> name}}</td>
                    <td>{{$c -> quantity}}</td>
                    <td>{{$c -> price}}</td>
                </tr>
                @endforeach
            </table>
            <button type="submit" class="btn btn-success" data-mdb-ripple-init>Check out</button>
            <a href="/shop"><button type="button" class="btn btn-warning" data-mdb-ripple-init>Continue Shopping</button></a>
        </form>
    </div>
    @include('layouts/script')
    @include('layouts/footer')
</body>
</html>
