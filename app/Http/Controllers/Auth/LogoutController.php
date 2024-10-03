<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        // $userName = Auth::user()->name;

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Alert::toast('deconécté', 'info');

        return redirect('/');
    }
}
