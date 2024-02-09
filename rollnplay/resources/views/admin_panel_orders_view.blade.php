<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Orders - view</title>
</head>
<body>
    @include('layouts/navbar_delivery')

    <h1 class="display 1 text-center">Due Deliveries</h1>
            
    <ul class="list-group list-group-light list-group-small mb-5 mt-5">
        <li class="list-group-item">Name: {{$deliver[0] -> last_name}}, {{$deliver[0] -> first_name}}</li>
        <li class="list-group-item">Address: {{$deliver[0] -> province}}</li>
        <li class="list-group-item">Mobile Number: {{$deliver[0] -> mobile}}</li>
        <li class="list-group-item">Email: {{$deliver[0] -> email}}</li>
        <li class="list-group-item">Order placed: {{$deliver[0] -> time_placed}}</li>
        <li class="list-group-item">Orders: 
            <table class="table">
                <tr>
                <th>Order ID</th>
                <th>Orders</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                </tr>
                @foreach ($deliver as $d)  
                <tr>
                    <td>{{$d -> order_id}}</td>
                    <td>{{$d -> name}}</td>
                    <td>{{$d -> quantity}}</td>
                    <td>{{$d -> price}}</td>
                    <td>{{$d -> quantity * $d -> price}}</td>
                </tr>
                @endforeach
            </table>
            <h1>Grand total: {{$grand_total -> grand_total}}</h1>
        </li>
        </ul>
  

      
    
    <label for="">Update Order Status</label>
    
    <form action="/admin/panel/orders/status/{{$orders->order_id}}" method="POST" class="form-control">
        @csrf
        @method('PUT')
        
        <select name="status">
            <option value="waiting">Waiting</option>
            <option value="accepted">Accepted</option>
        </select>
        <input type="submit" class="btn btn-success" value="Update Status" />
    </form>
    
    @include ('layouts/footer') 
    @include('layouts/script')
    
</body>
</html>