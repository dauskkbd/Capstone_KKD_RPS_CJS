<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>My Order Summary</title>
    <style>
         body{
            font-family: "Poppins", sans-serif;
            background-color: #D9D0C1;
        }
        .user-delivery{
            margin-top: 10%;
        }
        table, th, tr, td{
            background-color: #D9D0C1 !important;
        }
        th{
            font-family: "Londrina Solid", sans-serif;
            font-size: 1.3em;
        }
        #my_orders{
            font-family: "Londrina Solid", sans-serif;
            color: #1d1c1a;

        }
    </style>
</head>
<body>
    @include('layouts/navbar')
    <div class="container user-delivery">
        <div class="row">
            <div class="col-lg-12">
                <h1 id="my_orders" class="text-center">My Order Summary</h1>
                @if($user_delivery)
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
