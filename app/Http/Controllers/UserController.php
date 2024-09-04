<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function signup(){
        return view('resource.signup', [
            'count' => Delivery::where('user_id',auth()->id())->count('price'),
        ]);
    }

    public function store(Request $request){
        $formfield = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6',
            'phone' => 'required|min:11'
        ]);

            //Hash Password
            $formfield['password'] = bcrypt($formfield['password']);

            //Create User
            $user = User::create($formfield);

            //login
            auth()->login($user);

            return redirect('/')->with('message', 'Signup Successfully');

    }

    //login

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
        $form= $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($form)){
            $request->session()->regenerate();

            return redirect('/')->with('message','You are now logged in');
        }
            return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
        
         
    }

     

}
