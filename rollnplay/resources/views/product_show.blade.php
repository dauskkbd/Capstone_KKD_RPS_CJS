<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>RollNPlay-</title>
    <style>
        body{
            font-family: "Poppins", sans-serif;
            background-color: #D9D0C1
        }
       #div_con{   
            padding-top: 110px;
            padding-bottom: 30px;
       }
       #head_name{
        color: #1d1c1a;
        font-family: "Londrina Solid", sans-serif;
       }
       #head_genre{
        color: #1d1c1a;
        font-family: "Londrina Solid", sans-serif
       }
       #description{
        color: #1d1c1a;
        font-family: "Londrina Solid", sans-serif
       }
    </style>
    <script>
      $(document).ready(function() {
        $("#add_to_cart_button").click(function(){
            $("#add_to_cart_message").text("Item added to cart!");
        });


         $(".deduct_button").click(function() {
                $menu_id = $(this).prop('id').replace("deduct_", "");
                $new_val = Number($("#order_" + $menu_id).val()) - 1;
                if ($new_val >= 0) {
                    $("#order_" + $menu_id).val($new_val);
                }
            });

            $(".add_button").click(function() {
                $menu_id = $(this).prop('id').replace("add_", "");
                $new_val = Number($("#order_" + $menu_id).val()) + 1;
                if ($new_val <= 99) {
                    $("#order_" + $menu_id).val($new_val);
                }
            });
    });
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
                <img src="/images/{{$p -> image}}" alt="{{$p -> name}}">
            </div>
            <div class="col-lg-6">
                <h4 class="text-center mt-3" id="description">Description</h4>
                <p>{{$p -> description}}</p>
            </div>
            <p class="text-end">PRICE ₱{{$p -> price}}</p>

        </div>

        @endforeach
        <a class="btn btn-danger deduct_button" id="deduct_{{$p -> product_id}}">-</a>
        <input type="number" style="width: 50px" min="0" max="99" value="0" id="order_{{$p -> product_id}}" name="order_{{$p -> product_id}}">
        <a class="btn btn-primary add_button" id="add_{{$p -> product_id}}">+</a>
        <span id="add_to_cart_message"></span>
        <br><br>
        <button type="submit" class="btn btn-success" data-mdb-ripple-init id="add_to_cart_button">Add to cart</button>
        <a href="/shop/view/"><button type="button" class="btn btn-info" data-mdb-ripple-init>View Cart</button></a>
        </form>
    </div>
    @include('layouts/script')
    @include('layouts/footer')
</body>
</html>
