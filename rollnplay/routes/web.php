<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeliveryController;


Route::get("/login", [UserController::class, "show_login"]);
Route::post("/login", [UserController::class, "login"]);

Route::get("/logout", [UserController::class, "logout"]);

Route::get("/register", [UserController::class, "show_register"]);
Route::post("/register", [UserController::class, "register"]);




Route::get("/about", function () {
    return view("about");
});


Route::get("/home", function () {
    return view("home");
});


Route::post('/shop/view/{id}', [OrderController::class, 'push_cart']);
Route::get('/shop/view/', [OrderController::class, 'view_user_cart']);
Route::post('/shop/checkout', [OrderController::class, 'checkout']);
Route::get('/shop/product/{id}', [ProductController::class, 'products']);
Route::get('/shop', [ProductController::class, 'index']);

Route::get("/contact", function () {
    return view("contact");
});

Route::get("/dashboard", function () {
    return view("dashboard");
});

//admin kuno

Route::get("/admin/products", [ProductController::class, 'product_create']);
Route::post("/admin/products/", [ProductController::class, 'store']);


//delivery kuno

Route::get('delivery/dashboard', [DeliveryController::class, 'view_orders_dash']);
Route::delete('/delivery/dashboard/{id}', [DeliveryController::class, 'decline_order']);
Route::get('/delivery/{id}', [DeliveryController::class, 'deliveries']);
Route::put('/delivery/status/{id}', [DeliveryController::class, 'update_order_status']);
