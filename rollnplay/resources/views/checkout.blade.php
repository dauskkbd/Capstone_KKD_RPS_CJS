<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>RollNPlay-</title>
    <style>
        body{
        font-family: "Poppins", sans-serif;
        background-color: #D9D0C1;
        }
        #checkout_btn{
            background-color: #00BF63;
            font-family: "Londrina Solid", sans-serif;
            font-size: 1.2em;
            color: #1d1c1a;
        }

        .continue{
            background-color: #2148D1;
            font-family: "Londrina Solid", sans-serif;
            font-size: 1.2em;
            color: #1d1c1a;
        }

        .continue:hover{
            background-color: #2148D1;
            font-family: "Londrina Solid", sans-serif;
            font-size: 1.2em;
            color: #1d1c1a;
        }

        .checkout .table {
            width: 100%;
        }
        #cart{
            padding-top: 100px;
            color: #1d1c1a;
            font-family: "Londrina Solid", sans-serif;
            font-size: 3em;
        }
        table, th, tr, td{
        background-color: #D9D0C1 !important;
        }
        th{
        font-family: "Londrina Solid", sans-serif;
        font-size: 1.5em;
        }
        #actions{
            
        }
        #edit{
            color: #1d1c1a;
            font-family: "Londrina Solid", sans-serif;
            background-color: #FFD600;
            font-size: 1.1em;
        }
        .grand{
            margin-right: 25px;
            display: inline-block;
        }
        #delete{
            color: #1d1c1a;
            font-family: "Londrina Solid", sans-serif;
            background-color: #FF3333;
            font-size: 1.1em;
        }
        
        
    </style>
