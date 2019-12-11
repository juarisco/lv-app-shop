<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(Product $product)
    {
        $images = $product->images;
        return view('admin.products.images.index')->with(compact('product', 'images'));
    }

    public function store(Request $request, Product $product)
    {
        // Guardar la img en nuestro proyecto
        $file = $request->file('photo');
        $path = public_path() . '/images/products';
        $fileName = uniqid() . $file->getClientOriginalName();
        $file->move($path, $fileName);

        // Crear 1 registro en la tabla product_images
        $product->images()->create(['image' => $fileName]);

//        $productImage = new ProductImage();
//        $productImage->image = $fileName;
//        $productImage->product_id = $product->id;
//        $productImage->save();

        return back();

    }
}
