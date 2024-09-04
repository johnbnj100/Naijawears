<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment2;

class Payment2Controller extends Controller
{
    public function payments2(Request $request){
        $formfield = $request->validate([
            'name' => 'required',
            'amount' => 'required'
        ]);

        Payment2::create([
            'name' => $request->input('name'),
            'amount' => $request->input('amount'),
           
            
        ]);
            return  redirect('/')->with('message','Save successfully');
    }
}
