<?php

namespace App\Http\Controllers;
use App\Models\Suplier;

use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function index(){
        $data = Suplier::paginate(5);
        return view('suplier', ['blog'=> $data], ['title'=>'Suplier']);
    }
}

