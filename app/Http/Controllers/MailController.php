<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use Mail;
use App\Mail\MailOrder;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $cartItems = Cart::join('products','carts.productId','=','products.id')->select('products.*','carts.*')->where('carts.userId',$user->id)->get();

        try
        {
            Mail::to($user->email)->send(new MailOrder($cartItems));
            Cart::where('userId',$user->id)->delete();
            return redirect('/home')->withSuccess('order confirmed - Check your mail');
        }
        catch(Exception $e)
        {
            return redirect('/home')->withSuccess('Sorry something went wrong');
        }
    }
}
