<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        $data = Pegawai::paginate(5);
        return view('pegawai', ['blog'=> $data], ['title'=>'Pegawai']);
    }  
}
