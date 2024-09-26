<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('index', ['framework' => 'Laravel', 'styling' => 'Tailwind CSS']);
});

Route::get('/products', function () {
    return view('products', [
        'products' => Product::all(),
    ]);
});

Route::get('/product/{id}', function ($id) {
    $product = Product::find($id);

    return view('product', ['product' => $product]);
});

Route::get('/contact', function () {
    return view('contact');
});
