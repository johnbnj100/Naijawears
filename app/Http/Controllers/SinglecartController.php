<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;
use App\Models\Singlecart;
use App\Models\Ankara;

class SinglecartController extends Controller
{
    public function singlecart(){
        return view('resource.singlecart', [
            'cart' => Delivery::latest('updated_at')->limit(6)->get(),
            'pricelist' => Delivery::select('price')->get(),
            'quantity' => Delivery::select('quantity')->get(),
        ]);
    }

    public function singlecarts(Request $request){
        $request->validate([
            'price' => 'required',
            'number' => 'required',
            'description' => 'required',
            'name' => 'required',
        ]);

        Singlecart::create([
            'price' => $request->input('price'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'number' => $request->input('number'),
            'image' => $request->input('image'),
        ]);

        if (empty($request->price)) {
            return back()->with('message', 'Cart is empty');
        }else{
            return redirect('/singlecart');
        }
        
        }

        public function cartid($productid){
            return view('resource.cartid', [
                'cartid' => Singlecart::find($productid),
                'ankara' => Ankara::all()
            ]);
        }
}
