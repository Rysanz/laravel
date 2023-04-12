<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view("home", ["mahasiswas" => Mahasiswa::all()]);
    }
    public function edit($id){
        $ubah = mahasiswa::find($id);
        return view("update",compact('ubah'),["mahasiswas" => mahasiswa::all()]);
    }
    public function store(Request $request)
    {
        $tambah = new Mahasiswa;

        $tambah->nim = $request->nim;
        $tambah->nama = $request->nama;
        $tambah->tgllahir = $request->tgllahir;
        $tambah->alamat = $request->alamat;
        $tambah->save();
 
        return redirect('/')->with('toast_success','Data Ditambahkan');
    }
    public function change(Request $request,$id)
    {
        $tambah = Mahasiswa::find($id);
 
        $tambah->nim = $request->nim;
        $tambah->nama = $request->nama;
        $tambah->tgllahir = $request->tgllahir;
        $tambah->alamat = $request->alamat;
        $tambah->save();
 
        return redirect('/')->with('toast_success','Data Ditambahkan');
    }
    public function delete($id)
    {
        $del = mahasiswa::find($id);
        return view("Delete",compact("del"),["mahasiswas" => mahasiswa::all()]);
    }
    public function hapuse($id)
    {
        $hapus = Mahasiswa::find($id);
        $hapus->delete();
 
        return redirect('/')->with('success','Data Dihapus');
    }
}
