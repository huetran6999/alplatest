<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function show() {
        $users = User::all();
        return response()->json([
            'data'=>$users,
            'status_code'=>200
        ]);
    }

    public function store(UserRequest $request) {
        $user = new User();
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = bcrypt($request->password);

        $user->save();
        return response()->json([
            "message" => "student record created"
          ], 201);
        
    }

    public function destroy($id) {
        if (Auth::id() == $id) {
            return response()->json([
                "message" => "Không được xoá chính mình"
              ], 202);
        } else {
            $user = User::find($id);
            $user->delete();
            return response()->json([
                "message" => "Xoá nhân viên thành công"
              ], 202);
        }
    }
}
