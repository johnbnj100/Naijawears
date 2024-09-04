<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtotal;
use App\Models\Delivery;
use Illuminate\Support\Facades\Auth;

class SubtotalController extends Controller
{
    public function verifycart(){
        return view('resource.verifycart', [
            'usertotals' => Subtotal::where('user_id',auth()->id())->sum('total'),
            'count' => Delivery::where('user_id',auth()->id())->count('price'),
        ]);
    }

    public function subtotal(Request $request){
        $request->validate([
            'price' => 'required',
            'quantity' => 'required',
            'total' => 'required',
            
        ]);

        Subtotal::create([
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'total' => $request->input('total'),
            'user_id' => Auth::id()
        ]);
            return redirect('/verifycart');
        }
    
}
