<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Orders</title>

    <style>
        body{
        font-family: "Poppins", sans-serif;
        background-color: #D9D0C1
        }
        #div_con{
            padding-top: 120px;
        }
        table,th,tr,td{
            background-color: #D9D0C1 !important;
        }
        th{
            font-family: "Londrina Solid", sans-serif;
            font-size: 20px;
        }
        #view{
        margin-right: 10px;
        background-color: #2148D1;
        font-family: "Londrina Solid", sans-serif;
        font-size: 15px;
        color: #1d1c1a
        }
        #orders{
            font-family: "Londrina Solid", sans-serif;
            font-size: 2.5em;
            color: #1d1c1a;


        }
    </style>
</head>
<body>
    @include('layouts/navbar')
    @include('layouts/messages')
<div class="container" id="div_con">
    <h1 class="text-center" id="orders">Orders</h1>

    <table class="table">
        <tr>
            <th>Order Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile Number</th>
            <th>Date Placed</th>
            <th>View Order</th>
        </tr>
        @foreach($order as $o)
        <tr>
            <td>{{$o -> order_id}}</td>
            <td>{{$o -> last_name}}, {{$o -> first_name}}</td>
            <td>{{$o -> province}}</td>
            <td>{{$o -> mobile}}</td>
            <td>{{$o -> time_placed}}</td>
            <td><a href="/admin/panel/orders/{{$o -> order_id}}" class="btn" id="view" data-mdb-ripple-init>View</a></td>
       
        </tr>
        @endforeach
    </table>
</div>

    @include('layouts/footer')
    @include('layouts/script')
    
</body>
</html>