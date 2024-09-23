<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ["framework" => "Laravel", "styling" => "Tailwind CSS"]);
});

Route::get('/products', function () {
    return view('products', [
        "products" => [
            ["name" => "Apple 14 Pro", "price" => "999"],
            ["name" => "Samsung Galaxy S21", "price" => "899"],
            ["name" => "Google Pixel 5", "price" => "699"],
            ["name" => "OnePlus 9 Pro", "price" => "899"],
            ["name" => "Xiaomi Mi 11", "price" => "799"]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});