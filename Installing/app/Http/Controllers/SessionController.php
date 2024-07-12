<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index(){
        return view('sesi/index');
    }
    function login(Request $request){
        Session::flash('email', $request->email);

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        
        if(Auth::attempt($infoLogin)){
            //kalau otentikasi sukses
            // return 'sukses';

            return redirect('siswa')->with('success','Login Berhasil');
         }else{
            //kalau otentikasi gagal
            // return 'gagal';
            return redirect('sesi')->withErrors('Username dan password yang dimasukkan tidak valid');
         }
        }

        function logout(){
            Auth::logout();
            return redirect('sesi')->with('success','Logout Berhasil');
        }

        function register(){
            return view('sesi/register');
        }

        function create(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ],[
            'name.required' => 'Name wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukkan email yang valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password) ];
        User::create($data);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        
        if(Auth::attempt($infoLogin)){
            //kalau otentikasi sukses
            // return 'sukses';

            return redirect('siswa')->with('success',Auth::user()->name.' Login Berhasil');
         }else{
            //kalau otentikasi gagal
            // return 'gagal';
            return redirect('sesi')->withErrors('Username dan password yang dimasukkan tidak valid');
         }
            
        }
}