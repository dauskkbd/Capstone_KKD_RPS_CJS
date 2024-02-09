<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>RollNPlay-</title>
    <style>
        .something {
            margin-top: 10%;
            margin-bottom: 10%;
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#add_to_cart_button").click(function() {
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
    <div class="container something">
        <form action="/shop/view/{{request()->route('id')}}" method="POST">
            @csrf
            @method('PUT')
            <ul>
                <li><img src="/images/{{$products -> image}}" alt="{{$products -> name}}"></li>
                <li>{{$products -> name}}</li>
                <li>{{$products -> description}}</li>
                <li>{{$products -> price}}</li>
                <li>{{$products -> genre}}</li>
            </ul>
            <a class="btn btn-danger deduct_button" id="deduct_{{$products -> product_id}}">-</a>
            <input type="number" style="width: 50px" min="0" max="99" value="0" id="order_{{$products -> product_id}}" name="order_{{$products -> product_id}}">
            <a class="btn btn-primary add_button" id="add_{{$products -> product_id}}">+</a>
            <span id="add_to_cart_message"></span>
            <br><br>
            <button type="submit" class="btn btn-success" data-mdb-ripple-init id="add_to_cart_button">Add to cart</button>
        </form>
    </div>
    @include('layouts/script')
    @include('layouts/footer')
</body>

</html>