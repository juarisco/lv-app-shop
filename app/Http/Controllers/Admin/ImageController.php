<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function index(Product $product)
    {
        $images = $product->images()->orderBy('featured', 'desc')->get();

        return view('admin.products.images.index')->with(compact('product', 'images'));
    }

    public function store(Request $request, Product $product)
    {
        // Guardar la img en nuestro proyecto
        $file = $request->file('photo');
        $path = public_path() . '/images/products';
        $fileName = uniqid() . $file->getClientOriginalName();
        $moved = $file->move($path, $fileName);

        // Crear 1 registro en la tabla product_images
        if ($moved) {
            $product->images()->create(['image' => $fileName]);

//        $productImage = new ProductImage();
//        $productImage->image = $fileName;
//        $productImage->product_id = $product->id;
//        $productImage->save();
        }

        return back();
    }

    public function destroy(Request $request, Product $product)
    {
        // Eliminar el archivo
        $productImage = $product->images()->where('id', $request->image_id)->first();

        if (substr($productImage->image, 0, 4) === 'http') {
            $deleted = true;
        } else {
            $fullPath = public_path() . '/images/products/' . $productImage->image;
            $deleted = File::delete($fullPath);
        }

        // Eliminar el registro de la imágen en la BD
        if ($deleted)
            $productImage->delete();

        return back();
    }

    public function select(Product $product, ProductImage $productImage)
    {
//        dd($product->images()->where('featured', true)->first());

        ProductImage::where('product_id', $product->id)->update([
            'featured' => false
        ]);

        $productImage->update([
            'featured' => true
        ]);

        return back();
    }
}
