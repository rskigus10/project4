<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    function showLogin(){
        return view("template.login");
    }

    function showRegister(){
        return view("template.register");
    }

    function loginProcess(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect("template")->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Silahkan cek email dan password anda');
        }
    }

    function registerProcess(){
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();
        
            return redirect("login")->with('success', 'Data Berhasil Dtambahkan');
    }

    function forgotPassword(){

    }

    function logout(){

    }

    function CreateanAccount(){

    }

}