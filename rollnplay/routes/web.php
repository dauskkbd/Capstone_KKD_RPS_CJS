<?php

use Illuminate\Support\Facades\Route;


Route::get("/test", function () {
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

Route::get("/shop", function () {
    return view("shop");
});

Route::get("/about", function () {
    return view("about");
});

Route::get("/dashboard", function () {
    return view("dashboard");
});
