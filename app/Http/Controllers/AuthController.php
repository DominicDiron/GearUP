<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');   
    }

    public function register(Request $request)
    {
        
        if($user = User::where('email',$request->email)->first())
        {
            Auth::login($user);
            return redirect('/home')->with('success', 'You already registered with our site');
        }
        else
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
            ]);
        
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();

            Auth::login($user);
        
            return redirect('/home')->with('success', 'User registered and logged in successfully');        
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
