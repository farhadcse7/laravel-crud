<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static $products = [];

    public static function getProduct()
    {
        self::$products = [
            0 => [
                'id' => 1,
                'name' => 'Smart T Shirt',
                'price' => 1500,
                'description' => 'Smart T Shirt description',
                'image' => 'img/1.jpg'
            ],
            1 => [
                'id' => 2,
                'name' => 'New Fashionable Shari',
                'price' => 5500,
                'description' => 'New Fashionable description',
                'image' => 'img/2.jpg'
            ],
            2 => [
                'id' => 3,
                'name' => 'New Smart Watch',
                'price' => 2500,
                'description' => 'New Smart Watch description',
                'image' => 'img/3.jpg'
            ],
            3 => [
                'id' => 4,
                'name' => 'Formal Jens Pant',
                'price' => 3500,
                'description' => 'Formal Jens Pant description',
                'image' => 'img/4.jpg'
            ],
            4 => [
                'id' => 5,
                'name' => 'New Sony Mobile',
                'price' => 55500,
                'description' => 'New Sony Mobile description',
                'image' => 'img/5.jpg'
            ],
        ];
        return self::$products;
    }

    public static function getProductById($id)
    {
        foreach (self::getProduct() as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }
    }
}
