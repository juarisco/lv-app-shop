<?php

namespace App\Http\Controllers;

use App\CartDetail;
use Illuminate\Http\Request;

class CartDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $cartDetail = new CartDetail();
        $cartDetail->cart_id = auth()->user()->cart->id;
        $cartDetail->product_id = $request->product_id;
        $cartDetail->quantity = $request->quantity;
        $cartDetail->save();

        $notification = 'El producto se ha cargado a tu carito de compras exitosamente!';

        return back()->with(compact('notification'));
    }

    public function destroy(Request $request)
    {
        $cartDetail = CartDetail::findOrFail($request->cart_detail_id);

        if ($cartDetail->cart_id == auth()->user()->cart->id)
            $cartDetail->delete();

        $notification = 'El producto se ha eliminado del carito de compras correctamente.';

        return back()->with(compact('notification'));
    }
}
