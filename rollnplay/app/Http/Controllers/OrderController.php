<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderProduct;
use App\Models\UsersCart;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function checkout()
    {
        $order = new Order;
        $order->user_id = 4;
        $order->status = 'waiting';
        $order->save();

        Cart::where('user_id', 4)->delete();

        return redirect('/shop');
    }



    public function push_cart(Request $r, string $id)
    {
        $user_cart = new Cart;
        $user_cart->user_id = 4;
        $user_cart->product_id = $id;
        $user_cart->quantity = $r->input('order_' . $id);
        $user_cart->save();

        $user_cart = new UsersCart;
        $user_cart->user_id = 4;
        $user_cart->product_id = $id;
        $user_cart->quantity = $r->input('order_' . $id);
        $user_cart->save();

        return redirect('/shop')->with('success', 'item was added to cart');
    }


    public function view_user_cart(Request $r)
    {

        $product = Product::query()
            ->select('*')
            ->where('stock', '>', '0')
            ->get();  //gets all the product data with stock greater than zero

        $cart = Cart::query()
            ->select('*')
            ->join('users', 'carts.user_id', '=', 'users.user_id')
            ->join('products', 'carts.product_id', '=', 'products.product_id')
            ->where('carts.user_id', '=', 4)
            ->get(); //queries all items related to order of user

        return view('checkout', compact('cart'));
    }
}
