<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function GetLogin() {
        return view('login');
    }

    public function PostLogin(Request $request) {
        $phone=$request->phone;
        $password=$request->password;
        // dd($phone, $password);
        if (Auth::attempt([
            'phone' => $phone,
            'password' => $password
        ])) {
            return redirect() ->route('userlist');
        } else {
            return redirect('/login')->with('thongbao', 'Tên đăng nhập hoặc mật khẩu không đúng!');
        }
    }
}
