<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    //
    public function index(){
        $data = DB::table('Barangs')->paginate(5);
        return view('barang', ['blog'=> $data], ['title'=>'Mobil']);
    }
}