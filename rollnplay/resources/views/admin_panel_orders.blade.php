<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Admin Panel - PRODUCTS</title>
</head>
<body>
    @include('layouts/navbar')

    <h1>Products</h1>

    <table class="table">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile Number</th>
            <th>Date Placed</th>
            <th>View Order</th>
        </tr>
        @foreach($order as $o)
        <tr>
            <td>{{$o -> last_name}}, {{$o -> first_name}}</td>
            <td>{{$o -> province}}</td>
            <td>{{$o -> mobile}}</td>
            <td>{{$o -> time_placed}}</td>
            <td><a href="/admin/panel/orders/{{$o -> order_id}}" class="btn btn-success">View</a></td>
       
        </tr>
        @endforeach
    </table>

    @include('layouts/footer')
    @include('layouts/script')
    
</body>
</html>