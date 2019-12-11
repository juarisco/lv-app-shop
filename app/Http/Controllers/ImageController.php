<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(Product $product)
    {
        $images = $product->images;
        return view('admin.products.images.index')->with(compact('product', 'images'));
    }

    public function store()
    {
        
    }
}
