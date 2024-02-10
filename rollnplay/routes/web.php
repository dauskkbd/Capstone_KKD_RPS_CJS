<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\AdminController;







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

Route::get("/", function () {
    return view("home");
});
Route::get("/contact", function () {
    return view("contact");
});






//User Side
Route::middleware('checkSessionUser')->get('/shop/view/delivery', [OrderController::class, 'view_delivery']);
Route::middleware('checkSessionUser')->get('/shop/view/', [OrderController::class, 'view_user_cart']);
Route::middleware('checkSessionUser')->put('/shop/view/{id}', [OrderController::class, 'edit_item']);
Route::middleware('checkSessionUser')->post('/shop/view/{id}', [OrderController::class, 'push_cart']);
Route::middleware('checkSessionUser')->delete('/shop/view/{id}', [OrderController::class, 'delete_item']); //kevs
Route::middleware('checkSessionUser')->post('/shop/checkout', [OrderController::class, 'checkout']);
Route::middleware('checkSessionUser')->get('/shop/product/edit/{id}', [ProductController::class, 'edit_products']);
Route::middleware('checkSessionUser')->get('/shop/product/{id}', [ProductController::class, 'products']);
Route::middleware('checkSessionUser')->get('/shop', [ProductController::class, 'index']);






//Admin Sides

Route::middleware('checkSessionAdmin')->get('/admin/panel/orders', [AdminController::class, 'admin_panel_orders']);
Route::middleware('checkSessionAdmin')->get('/admin/panel/orders/{id}', [AdminController::class, 'admin_view_orders']);
Route::middleware('checkSessionAdmin')->put('/admin/panel/orders/status/{id}', [AdminController::class, 'admin_update_order_status']);
Route::middleware('checkSessionAdmin')->get("/admin/products", [ProductController::class, 'product_create']);
Route::middleware('checkSessionAdmin')->post("/admin/products/", [ProductController::class, 'store']);
Route::middleware('checkSessionAdmin')->get('/admin/panel/users', [AdminController::class, 'admin_panel_users']);
Route::middleware('checkSessionAdmin')->get('/admin/panel/products', [AdminController::class, 'admin_panel_products']);
Route::middleware('checkSessionAdmin')->put('/admin/panel/users/edit/{id}', [AdminController::class, 'edit_user']);
Route::middleware('checkSessionAdmin')->get('/admin/panel/users/edit/{id}', [AdminController::class, 'edit_user_form']);
Route::middleware('checkSessionAdmin')->put('/admin/panel/products/edit/{id}', [AdminController::class, 'edit_product']);
Route::middleware('checkSessionAdmin')->get('/admin/panel/products/edit/{id}', [AdminController::class, 'edit_product_form']);
Route::middleware('checkSessionAdmin')->delete('/admin/panel/users/{id}', [AdminController::class, 'delete_user']);
Route::middleware('checkSessionAdmin')->delete('/admin/panel/products/{id}', [AdminController::class, 'delete_product']);

//adding this route to admin side
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);




//Delivery Side


Route::middleware('checkSessionDelivery')->get('delivery/dashboard', [DeliveryController::class, 'view_orders_dash']);
Route::middleware('checkSessionDelivery')->delete('/delivery/dashboard/{id}', [DeliveryController::class, 'decline_order']);
Route::middleware('checkSessionDelivery')->get('/delivery/{id}', [DeliveryController::class, 'deliveries']);
Route::middleware('checkSessionDelivery')->put('/delivery/status/{id}', [DeliveryController::class, 'update_order_status']);
