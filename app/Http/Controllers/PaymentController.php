<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Delivery;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Payment2;

class PaymentController extends Controller
{
    public function payments(Request $request){
        $formfield = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'apartment' => 'required',
            'state' => 'required',
            'city' => 'required',
            'phone' => 'required',
        ]);

        Payment::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'apartment' => $request->input('apartment'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'phone' => $request->input('phone'),
            
        ]);
            return  redirect('/payment2')->with('message','Save successfully');
    }

    public function payment2(){
        return view('resource.payment2', [
            'account' => Account::latest('updated_at')->limit(1)->get(),
            'count' => Delivery::where('user_id',auth()->id())->count('price'),
        ]);
    }

    public function cartpayment(){
        return view('resource.cartpayment', [
            'count' => Delivery::where('user_id',auth()->id())->count('price'),
        ]);
    }


}
