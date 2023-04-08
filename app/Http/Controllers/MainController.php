<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __invoke()
    {
        $products = Product::get();

        return view('home.index', [
            'products' => $products
        ]);
    }
}
