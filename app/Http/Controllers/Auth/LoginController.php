<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(){
        return view("auth.login");
    }
    
    public function login(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'telephone' => 'required|string|max:15',
            'password' => 'required|string|min:8',
        ]);
        
        if ($validator->fails()) {
            return redirect()->intended("/#auth")->withErrors($validator)->withInput();
        }
        $credentials = $request->only('telephone', 'password');

        if (Auth::attempt($credentials)) {
            switch (Auth::user()->role_id) {
                case 2:
                    return redirect()->route("dashcompany");
                case 3:
                    return redirect()->route("dashadmin");
                default:
                    return redirect()->route('home');
            }
        } else {
            Alert::toast("Les informations d'identification ne correspondent pas.","error");
            return redirect()->intended('/#auth')->withErrors([
                'telephone' => 'Les informations d\'identification ne correspondent pas.',
            ])->withInput()->with('login');
        }
    }
    public function forgot(){
        return view("auth.supplement.forgotpassword");
    }
}
