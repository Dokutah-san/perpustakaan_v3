<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index() {
        return view ('login');
    }

    public function proseslogin(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
        ]);

        $user = UsersModel::where([
            'username'=> $request->username
        ])->get();

        if (count($user) > 0) {
            if(Hash::check($request->password,$user[0]->password)){
                $request->session()->put('login',1);
                $request->session()->put('username',$user[0]->username);
                $request->session()->put('level',$user[0]->level);
                return Redirect('/dashboard');
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/');
        }
    }

    public function logout(Request $request){
        $request->session()->forget(['login','username','level']);
        $request->session()->flush();
        return redirect('/');
    }
}
