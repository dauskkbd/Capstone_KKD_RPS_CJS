<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Delivery - Show</title>
</head>
<body>
    @include('layouts/navbar_delivery')

            <h1 class="display 1 text-center">Due Deliveries</h1>
            
     @foreach ($deliver as $d)       
    <ul class="list-group list-group-light list-group-small mb-5 mt-5">
    <li class="list-group-item">Name: {{$d -> last_name}}, {{$d -> first_name}}</li>
    <li class="list-group-item">Address: {{$d -> province}}</li>
    <li class="list-group-item">Mobile Number: {{$d -> mobile}}</li>
    <li class="list-group-item">Email: {{$d -> email}}</li>
    <li class="list-group-item">Order placed: {{$d -> time_placed}}</li>
    <li class="list-group-item">Orders: 
        <table class="table">
            <tr>
            <th>Order ID</th>
            <th>Orders</th>
            <th>Quantity</th>
            </tr>
            <tr>
                <td>{{$d -> order_id}}</td>
                <td>{{$d -> name}}</td>
                <td>{{$d -> quantity}}</td>
            </tr>
        </table>
    </li>
    </ul>
    @endforeach

      
    
    <label for="">Update Order Status</label>
    
    <form action="/delivery/status/{{$orders->order_id}}" method="POST" class="form-control">
        @csrf
        @method('PUT')
        
        <select name="status">
            <option value="waiting">Waiting</option>
            <option value="accepted">Accepted</option>
            <option value="preparing">Preparing</option>
            <option value="delivering">To Be Delivered</option>
            <option value="delivered">Delivered</option>
        </select>
        <input type="submit" class="btn btn-success" value="Update Status" />
    </form>
    
    @include ('layouts/footer') 
    @include('layouts/script')
    
</body>
</html>