<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function edit_products(string $id)
    {
        $products = Product::query()
            ->select('*')
            ->where('product_id', '=', $id)
            ->get()
            ->first();

        return view('product_edit', compact('products'));
    }

    public function store(Request $r)
    {
        $p = new Product;
        $p->name = $r->input('name');
        $p->w_price = $r->input('w_price');
        $p->price = $r->input('price');
        $p->description = $r->input('description');
        $p->genre = $r->input('genre');
        $p->stock = $r->input('stock');
        $p->offers = $r->input('offers');
        if ($r->file('image')) {
            $file = $r->file('image');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('images/'), $filename);
            $p->image = $filename;
        }
        $p->save();

        return redirect('admin/products');
    }

    public function product_create()
    {
        return view('admin_product_create');
    }

    public function products(string $id)
    {
        $products = Product::query()
            ->select('*')
            ->where('product_id', '=', $id)
            ->get();

        return view('/product_show', compact('products'));
    }

    public function index()
    {
        $products = Product::query()
            ->select('*')
            ->get();
        return view('shop', compact('products'));
    }
}
