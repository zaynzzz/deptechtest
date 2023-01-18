<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function index(){
        $data=[
            'content' => 'auth/login'
        ];
        return view("layout/layout",$data);
    }

    public function login(Request $request)
    {
            $email= $request->email;
            $password= $request->password;

            $data = Admin::where('email',$email)->first();
            if($data){
                if(password_verify($password,$data->password)){
                    // return "Password & email benar" ;
                    Session::put('nama_depan',$data->nama_depan);
                    Session::put('email',$data->email);
                    Session::put('id',$data->id);
                    Session::put('login',TRUE);
                    return redirect('dashboard');
                }else{
                    return "Password Salah" ;
                };
            }else{
                return "Email Salah";
            }
    }
    public function logout()
    {
        Session::flush();
    }
}
