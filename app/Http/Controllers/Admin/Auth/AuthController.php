<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function getLogin(){
        return view("backend/login");
    }
    public function postLogin(LoginRequest $loginRequest){
        // $rules = [
        //     "email"=>"required|email",
        //     "password"=>"required|min:3|max:6",
        // ];
        // $messages = [
        //     "email.required"=>"Email không được để trống! ",
        //     "email.email"=>"Email không hợp lệ! ",
        //     "password.required"=>"Password không được để trống! ",
        //     "password.min"=>"Password phải nhiều hơn 3 kí tự ! ",
        //     "password.max"=>"Password tối đa 6 kí tự ! ",
        // ];
        // $loginRequest->validate($rules,$messages);

        // $users =DB::table('users')
        //     ->where("email", $loginRequest->email)
        //     ->where("password", $loginRequest->password)
        //     ->get()
        //     ->all();

        if(Auth::attempt(['email' => $loginRequest->email,'password' => $loginRequest->password])){
               return redirect("/admin");
        }
        else{
            return redirect()->back()->withErrors("Tài khoản không hợp lệ !!!");
        }
    }
}
