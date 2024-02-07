<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\User;

class DeliveryController extends Controller
{
    public function deliveries(string $id)
    {
        $deliver = Order::query()
            ->select('*')
            ->join('order_product', 'orders.order_id', '=', 'order_product.order_id')
            ->join('products', 'order_product.product_id', '=', 'products.product_id')
            ->join('users', 'users.user_id', '=', 'orders.user_id')
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
