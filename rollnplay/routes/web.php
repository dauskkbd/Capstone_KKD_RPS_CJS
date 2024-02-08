<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeliveryController;








//Public Side
// Rendell 
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
Route::get("/contact", function () {
    return view("contact");
});
Route::get("/dashboard", function () {
    return view("dashboard");
});




//User Side

Route::middleware('checkSessionUser')->post('/shop/view/{id}', [OrderController::class, 'push_cart']);
Route::middleware('checkSessionUser')->delete('/shop/view/{id}', [OrderController::class, 'delete_item']); //kevs
Route::middleware('checkSessionUser')->get('/shop/view/', [OrderController::class, 'view_user_cart']);
Route::middleware('checkSessionUser')->post('/shop/checkout', [OrderController::class, 'checkout']);
Route::middleware('checkSessionUser')->get('/shop/product/{id}', [ProductController::class, 'products']);
Route::middleware('checkSessionUser')->get('/shop', [ProductController::class, 'index']);





//Admin Sides
Route::middleware('checkSessionAdmin')->get("/admin/products", [ProductController::class, 'product_create']);
Route::middleware('checkSessionAdmin')->post("/admin/products/", [ProductController::class, 'store']);





//Delivery Side


Route::middleware('checkSessionDelivery')->get('delivery/dashboard', [DeliveryController::class, 'view_orders_dash']);
Route::middleware('checkSessionDelivery')->delete('/delivery/dashboard/{id}', [DeliveryController::class, 'decline_order']);
Route::middleware('checkSessionDelivery')->get('/delivery/{id}', [DeliveryController::class, 'deliveries']);
Route::middleware('checkSessionDelivery')->put('/delivery/status/{id}', [DeliveryController::class, 'update_order_status']);
