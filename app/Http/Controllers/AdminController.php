<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function add()
    {
        return view('admin.add');
    }
    public function login(){
        return view('auth.login');
    }
    public function registration(){
        return view('auth.registration');
    }
    public function customLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
           return view('welcome');
        }
        return redirect("auth.login")->withSuccess('Tài khoản hoặc mật khẩu không chính xác');
    }
    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return view('welcome');
    }
}