<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::all();
        $data = ['admin'=>$admin];
        return $data;
    }
    public function create(Request $request)
    {
        $admin = new Admin();
        $admin->nama_depan = $request->nama_depan;
        $admin->nama_belakang = $request->nama_belakang;
        $admin->email = $request->email;
        $admin->tgl_lahir = $request->tgl_lahir;
        $admin->jenis_kelamin = $request->jenis_kelamin;
        $admin->password = Hash::make($request->password);
        $admin->save();
        return "Data Tersimpan";
    }
    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->nama_depan = $request->nama_depan;
        $admin->nama_belakang = $request->nama_belakang;
        $admin->email = $request->email;
        $admin->tgl_lahir = $request->tgl_lahir;
        $admin->jenis_kelamin = $request->jenis_kelamin;
        $admin->password = Hash::make($request->password);
        $admin->save();
        return "Data Tersimpan";
    }
    public function delete($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        
        return "Data terhapus";
    }
    public function detail($id)
    {
        $admin = Admin::find($id);
        return $admin;
    }

    public function profile()
    {
        $id =  Session::get('id');
        $getProfile = Admin::where('id',$id)->first();
        return view('layout.layout',['content'=>'profile/edit','prof'=>$getProfile]);
    }

}
