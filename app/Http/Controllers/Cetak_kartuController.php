<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cetak_kartuController extends Controller
{
    public function index(){
        return view('anggota/cetak_kartu');
    }
}