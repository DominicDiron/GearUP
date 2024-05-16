<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if(!Auth::user())
        {
            return redirect('/')->with('message','login first');
        }

        $products = Product::all();
        $user = Auth::user();
        return view('products.index',['products'=>$products,'user'=>$user]);
    }

    public function show($id)
    {
        $product = Product::where('id',$id)->first();

        return view('products.show',['product'=>$product]);
    }
}
