<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    public function signin(){
        return view('resource.signin', [
            'count' => Delivery::where('user_id',auth()->id())->count('price'),
        ]);
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logout Successfully');
    }

    //login authentication

    public function authenticate(Request $request){
        $formfield= $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        $formfield['password'] = bcrypt($formfield['password']);

        if (auth()->attempt($formfield)){
            $request->session()->regenerate();

            return redirect('/')->with('message','You are now logged in');
        }
            return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }

}
