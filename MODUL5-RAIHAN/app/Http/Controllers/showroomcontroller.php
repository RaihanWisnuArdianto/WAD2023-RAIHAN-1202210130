<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showroomcontroller extends Controller
{
    //
    public function create(){
        return view('showroom.create');
    }
    public function store(Request $request){
        $data = $request->all();

        \App\Models\showroom_mobil::create([
            'nama_mobil' => $request->nama,
            'brand_mobil' =>$request->brand,
            'warna_mobil' => $request->warna,
            'tipe_mobil' => $request->tipe,
            'harga_mobil' => $request->harga,
        ]);

        return redirect()->route('showroom.index');
    }
    public function index(){
        $showroom = \App\Models\showroom_mobil::all();

        return view('showroom.index', compact('showroom'));
    }
}
