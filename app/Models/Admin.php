<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Admin extends Model
{
    use HasFactory;



    public function auth($email,$password)
    {
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
}
