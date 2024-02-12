<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>RollNPlay-Product</title>
   <link rel="stylesheet" href="/css/product_show.css">
    <script src="/js/product_show.js">
    </script>
</head>
<body>
    @include('layouts/navbar')

    <div class="container" id="div_con">
        <form action="/shop/view/{{request()->route('id')}}" method="POST">
        @csrf
        @foreach($products as $p)
        <h1 class="text-center" id="head_name">{{$p -> name}}</h1>
        <h3 class="text-center" id="head_genre">{{$p -> genre}}</h3>
        <div class="row">
            <div class="col-lg-6 text-center">
                <img src="/images/{{$p -> image}}" alt="{{$p -> name}}" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h4 class="text-center mt-3" id="description">Description</h4>
                <p>{{$p -> description}}</p>
            </div>
            <p class="text-end price">PRICE ₱{{$p -> price}}</p>

        </div>

        @endforeach
        <a class="btn deduct_button" id="deduct_{{$p -> product_id}}">-</a>
        <input type="number" class="quantity_input" style="width: 50px; height: 45px;" min="0" max="99" value="1" id="order_{{$p -> product_id}}" name="order_{{$p -> product_id}}">
        <a class="btn add_button" id="add_{{$p -> product_id}}">+</a>
        <span id="add_to_cart_message"></span>
        <br><br>
        <button type="submit" class="btn add_cart" data-mdb-ripple-init id="add_to_cart_button">Add to cart</button>
        <a href="/shop/view/"><button type="button" class="btn view" data-mdb-ripple-init>View Cart</button></a>
        </form>
    </div>
    @include('layouts/script')
    @include('layouts/footer')
</body>
</html>
