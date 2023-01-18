<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $data=[
            'content'=>'Kategori/index',
            'kategori'=>$kategori,
        ];
        return view('layout.layout',$data);
    }
    public function vw_create()
    {
        $data=[
            'content'=>'Kategori/create',
        ];
        return view('layout.layout',$data);
    }
    public function create(Request $request)
    { 
        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->deskripsi_kategori = $request->deskripsi_kategori;
        $kategori->save();
        return "Data Tersimpan";
    }
    
}
