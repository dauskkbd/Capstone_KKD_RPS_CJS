<!DOCTYPE html>
<html lang="en">
    @include('layouts/head')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delivery - Dashboard</title>

<style>
body{
    font-family: "Poppins", sans-serif;
    background-color: #D9D0C1
    }
#div_con{
    padding-top: 100px;
    
}
#head{
    font-family: "Londrina Solid", sans-serif;
    font-size: 40px;
    color: #1d1c1a;
}
#actions{
    display: flex;
}
th{
    color: #1d1c1a;
    font-family: "Londrina Solid", sans-serif;
    font-size: 25px;
}
#view{
    margin-right: 10px;
    background-color: #2148D1;
    font-family: "Londrina Solid", sans-serif;
    font-size: 15px;
    color: #1d1c1a
}
#decline{
    background-color: #FF3333;
    font-family: "Londrina Solid", sans-serif;
    font-size: 15px;
    color: #1d1c1a
}
#badge{
    background: #8C564A;
}
table, th, tr, td{
    background: #D9D0C1 !important;
}



</style>


</head>
@include('layouts/navbar_delivery')
<body>
<div class="container" id="div_con">
    <h1 id="head" class="text-center">Deliveries</h1>
    
    <table class="table table-hover">
        <tr >
            <th>Name</th>
            <th>Address</th>
            <th>Mobile Number</th>
            <th>Date and Time Placed</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        @foreach($order as $o)
        <tr id="eee">
            <td class="fw-bold mb-1" data-cell="name">{{$o -> last_name}}, {{$o -> first_name}}</td>
            <td data-cell="province">{{$o -> province}}</td>
            <td data cell="mobile">{{$o -> mobile}}</td>
            <td data-cell="time_placed">{{$o -> time_placed}}</td>

            <td data-cell="status">
            @if($o->status == "accepted")
                <span class="badge badge-primary rounded-pill d-inline">{{$o->status}}</span>
            @elseif($o->status == "delivering")
                <span class="badge badge-info rounded-pill d-inline">{{$o->status}}</span>
            @elseif($o->status == "finished")
                <span class="badge badge-success rounded-pill d-inline">{{$o->status}}</span>  
            @else
                <span class="badge rounded-pill d-inline" id="badge">{{$o->status}}</span>
            
            @endif
            </td>

            <td id="actions" data-cell="actions">
                <a id="view" href="/delivery/{{$o -> order_id}}" class="btn" data-mdb-ripple-init>View</a>
                <!-- Button trigger modal -->
                <button type="button" class="btn" id="decline" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#exampleModal">
                    Decline
                  </button>
            </td>
            
        </tr>
        
        @endforeach
    </table>
   
</div>


  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to "Decline?"</h5>
          <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Caution: Declining the delivery is irreversible and will result in complete deletion.</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Close</button>

        <form action="/delivery/dashboard/{{$o -> order_id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Decline" />
        </form>

        </div>
      </div>
    </div>
  </div>


    

    @include('layouts/footer')
    @include('layouts/script')
</body>
</html>