</head>
<body>
    @include('layouts/navbar')

            <div class="container checkout">
                <div class="row d-flex d-lg-block d-md-none d-none">
                    <div class="col-lg-12">
                        <h1 id="cart" class="text-center">CART</h1>
                        <table class="table">  
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total Price</th>
                                <th>Actions</th>
                        
                            </tr>
                            @foreach($cart as $c)
                                <tr>
                                    <td>{{$c -> name}}</td>
                                    <td>{{$c -> quantity}}</td>
                                    <td>₱{{$c -> price}}</td>
                                    <td>₱{{$c -> price * $c -> quantity}}</td>
                                    <td id="actions">
                                        <a href="/shop/product/edit/{{$c -> product_id}}"><button type="button" class="btn me-2" id="edit" data-mdb-ripple-init>Edit Quantity</button></a>
                                    
                                        <a data-bs-toggle="modal" data-bs-target="#delete_{{$c -> product_id}}" class="btn" id="delete">Delete</a>
                                    </td>
                                    <div class="modal fade" id="delete_{{$c -> product_id}}" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete {{$c -> name}}? </h5>
                                                    <button class="btn-close" data-bs-dismiss="modal" data-mdb-ripple-init></button>
                                                </div>
                                                <div class="modal-body">Once this action is taken, it cannot be undone.
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" data-bs-dismiss="modal" data-mdb-ripple-init>
                                                            Cancel
                                                        </button>
                                                        <form action="/shop/view/{{$c -> product_id}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input class="btn btn-danger" type="submit" value="Delete" />
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </tr>
                        @endforeach
                        </table>
                        <form action="/shop/checkout" method="POST">
                        @csrf
                        <button type="submit" class="btn" id="checkout_btn" data-mdb-ripple-init>Check out</button>
                        <a href="/shop"><button type="button" class="btn continue" data-mdb-ripple-init>Continue Shopping</button></a>
                        @foreach($grand_total as $gt)
                        <span class="fs-3 ms-5 text-end grand"><strong>Grand Total: ₱{{$gt -> grand_total}}</strong></span>
                        @endforeach
                    </form>  
                    </div>
                </div>
            </div>

            <div class="container checkout">
                <div class="row d-flex d-lg-none d-md-block d-none">
                    <div class="col-md-12">
                        <h1 id="cart" class="text-center">CART</h1>
                        <table class="table">  
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total Price</th>
                                <th>Actions</th>
                        
                            </tr>
                            @foreach($cart as $c)
                                <tr>
                                    <td>{{$c -> name}}</td>
                                    <td>{{$c -> quantity}}</td>
                                    <td>₱{{$c -> price}}</td>
                                    <td>₱{{$c -> price * $c -> quantity}}</td>
                                    <td id="actions">
                                        <a href="/shop/product/edit/{{$c -> product_id}}"><button type="button" class="btn me-2" id="edit" data-mdb-ripple-init>Edit Quantity</button></a>
                                    
                                        <a data-bs-toggle="modal" data-bs-target="#delete_{{$c -> product_id}}" class="btn" id="delete">Delete</a>
                                    </td>
                                    <div class="modal fade" id="delete_{{$c -> product_id}}" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete {{$c -> name}}? </h5>
                                                    <button class="btn-close" data-bs-dismiss="modal" data-mdb-ripple-init></button>
                                                </div>
                                                <div class="modal-body">Once this action is taken, it cannot be undone.
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" data-bs-dismiss="modal" data-mdb-ripple-init>
                                                            Cancel
                                                        </button>
                                                        <form action="/shop/view/{{$c -> product_id}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input class="btn btn-danger" type="submit" value="Delete" />
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </tr>
                        @endforeach
                        </table>
                        <form action="/shop/checkout" method="POST">
                        @csrf
                        <button type="submit" class="btn " id="checkout_btn" data-mdb-ripple-init>Check out</button>

                        <a href="/shop"><button type="button" class="btn continue" data-mdb-ripple-init>Continue Shopping</button></a>

                        @foreach($grand_total as $gt)
                        <span class="fs-3 ms-5 text-end grand"><strong>Grand Total: ₱{{$gt -> grand_total}}</strong></span>
                        @endforeach
                    </form>  
                    </div>
                </div>
            </div>

            <div class="container checkout">
                <div class="row d-flex d-lg-none d-md-none d-block">
                    <div class="col-12">
                        <h1 id="cart" class="text-center">CART</h1>
                        <table class="table">
                            @foreach($cart as $c)  
                            <tr>
                                <th>Name</th>
                                <td>{{$c -> name}}</td>
                            </tr>
                            <tr>
                                <th>Quantity</th>
                                <td>{{$c -> quantity}}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>₱{{$c -> price}}</td>
                            </tr>
                            <tr>
                                <th>Total Price</th>
                                <td>₱{{$c -> price * $c -> quantity}}</td>
                            </tr>
                            <tr>
                                <th>Actions</th>
                                <td id="actions">
                                    <a href="/shop/product/edit/{{$c -> product_id}}"><button type="button" class="btn me-2 mb-2" id="edit" data-mdb-ripple-init>Edit Quantity</button></a>
                                
                                    <a data-bs-toggle="modal" data-bs-target="#delete_{{$c -> product_id}}" class="btn" id="delete">Delete</a>
                                </td>
                                <div class="modal fade" id="delete_{{$c -> product_id}}" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete {{$c -> name}}? </h5>
                                                <button class="btn-close" data-bs-dismiss="modal" data-mdb-ripple-init></button>
                                            </div>
                                            <div class="modal-body">Once this action is taken, it cannot be undone.
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" data-bs-dismiss="modal" data-mdb-ripple-init>
                                                        Cancel
                                                    </button>
                                                    <form action="/shop/view/{{$c -> product_id}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input class="btn btn-danger" type="submit" value="Delete" />
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach
                        </table>
                        <form action="/shop/checkout" method="POST">
                        @csrf
                        <button type="submit" class="btn " id="checkout_btn" data-mdb-ripple-init>Check out</button>
                        <a href="/shop"><button type="button" class="btn continue" data-mdb-ripple-init>Continue Shopping</button></a>
                        @foreach($grand_total as $gt)
                        <span class="fs-3 ms-5 text-end grand"><strong>Grand Total: ₱{{$gt -> grand_total}}</strong></span>
                        @endforeach
                    </form>  
                    </div>
                </div>
            </div>
 
            @include('layouts/footer')
</body>
@include('layouts/script')
</html>
