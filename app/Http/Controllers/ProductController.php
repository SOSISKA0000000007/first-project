<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Получаем все продукты из базы данных
        $products = Product::all();

        // Передаём их в представление
        return view('products.index', compact('products'));
    }
}
