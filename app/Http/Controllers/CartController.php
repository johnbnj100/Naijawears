<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Subtotal;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Adire;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function carts(Request $request){
        $request->validate([
            'price' => 'required',
            'number' => 'required',
            'description' => 'required',
            'name' => 'required',
        ]);

        Cart::create([
            'price' => $request->input('price'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'number' => $request->input('number'),
            'image' => $request->input('image'),
            'user_id' => Auth::id()
        ]);

        if (empty($request->price)) {
            return back()->with('message', 'Cart is empty');
        }else{
            return redirect('/cart');
        }
        
        }

    public function cart(){
        return view('resource.cart', [
            'cart' => Delivery::where('user_id',auth()->id())->get(),
            'userprice' => Delivery::where('user_id',auth()->id())->select('price')->get(),
            'userquantity' => Delivery::where('user_id',auth()->id())->select('quantity')->get(),
            'count' => Delivery::where('user_id',auth()->id())->count('price'),
        ]);
    }

    public function cartid($productid){
        return view('resource.cartid', [
            'cartid' => Cart::find($productid),
            'adire' => Adire::all()
        ]);
    }


}
