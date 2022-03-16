<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function index(){
        $data = Barang::all();
        return view('barang', ['blog'=> $data], ['title'=>'Mobil']);
    }
}