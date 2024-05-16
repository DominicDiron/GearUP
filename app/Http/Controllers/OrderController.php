<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\User;
use App\Models\Cart;



use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
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

        foreach($cartItems as $item)
        {
            $order = new Order();
            $order->userId = $item->userId;
            $order->productId = $item->productId;
            $order->price = $item->price;
            $order->quantity = $item->qty;
            $order->amount = ($item->price * $item->qty);
            $order->save();
        }

        // $orderDetails = [
        //     'user_name'=>$user->name,
        //     'items'=>$cartItems,
        //     'amount'=>

        // ];
        // dd($orderDetails);
        return redirect('/send');
    }
}
