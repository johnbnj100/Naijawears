<?php

namespace App\Http\Controllers;

use App\Models\Adire;
use Illuminate\Http\Request;
use App\Models\Ankara;
use App\Models\Lace;
use App\Models\Wears;
use App\Models\Location;
use App\Models\Delivery;
use Illuminate\Support\Facades\Auth;


class WearsController extends Controller
{
    public function index(){
        return view('resource.index',[
            'ankara' => Ankara::latest()->limit(8)->get(),
            'adire' => Adire::latest()->limit(8)->get(),
            'lace' => Lace::latest()->limit(8)->get(),
            'count' => Delivery::where('user_id',auth()->id())->count('price'),
        ]);
    }

    public function product($product){
        return view('resource.products', [
            'ankara' => Ankara::find($product),
            'location' => Location::all(),
            'adire' => Adire::all(),
            'count' => Delivery::where('user_id',auth()->id())->count('price'),
        ]);
    }

    public function product2($product2){
        return view('resource.adire', [
            'adire' => Adire::find($product2),
            'location' => Location::all(),
            'lace' => Lace::all(),
            'count' => Delivery::where('user_id',auth()->id())->count('price'),
        ]);
    }

    public function product3($product3){
        return view('resource.lace', [
            'lace' => Lace::find($product3),
            'location' => Location::all(),
            'ankara' => Ankara::all(),
            'count' => Delivery::where('user_id',auth()->id())->count('price'),
        ]);
    }

    public function contact(){
        return view('resource.contact');
    }

    public function privacy(){
        return view('resource.privacy');
    }

}
