<?php

namespace App\Http\Controllers;

use App\Models\User;
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

                return back()->with('loginError','Akun Belum Aktif');

            } else {
                
                $request->session()->regenerate();
                
                return redirect()->intended('/dashboard');
            }
        }

        return back()->with('loginError','Username / Password Salah');
    }
    public function regist(){
        $data['title'] =  'Regist';
        return view('layouts.auth.register',$data);
    }
    public function register(Request $request){
        $credentials = $request->validate([
            'username' => 'required|min:3|max:255|unique:users',
            'fullname' =>'required',
            'email' =>'required|email:dns',
            'password' => 'required|min:8',
        ]);
        $credentials['password'] =  Hash::make($credentials['password']);
        $credentials['level']='user';
        $credentials['status']='waiting';
        User::create($credentials);

        return redirect('/login')->with('success','Registrasi Berhasil, hubungi admin untuk verifikasi akun kamu');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success','Anda Sudah Logout');
    }
}
