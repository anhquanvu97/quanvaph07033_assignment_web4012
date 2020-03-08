<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Arr;
use Auth;

class AuthController extends Controller
{
    public function getLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data = Arr::except($request->all(), ['_token']);
        $result = Auth::attempt($data);

        return redirect()->route('home.index');
    }
    
    public function getRegistrationForm(){
        return view('Auth.registration');
    }

    public function Registration(Request $request){
        // lưu lại tk và login
        $login=Arr::except($request->all(), ['_token','role','is_active','created_at','updated_at','name','phone','date_of_birth']);
        // mã hóa pass và thêm vào bảng
        $data = Arr::except($request->all(), ['_token']);
        $data['role']=1;
        $data['is_active']=1;
        $data['password']=bcrypt($data['password']);
        User::create($data);

        //tự động đăng nhập
        Auth::attempt($login);
        return redirect('home');

    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
