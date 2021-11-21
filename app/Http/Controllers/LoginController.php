<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        $data['title']='Login';
        return view('layouts.auth.loginmain',$data);
    }
    public function authenticate(Request $request)
    {
        $request['username']= strtolower($request->username);
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
       
        if (Auth::attempt($credentials)) {
          
            $user = User::where('username',$request->username)->first();

            if ($user && $user->status != 'active') {
                // return back()->with('loginError','Akun anda masih dalam proses verifikasi, hubungi admin untuk informasi lebih detail');
                
                Auth::logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();

                return redirect()->back()->with('success','Akun Belum Aktif');

            } else {
                
                $request->session()->regenerate();
                
                return redirect()->intended('/dashboard');
            }
        }

        return redirect()->back()->with('success','Username / Password Salah');
    }
    public function regist(){
        $data['title'] =  'Regist';
        return view('layouts.auth.register',$data);
    }

   
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success','Anda Sudah Logout');
    }
}
