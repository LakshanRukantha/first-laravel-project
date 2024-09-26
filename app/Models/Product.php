<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Product
{
    public static function all(): array
    {
        return [['id' => 1, 'name' => 'Apple 14 Pro', 'price' => '999'], ['id' => 2, 'name' => 'Samsung Galaxy S21', 'price' => '899'], ['id' => 3, 'name' => 'Google Pixel 5', 'price' => '699'], ['id' => 4, 'name' => 'OnePlus 9 Pro', 'price' => '899'], ['id' => 5, 'name' => 'Xiaomi Mi 11', 'price' => '799']];
    }

    public static function find(int $id): array
    {
        return Arr::first(static::all(), fn($product) => $product['id'] == $id);
    }
}
