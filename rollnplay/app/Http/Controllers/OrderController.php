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
    public function view_delivery()
    {
        $user_delivery = Order::query()
            ->select('*')
            ->join('users_carts as uc', 'uc.order_id', '=', 'orders.order_id')
            ->join('users as u', 'uc.user_id', '=', 'u.user_id')
            ->join('products as p', 'p.product_id', '=', 'uc.product_id')
            ->orderBy('orders.order_id', 'DESC')
            ->get();

        return view('user_delivery', compact('user_delivery'));
    }


    public function checkout()
    {
        $order = new Order;
        $order->user_id = Session::get('user_id');
        $order->status = 'waiting';
        $order->save();

        Cart::where('user_id', Session::get('user_id'))->delete();

        UsersCart::where("user_id", "=",  Session::get('user_id'))
            ->whereNull('order_id')
            ->update(
                [
                    'order_id' => $order->order_id
                ]
            );

        return redirect('/shop');
    }

    public function delete_item(string $id)
    {
        $cart_item = Cart::where('product_id', '=', $id)
            ->delete();

        return redirect('/shop/view');
    }


    public function push_cart(Request $r, string $id)
    {
        $cart = new Cart;
        $cart->user_id = Session::get('user_id');
        $cart->product_id = $id;
        $cart->quantity = $r->input('order_' . $id);
        $cart->save();

        $user_cart = new UsersCart;
        $user_cart->user_id = Session::get('user_id');
        $user_cart->product_id = $id;
        $user_cart->quantity = $r->input('order_' . $id);
        $user_cart->save();

        return redirect('/shop');
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
            ->where('carts.user_id', '=', Session::get('user_id'))
            ->get(); //queries all items related to order of user

        return view('checkout', compact('cart'));
    }
}
