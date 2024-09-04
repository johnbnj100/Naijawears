<?php

namespace App\Http\Controllers;

use App\Models\Adire;
use App\Models\Ankara;
use App\Models\Lace;
use App\Models\Delivery;
use Illuminate\Support\Facades\Auth;
use App\Models\Wears;
use Illuminate\Http\Request;

class AllproductsController extends Controller
{
    public function allproducts(){
        return view('resource.allproducts',[
            'ankara0' => Ankara::where('id', '1')->get(),
            'ankara' => Ankara::where('id', '2')->get(),
            'ankara1' => Ankara::where('id', '3')->get(),
            'ankara2' => Ankara::where('id', '4')->get(),
            'ankara3' => Ankara::where('id', '5')->get(),
            'ankara4' => Ankara::where('id', '6')->get(),
            'ankara5' => Ankara::where('id', '7')->get(),
            'ankara6' => Ankara::where('id', '8')->get(),
            'ankara7' => Ankara::where('id', '9')->get(),
            'ankara8' => Ankara::where('id', '10')->get(),
            'ankara9' => Ankara::where('id', '11')->get(),
            'ankara10' => Ankara::where('id', '12')->get(),
            'ankara11' => Ankara::where('id', '13')->get(),
            'ankara12' => Ankara::where('id', '14')->get(),
            'ankara13' => Ankara::where('id', '15')->get(),
            'ankara14' => Ankara::where('id', '16')->get(),
            'count' => Delivery::where('user_id', auth()->id())->count('price'),
        ]);
    }

    public function allproducts2(){
        return view('resource.allproducts2',[
            'adire1' => Adire::where('id', '1')->get(),
            'adire2' => Adire::where('id', '2')->get(),
            'adire3' => Adire::where('id', '3')->get(),
            'adire4' => Adire::where('id', '4')->get(),
            'adire5' => Adire::where('id', '5')->get(),
            'adire6' => Adire::where('id', '6')->get(),
            'adire7' => Adire::where('id', '7')->get(),
            'adire8' => Adire::where('id', '8')->get(),
            'adire9' => Adire::where('id', '9')->get(),
            'adire10' => Adire::where('id', '10')->get(),
            'adire11' => Adire::where('id', '11')->get(),
            'adire12' => Adire::where('id', '12')->get(),
            'adire13' => Adire::where('id', '13')->get(),
            'adire14' => Adire::where('id', '14')->get(),
            'adire15' => Adire::where('id', '15')->get(),
            'adire16' => Adire::where('id', '16')->get(),
            'count' => Delivery::where('user_id',auth()->id())->count('price'),
        ]);
    }

    public function allproducts3(){
        return view('resource.allproducts3',[
            'lace1' => Lace::where('id', '1')->get(),
            'lace2' => Lace::where('id', '2')->get(),
            'lace3' => Lace::where('id', '3')->get(),
            'lace4' => Lace::where('id', '4')->get(),
            'lace5' => Lace::where('id', '5')->get(),
            'lace6' => Lace::where('id', '6')->get(),
            'lace7' => Lace::where('id', '7')->get(),
            'lace8' => Lace::where('id', '8')->get(),
            'lace9' => Lace::where('id', '9')->get(),
            'lace10' => Lace::where('id', '10')->get(),
            'lace11' => Lace::where('id', '11')->get(),
            'lace12' => Lace::where('id', '12')->get(),
            'lace13' => Lace::where('id', '13')->get(),
            'lace14' => Lace::where('id', '14')->get(),
            'lace15' => Lace::where('id', '15')->get(),
            'lace16' => Lace::where('id', '16')->get(),
            'count' => Delivery::where('user_id',auth()->id())->count('price'),
        ]);
    }
}
