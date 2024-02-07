<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrdersProduct;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function show_checkout(Request $r)
    {
        $order = new Order;
        $order->user_id = 4;
        $order->save();

        $product = Product::query()
            ->select('*')
            ->where('stock', '>', '0')
            ->get();

        $order_product = [];
        for ($i = 0; $i < count($product); $i++) {
            $num_ordered = $r->input('order_' . $product[$i]->product_id);
            if ($num_ordered > 0) {
                $op = new OrdersProduct;
                $op->order_id = $order->order_id;
                $op->product_id = $product[$i]->product_id;
                $op->quantity = $num_ordered;
                $op->save();
                array_push($order_product, $op);
            }
        }

        $receipt = Order::query()
            ->select('name', 'quantity', 'price')
            ->join('order_product', 'orders.order_id', '=', 'order_product.order_id')
            ->join('products', 'order_product.product_id', '=', 'products.product_id')
            ->join('users', 'orders.user_id', '=', 'users.user_id')
            ->where('orders.user_id', '=', 4)
            ->get();

        return view('checkout', compact('order', 'order_product', 'receipt'));
    }
}
