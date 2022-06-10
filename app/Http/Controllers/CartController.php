<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class CartController extends Controller
{
    public function Index()
    {
        $products = DB::table('products')->get();
        return view('index', compact('products'));
    }

    public function addCart(Request $request,$id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        if($product != null)
        {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->addCart($product, $id);

            $request->session()->put('Cart', $newCart);
        }
        return view('cart', compact('newCart'));
       
    }
}
