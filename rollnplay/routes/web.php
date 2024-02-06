<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;


Route::get("/login", [UserController::class, "show_login"]);
Route::post("/login", [UserController::class, "login"]);

Route::get('/generate_user', [UserController::class, "generate_user"]);


Route::get("/about", function () {
    return view("about");
});

Route::get("/login", function () {
    return view("login");
});

Route::get("/register", function () {
    return view("register");
});

Route::get("/home", function () {
    return view("home");
});

Route::post('/shop/checkout', [OrderController::class, 'show_checkout']);
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
