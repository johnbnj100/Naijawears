<?php

namespace App\Http\Controllers;

use App\Models\Adire;
use App\Models\Delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdireController extends Controller
{
    public function createadire(){
        return view('components.createadire', [
            'count' => Delivery::where('user_id',auth()->id())->count('price'),
        ]);
    }

    public function store(Request $request){
        $formfield = $request->validate([
            'name' => 'required',
            'number' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $image = array();
        if($files = $request->file('image')){
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name .'.'. $ext;
                $upload_path = 'public/image1/';
                $image_url = $upload_path.$image_fullname;
                $formfield['image'] = $file->move($upload_path, $image_fullname);
                $image[] = $image_url;
            }
        }

        Adire::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'number' => $request->input('number'),
            'description' => $request->input('description'),
            'image' => implode('|', $image),       
            
        ]);
            return  redirect('/');
    }



}