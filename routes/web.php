<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['framework' => 'Laravel', 'styling' => 'Tailwind CSS']);
});

Route::get('/products', function () {
    return view('products', [
        'products' => [['id' => 1, 'name' => 'Apple 14 Pro', 'price' => '999'], ['id' => 2, 'name' => 'Samsung Galaxy S21', 'price' => '899'], ['id' => 3, 'name' => 'Google Pixel 5', 'price' => '699'], ['id' => 4, 'name' => 'OnePlus 9 Pro', 'price' => '899'], ['id' => 5, 'name' => 'Xiaomi Mi 11', 'price' => '799']],
    ]);
});

Route::get('/product/{id}', function ($id) {
    $products = [['id' => 1, 'name' => 'Apple 14 Pro', 'price' => '999'], ['id' => 2, 'name' => 'Samsung Galaxy S21', 'price' => '899'], ['id' => 3, 'name' => 'Google Pixel 5', 'price' => '699'], ['id' => 4, 'name' => 'OnePlus 9 Pro', 'price' => '899'], ['id' => 5, 'name' => 'Xiaomi Mi 11', 'price' => '799']];

    $product = Arr::first($products, fn($product) => $product['id'] == $id);

    return view('product', ['product' => $product]);
});

Route::get('/contact', function () {
    return view('contact');
});
