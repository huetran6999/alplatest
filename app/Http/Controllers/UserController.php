<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function ShowUser() {
        $users = User::select('id', 'username', 'phone', 'password', 'address')->get();
        // dd($users);
        return view('dashboard', compact('users'));
    }

    public function create() {
        $users = User::all();
        return view('create', compact('users'));
    }

    public function store(UserRequest $request) {
        $user = new User();
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = bcrypt($request->password);

        $user->save();

        return redirect()->route('userlist')->with('message', 'Tạo người dùng thành công!');
    }

    public function destroy($id) {
        if (Auth::id() == $id) {
            return redirect()->back()->with('fail', 'Không thể xoá chính mình!!!');
        } else {
            $user = User::find($id);
            $user->delete();
            return redirect()->back()->with('del-success', 'Xoá người dùng thành công');
        }
    }
}
