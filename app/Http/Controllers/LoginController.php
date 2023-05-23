<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index() {
        return view ('login');
    }

    public function proseslogin(Request $request) {
        if(Auth::Attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])) {
            $request->session()->put('username' , Auth::user()->username);
            $request->session()->regenerate();
            return redirect('/dashboard');
        }else{
            return redirect('/');
        }
    }
    
    public function logout(Request $request){
        Auth::logout();
        $request->session()->forget('username');
        $request->session()->invalidate();
        return redirect('/');
    }
}
