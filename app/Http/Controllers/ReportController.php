<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Klaster;



class ReportController extends Controller
{
    public function index()
    {
        $data = Klaster::all();
        return view('klasterings.report', compact('data'));
    }

    public function klaster($id)
    {
         $data = Klaster::with('reports')->find($id);
         $c1 = $data->reports()->where('cluster', 'C1')->get();
         $c2 = $data->reports()->where('cluster', 'C2')->get();
         $c3 = $data->reports()->where('cluster', 'C3')->get();

         $result = [
            $c1,
            $c2,
            $c3,
         ];

        return view('klasterings.reportcluster', compact('result'));
    }
}
