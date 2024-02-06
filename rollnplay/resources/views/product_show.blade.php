<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>RollNPlay-</title>
    <style>
       .something{
        margin-top: 10%;
        margin-bottom: 10%;
       }
    </style>
    <script>
      $(document).ready(function() {
            $('#add_to_cart_button').click(function() {
                $(this).hide();
                 $('#view_cart_button').show();
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
    <div class="container something">
        <form action="/shop/checkout" method="POST">
        @csrf
        @foreach($products as $p)
        <ul>
            <li><img src="/images/{{$p -> image}}" alt="{{$p -> name}}"></li>
            <li>{{$p -> name}}</li>
            <li>{{$p -> description}}</li>
            <li>{{$p -> price}}</li>
            <li>{{$p -> genre}}</li>
        </ul>
        @endforeach
        <a class="btn btn-danger deduct_button" id="deduct_{{$p -> product_id}}">-</a>
        <input type="number" style="width: 50px" min="0" max="99" value="0" id="order_{{$p -> product_id}}" name="order_{{$p -> product_id}}">
        <a class="btn btn-primary add_button" id="add_{{$p -> product_id}}">+</a>
        <button type="submit" class="btn btn-success" data-mdb-ripple-init id="view_cart_button" style="display: none;">View Cart</button>
        <button type="button" class="btn btn-success" data-mdb-ripple-init id="add_to_cart_button">Add to cart</button>
        <button type="submit" class="btn btn-danger" data-mdb-ripple-init id="buy_now_button">Buy Now</button>
        </form>
       
        

    </div>

    

    @include('layouts/script')
    @include('layouts/footer')
</body>
</html>
