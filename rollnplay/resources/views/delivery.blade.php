<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Due Deliveries</title>

    <style>
        body{
        font-family: "Poppins", sans-serif;
        background-color: #D9D0C1
        }
        #div_container{
        padding-top: 110px;
        }
        #due{
        color: #1d1c1a;
        font-family: "Londrina Solid", sans-serif;
        }
        table,th,tr,td{
            background-color: #D9D0C1 !important;
        }
        #grand{
            text-align: end;
            margin-right: 20px;
            font-size: 25px;
        }
        th{
            font-family: "Londrina Solid", sans-serif;
            font-size: 20px;
        }
        h3{
            font-family: "Londrina Solid", sans-serif;
            font-size: 40px;
        }
        form{
            background-color: #D9D0C1 !important;
        }
        #submit{
            font-family: "Londrina Solid", sans-serif;
font-size: 20px;
            background-color: #8C564A;
            color: #1d1c1a;
            
        }
    </style>
</head>
<body>
    @include('layouts/navbar_delivery')

        
        
        <div class="container" id="div_container">
            <h1 class="text-center" id="due">Due Deliveries</h1>
        <div class="row">
            <div class="col-lg-4">
                <h3>Recipient Info</h3>
                <ul class="list-group list-group-light list-group-small mb-5 mt-3">
                    <li class="list-group-item"><b>Name:</b> {{$deliver[0] -> last_name}}, {{$deliver[0] -> first_name}}</li>
                    <li class="list-group-item"><b>Address:</b> {{$deliver[0] -> province}}</li>
                    <li class="list-group-item"><b>Mobile Number:</b> {{$deliver[0] -> mobile}}</li>
                    <li class="list-group-item"><b>Email:</b> {{$deliver[0] -> email}}</li>
                    <li class="list-group-item"><b>Order Placed:</b> {{$deliver[0] -> time_placed}}</li> 
                </ul>

                <h3>Update Order Status</h3>
                <form action="/delivery/status/{{$orders->order_id}}" method="POST" class="form-control">
                    @csrf
                    @method('PUT')
                    
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option selected disabled>Choose Status</option>
                        <option value="delivering">Delivering</option>
                        <option value="delivered">Delivered</option>
                      </select><br/>
                      <input type="submit" class="btn" value="Change Status" id="submit" data-mdb-ripple-init/>
                </form>
                <hr/>
            
            </div>
        <div class="col-lg-8">
            <h3>Order Info</h3>
            <table class="table mt-3 table-hover">
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
                    <td>₱{{$d -> price}}</td>
                    <td>₱{{$d -> quantity * $d -> price}}</td>
                </tr>
                @endforeach
            </table>
            <p id="grand"><b>Grand total:</b> ₱{{$grand_total -> grand_total}}</p>
        </div>
    </div>
</div>
            
@include ('layouts/footer') 


@include('layouts/script')
    
</body>
</html>