<?php

namespace App\Http\Controllers; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use  App\Models\UsersModel;

class DatausersController extends Controller
{
    public function index(){
        $users = UsersModel::get();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('users/data_users',compact('users'));
    }
    public function add(){
        return view('users/useradd');
    }
    public function delete($id){
        UsersModel::where("user_id",$id)->delete();
        return redirect("/data_users")->with('success','Data Berhasil Dihapus');
    }
    public function edit($id){
        $users = UsersModel::where('user_id',$id)->get();
        return view ('users/useredit',compact('users'));
    }
    public function userstore(Request $request){
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'level' => 'required'
        ]);

        UsersModel::insert([
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'level'=>$request->level,
        ]);

        return redirect("/data_users");
    }
    public function editsave(Request $request,$id){
        $request->validate([
            'username' => 'required',
            'level' => 'required'
        ]);

        if($request->password == null){
            UsersModel::where('user_id',$id)->update([
                'username'=>$request->username,
                'level'=>$request->level,
            ]);
        }else {
            UsersModel::where('user_id',$id)->update([
                'username'=>$request->username,
                'password'=>Hash::make($request->password),
                'level'=>$request->level,
            ]);
        }

        return redirect('/data_users');
    }

}
