<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Input(){
            return view('admin.Input');
    }
    function Pelanggan(){
        $data = pelanggan::all();
        //dd($data);
        return view('admin.Pelanggan',compact('data'));
}
function Seni(){
    return view('admin.Seni');
}
function Transaksi(){
    return view('admin.Transaksi');
}
}
