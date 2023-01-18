<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(Session::get('login')==true){
            $id =  Session::get('id');
            $getProfile = Admin::where('id',$id)->first();
            $data=['content'=>'Dashboard/index','prof'=>$getProfile];
            return view("layout.layout",$data);
        }else{
            return "Login terlebih dahulu <br>";
        }
    }
}
