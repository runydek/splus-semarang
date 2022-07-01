<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataProdukController extends Controller
{
    public function index()
    {
        return view('produks.dataproduk');
    }

    public function create()
    {
        return view('produks.createdp');
    }
}
