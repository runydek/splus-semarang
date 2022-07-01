<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataKlasteringController extends Controller
{
    public function index()
    {
        return view('klasterings.dataklastering');
    }

    public function create()
    {
        return view('klasterings.createdk');
    }
}
