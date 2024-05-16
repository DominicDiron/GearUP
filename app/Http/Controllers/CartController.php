<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        if(!Auth::user())
        {
            return redirect('/')->with('message','login first');
        }
        
        $userId = Auth::id();
        $cartItems = Cart::join('products','carts.productId','=','products.id')->select('products.*','carts.*')->where('carts.userId',$userId)->get();  
        return view('carts.cart')->with(['products'=>$cartItems,'userId'=>$userId]);
    }

    public function addToCart($productId,$userId)//OK
    {

        $existingCart = Cart::where('productId', $productId)->where('userId', $userId)->first();
        $product = Product::where('id', $productId)->first();

        if($existingCart)
        {
            return redirect()->back()->withSuccess($product->name.' already added to cart');
        }

        $cart = new Cart();
        $cart->productId = $productId;
        $cart->userId = $userId;
        $cart->qty = 1;

        $cart->save();
        return redirect()->back()->withSuccess($product->name.' added to cart');
    }
    
    public function updateCart(Request $request) // OK
    {
        $id = $request->cartId;
        $quantity = $request->quantity; 
        Cart::where('id', $id)->first()->update(['qty' => $quantity]);

        return ;//response()->json(['message' => 'Cart updated successfully'], 200);
    }

    public function remove(Request $request) //Ok
    {
        $id = $request->cartId;
        Cart::where('id', $id)->first()->delete();
        return ;//response()->json(['message' => 'Item removed successfully'], 200);
    }

    public function checkout()
    {
        $user = Auth::user();
        $cartItems = Cart::join('products','carts.productId','=','products.id')->select('products.*','carts.*')->where('carts.userId',$user->id)->get();  
        return view('carts.checkout')->with(['products'=>$cartItems,'user'=>$user]);
    }

    public function order(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric|min:10',
            'address'=> 'required|string',
        ]); 
        
        $user = User::where('email',$request->email)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->save();

        $cartItems = Cart::join('products','carts.productId','=','products.id')->select('products.*','carts.*')->where('carts.userId',$user->id)->get();
    }
}
