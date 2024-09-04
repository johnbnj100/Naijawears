<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Models\Delivery;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class DeliveryController extends Controller
{
    public function delivery(Request $request){
        $request->validate([
            'quantity' => 'required',
            'price' => 'required',
        ]);

        Delivery::create([
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'user_id' => Auth::id()
        ]);

        return redirect('/verify');
        }

    public function verify(){
        return view('resource.verify',[
            'delivery' => Delivery::latest('updated_at')->limit(1)->get(),      
            'count' => Delivery::where('user_id', auth()->id())->count('price'),
        ]);
    }

    public function total(Request $request){
        $request->validate([
            'total' => 'required',
        ]);

        Account::create([
            'total' => $request->input('total'),
           
        ]);

        return redirect('/cartpayment');
        }

        public function payment(){
            return view('resource.payment', [
                'account' => Account::latest('updated_at')->limit(1)->get(),
                'count' => Delivery::where('user_id',auth()->id())->count('price'),
            ]);
        }

        public function delete(Delivery $cart){
            $cart->delete();
            return redirect('/cart')->with('message', 'Cart deleted successfully');
        }
    }

    

