<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'  => 'required',
            'urls'   => 'required|array',
            'urls.*' => 'nullable|url'
        ]);

        $product = Product::create([
            'title' => $request->input('title')
        ]);

        foreach ($request->input('urls') as $url) {
            $product->urls()->create([
                'link' => $url
            ]);
        }

        return back();
    }
}
