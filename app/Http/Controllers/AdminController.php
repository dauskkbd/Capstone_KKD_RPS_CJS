<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use App\Models\UsersCart;

class AdminController extends Controller
{

    public function show_dashboard()
    {
        $orders = Order::query()
            ->select(DB::raw("DATE_FORMAT(orders.time_placed, '%Y-%m-%d') AS time_placed"), DB::raw('SUM(p.price - p.w_price) AS total_profit'))
            ->join('users_carts as uc', 'uc.order_id', '=', 'orders.order_id')
            ->join('products as p', 'p.product_id', '=', 'uc.product_id')
            ->groupBy(DB::raw("DATE_FORMAT(orders.time_placed, '%Y-%m-%d')"))
            ->get();

        // $products = Product::query()
        //     ->select('*')
        //     ->get();

        // $user_cart = UsersCart::query()
        //     ->select('name', 'products.product_id', DB::raw('COUNT(products.product_id) AS product_count'))
        //     ->join('products', 'products.product_id', '=', 'users_carts.product_id')
        //     ->groupBy('name', 'products.product_id') // Corrected grouping
        //     ->orderByDesc('product_count') // Use orderByDesc() for descending order
        //     ->get();


        // $stock = [];
        // foreach ($products as $p) {
        //     array_push($stock, $p->stock);
        // }

        // $item_name = [];
        // foreach ($products as $p) {
        //     array_push($item_name, $p->name);
        // }

        // $prod_data = [
        //     'labels' => $item_name,
        //     'prod_data' => $stock
        // ];

        // $profit = [];
        // foreach ($orders as $o) {
        //     array_push($profit, $o->total_profit);
        // }

        // $time_placed = [];
        // foreach ($orders as $o) {
        //     array_push($time_placed, $o->time_placed);
        // }

        // $data = [
        //     'labels' => $time_placed,
        //     'data' => $profit
        // ];
        return view('admin_dashboard', compact('orders'));
        // return view('admin_dashboard', compact('data', 'prod_data', 'user_cart'));
    }

    public function admin_view_orders(string $id)
    {
        $deliver = Order::query()
            ->select('*')
            ->join('users', 'users.user_id', '=', 'orders.user_id')
            ->join('users_carts', 'users_carts.order_id', '=', 'orders.order_id')
            ->join('products', 'products.product_id', '=', 'users_carts.product_id')
            ->where('orders.order_id', '=', $id)
            ->get();

        $grand_total = Order::query()
            ->select(DB::raw('SUM(price * quantity) AS grand_total'))
            ->join('users_carts', 'orders.order_id', '=', 'users_carts.order_id')
            ->join('products', 'users_carts.product_id', '=', 'products.product_id')
            ->where('orders.order_id', '=', $id)
            ->get()
            ->first();

        $orders = Order::query()
            ->select('status', 'user_id', 'order_id')
            ->where('order_id', '=', $id)
            ->get()
            ->first();

        return view('admin_panel_orders_view', compact('deliver', 'grand_total', 'orders'));
    }


    public function admin_panel_orders()
    {
        $order = Order::query()

            ->select('*')
            ->join('users', 'users.user_id', '=', 'orders.user_id')
            ->get();

        return view('admin_panel_orders', compact('order'));
    }

    public function edit_product(Request $r, string $id)
    {
        $product = Product::where('product_id', '=', $id)
            ->update(
                [
                    'name' => $r->input('name'),
                    'price' => $r->input('price'),
                    'description' => $r->input('description'),
                    'genre' => $r->input('genre'),
                    'offers' => $r->input('offers')
                ]
            );

        return redirect('admin/panel/products');
    }

    public function edit_product_form(string $id)
    {
        $product = Product::query()
            ->select('*')
            ->where('product_id', '=', $id)
            ->get()
            ->first();

        return view('admin_edit_product_form', compact('product'));
    }



    public function admin_panel_products()
    {
        $info = Product::query()
            ->select('*')
            ->get();

        return view('admin_panel_product', compact('info'));
    }

    public function delete_product(string $id)
    {

        $product = Product::find($id);

        if ($product) {
            $product->delete();
        }

        return redirect('/admin/panel/product');
    }



    public function edit_user(Request $r, string $id)
    {
        $user = User::where('user_id', '=', $id)
            ->update(
                [
                    'first_name' => $r->input('first_name'),
                    'last_name' => $r->input('last_name'),
                    'mobile' => $r->input('mobile'),
                    'email' => $r->input('email'),
                    'province' => $r->input('province'),
                ]
            );

        return redirect('admin/panel/users');
    }

    public function edit_user_form(string $id)
    {
        $user = User::query()
            ->select('*')
            ->where('user_id', '=', $id)
            ->get()
            ->first();

        return view('admin_edit_user_form', compact('user'));
    }


    public function delete_user(string $id)
    {

        $user = User::find($id);

        if ($user) {
            $user->delete();
        }

        return redirect('/admin/panel/users');
    }


    public function admin_panel_users()
    {
        $info = User::query()
            ->select('*')
            ->get();

        return view('admin_panel_users', compact('info'));
    }

    public function admin_update_order_status(Request $r, string $id)
    {
        Order::where('order_id', '=', $id)
            ->update(
                [
                    'status' => $r->input("status")
                ]
            );


        return redirect('/admin/panel/orders/' . $id) . $r->input("status");
    }
}
