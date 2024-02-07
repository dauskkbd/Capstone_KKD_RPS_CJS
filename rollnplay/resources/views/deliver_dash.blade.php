<!DOCTYPE html>
<html lang="en">
    @include('layouts/head')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delivery - Dashboard</title>
</head>
@include('layouts/navbar_delivery')
<body>

    <h1>Deliveries</h1>

    <table class="table">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile Number</th>
            <th>Date Placed</th>
            <th>View Order Details</th>
            <th>Decline Order</th>
        </tr>
        @foreach($order as $o)
        <tr>
            <td>{{$o -> last_name}}, {{$o -> first_name}}</td>
            <td>{{$o -> province}}</td>
            <td>{{$o -> mobile}}</td>
            <td>{{$o -> time_placed}}</td>
            <td><a href="/delivery/{{$o -> order_id}}" class="btn btn-success">View</a></td>
            <td>
                <form action="/delivery/dashboard/{{$o -> order_id}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Decline" />
            </form>
        </td>
        </tr>
        @endforeach
    </table>

    

    @include('layouts/footer')
    @include('layouts/script')
</body>
</html>