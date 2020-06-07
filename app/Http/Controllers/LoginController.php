<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;

class LoginController extends Controller
{
    public function login(){
        $employee = Employee::all();
        return view('admin.login', array('employees' => $employee));
    }

    public function post_login(Request $request){
        if(Auth::attempt($request->only('tai_khoan','mat_khau'))){
            return redirect()->route('admin.index');
        }else{
            return redirect()->back;
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
