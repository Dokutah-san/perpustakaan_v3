<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Data_bukuController extends Controller
{
    public function index(){
        return view('buku/data_buku');
    }
}
