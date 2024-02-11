<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>RollNPlay-</title>
    <style>
        .checkout{
            margin-top: 10%;
            margin-bottom: 5%
        }
    </style>
</head>
<body>
    @include('layouts/navbar')
    @include('layouts/messages')
    <div class="container checkout">
            <table class="table">  
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total Price</th>
                    <th><span></span></th>
                    <th><span></span></th>
                </tr>
                @foreach($cart as $c)
                    <tr>
                        <td>{{$c -> name}}</td>
                        <td>{{$c -> quantity}}</td>
                        <td>₱{{$c -> price}}</td>
                        <td>₱{{$c -> price * $c -> quantity}}</td>
                        <td><a href="/shop/product/edit/{{$c -> product_id}}"><button type="button" class="btn btn-warning" data-mdb-ripple-init>Edit Quantity</button></a></td>
                        </td>
                        <td><a data-bs-toggle="modal" data-bs-target="#delete_{{$c -> product_id}}" class="btn btn-danger">Delete</a></td>
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
            <button type="submit" class="btn btn-success" data-mdb-ripple-init>Check out</button>
            <a href="/shop"><button type="button" class="btn btn-info" data-mdb-ripple-init>Continue Shopping</button></a>
            @foreach($grand_total as $gt)
            <span class="fs-3 ms-5"><strong>Grand Total: ₱{{$gt -> grand_total}}</strong></h3>
            @endforeach
        </form>  
    </div>
    @include('layouts/script')
    @include('layouts/footer')
</body>
</html>
