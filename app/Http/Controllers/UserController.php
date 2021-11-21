<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Validasi Users';
        $data['users'] = User::all();
        return view('pages.users.users',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|min:3|max:255|unique:users',
            'fullname' =>'required',
            'email' =>'required|email:dns|unique:users',
            'password' => 'required|min:8',
        ]);
        $credentials['username'] = strtolower($request->username);
        $credentials['password'] =  Hash::make($credentials['password']);
        $credentials['level']='user';
        $credentials['status']='waiting';

        try {
            User::create($credentials);
            return redirect('/login')->with('success','Registrasi Berhasil, hubungi admin untuk verifikasi akun kamu');
    
        } catch (QueryException $e) {
            return redirect()->back()->with('error','Registrasi Gagal'.$e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::findOrFail($request->id);
        try {
            $user->update($request->all());
            // return redirect('/users')->with('success','User berhasil diupdate');
            return redirect()->back()->with('success','User berhasil diupdate');
        } catch (QueryException $e) {
            return redirect()->back()->with('error','Gagal Update '.$e->errorInfo);
        }
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
