<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\User;

class DeliveryController extends Controller
{
    public function decline_order(string $id)
    {
        $order = Order::find($id);

        if ($order) {
            $order->delete();
        }

        return redirect('delivery/dashboard');
    }



    public function view_orders_dash()
    {
        $order = Order::query()
            ->select('*')
            ->join('users', 'users.user_id', '=', 'orders.user_id')
            ->get();


        return view('deliver_dash', compact('order'));
    }



    public function deliveries(string $id)
    {
        $deliver = Order::query()
            ->select('*')
            ->join('users', 'users.user_id', '=', 'orders.user_id')
            ->join('users_carts', 'users_carts.user_id', '=', 'users.user_id')
            ->join('products', 'products.product_id', '=', 'users_carts.product_id')
            ->where('orders.order_id', '=', $id)
            ->get();




        $orders = Order::query()
            ->select('status', 'user_id', 'order_id')
            ->where('order_id', '=', $id)
            ->get()
            ->first();


        return view('delivery', compact('deliver', 'orders'));
    }

    public function update_order_status(Request $r, string $id)
    {
        Order::where('order_id', '=', $id)
            ->update(
                [
                    'status' => $r->input("status")
                ]
            );


        return redirect('/delivery/' . $id) . $r->input("status");
    }
}
