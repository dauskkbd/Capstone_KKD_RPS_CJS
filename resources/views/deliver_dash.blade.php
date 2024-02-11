<!DOCTYPE html>
<html lang="en">
    @include('layouts/head')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deliveries</title>

<style>
body{
    font-family: "Poppins", sans-serif;
    background-color: #D9D0C1;
    }
.div-con{
    margin-top:5%;
    margin-bottom: 5%;
}
#head{
    font-family: "Londrina Solid", sans-serif;
    font-size: 3em;
    color: #1d1c1a;
    padding-top: 110px;
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
    margin-right: 2%;
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


#cap{
    margin-top: 20%;
    margin-bottom: 20%;
}

</style>


</head>
@include('layouts/navbar_delivery')
<body>
    <h1 id="head" class="text-center">Deliveries</h1>
<div class="container div-con">
    <div class="row d-flex d-lg-block d-md-none d-none">
        
        <div class="col-lg-12">
            @if(count($order) > 0)

            <table class="table table-hover">
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Mobile Number</th>
                    <th>Date and Time Placed</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                
        
                @foreach($order as $o)
                <tr>
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
                        <button type="button" class="btn" id="decline" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#order_{{$o -> order_id}}">
                            Decline
                          </button>
                    </td>
                    
                </tr>
                <!-- Modal -->
          <div class="modal fade" id="order_{{$o -> order_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                
                @endforeach
            </table>
        
           @else
            <div class="container">
            <h1 class="text-center" id="cap">Currently, there are no deliveries scheduled or pending.</h1>
            </div>
        
           @endif
        
        </div>
        </div>
    </div>

    <div class="container div-con">
        <div class="row d-flex d-lg-none d-md-block d-none">
            
            <div class="col-md-12">
                @if(count($order) > 0)
                    <div class="table-responsive">
                        @foreach($order as $o)
                        <table class="table table-hover mt-5">
                            <tr>
                                <th>Name</th>
                                <td class="fw-bold mb-1" data-cell="name">{{$o -> last_name}}, {{$o -> first_name}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td data-cell="province">{{$o -> province}}</td>
                            </tr>
                            <tr>
                                <th>Mobile Number</th>
                                <td data cell="mobile">{{$o -> mobile}}</td>
                            </tr>
                            <tr>
                                <th>Date and Time Placed</th>
                                <td data-cell="time_placed">{{$o -> time_placed}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
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
                            </tr>
                            <tr>
                                <th>Actions</th>
                                <td id="actions" data-cell="actions">
                                    <a id="view" href="/delivery/{{$o -> order_id}}" class="btn btn-primary mr-2" data-mdb-ripple-init>View</a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" id="decline" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#order_{{$o -> order_id}}">Decline</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="order_{{$o -> order_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    @endforeach
                @else
            </table>
                    <div class="container">
                        <h1 class="text-center" id="cap">Currently, there are no deliveries scheduled or pending.</h1>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container div-con">
        <div class="row d-flex d-lg-none d-md-none d-block">
            
            <div class="col-12">
                @if(count($order) > 0)
                    <div class="table-responsive">
                        @foreach($order as $o)
                        <table class="table table-hover mt-5">
                            <tr>
                                <th>Name</th>
                                <td class="fw-bold mb-1" data-cell="name">{{$o -> last_name}}, {{$o -> first_name}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td data-cell="province">{{$o -> province}}</td>
                            </tr>
                            <tr>
                                <th>Mobile Number</th>
                                <td data cell="mobile">{{$o -> mobile}}</td>
                            </tr>
                            <tr>
                                <th>Date and Time Placed</th>
                                <td data-cell="time_placed">{{$o -> time_placed}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
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
                            </tr>
                            <tr>
                                <th>Actions</th>
                                <td id="actions" data-cell="actions">
                                    <a id="view" href="/delivery/{{$o -> order_id}}" class="btn btn-primary mr-2" data-mdb-ripple-init>View</a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" id="decline" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#order_{{$o -> order_id}}">Decline</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="order_{{$o -> order_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    @endforeach
                @else
            </table>
                    <div class="container">
                        <h1 class="text-center" id="cap">Currently, there are no deliveries scheduled or pending.</h1>
                    </div>
                @endif
            </div>
        </div>
    </div>
    

    @include('layouts/footer')
    @include('layouts/script')
</body>
</html>