<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Misalnya, kamu mengirim data produk secara statis. Dalam praktiknya, kamu bisa mengambilnya dari database.
        $product = [
            'name' => 'Sneaker Bagus',
            'price' => 'Rp300.000',
            'description' => 'Deskripsi singkat tentang produk ini.',
        ];

        return view('products', ['product' => $product]);
    }
}
