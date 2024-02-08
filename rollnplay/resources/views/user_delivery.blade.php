<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>RollNPlay-Delivery</title>
    <style>
        .user-delivery{
            margin-top: 10%;
        }
    </style>
</head>
<body>
    @include('layouts/navbar')
    <div class="cointainer user-delivery">
        <div class="row">
            <div class="col-lg-12">
                <h1>Your Orders</h1>
                @if($user_delivery)
                <p>{{Session::get('first_name')}}, {{ Session::get('last_name') }}</p>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Order ID</th>
                    </tr>
                    @foreach($user_delivery as $ud)
                    <tr>
                        <td>{{ $ud -> name }}</td>
                        <td>{{ $ud -> quantity }}</td>
                        <td>{{ $ud -> status }}</td>
                        <td>{{ $ud -> order_id }}</td>
                    </tr>
                    @endforeach  
                </table>
              
                @else
                <p>No orders found.</p>
            @endif
            </div>
        </div>
    </div>

    @include('layouts/script')
    @include('layouts/footer')
</body>
</html>
