<?php

namespace App\Http\Controllers;
use App\Models\Suplier;

use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function index(){
        $data = Suplier::all();
        return view('suplier', ['blog'=> $data], ['title'=>'Suplier']);
    }
}

