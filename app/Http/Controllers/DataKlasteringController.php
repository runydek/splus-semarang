<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Clustering;
use Illuminate\Support\Facades\DB;
use Phpml\Clustering\KMeans;
use App\Models\DataProduk;
use App\Models\Klaster;
use App\Models\Report;

class DataKlasteringController extends Controller
{



    public function index()
    {
        $data = DB::table('data_produks')
        ->select('id','jumtransaksi', 'jumterjual', 'rtpenjual')
        ->get();
        $array = collect($data)->map(function($item) {
            return collect($item)->values()->all();
        })->all();

        $data = DB::table('data_produks')
        ->select('jumtransaksi', 'jumterjual', 'rtpenjual')
        ->get();
        $array1 = collect($data)->map(function($item) {
            return collect($item)->all();
        })->all();

        $kmeans = new KMeans(3);

        $hasil = ($kmeans->cluster($array));

        $c1 = [];
        $c2 = [];
        $c3 = [];

        foreach ($hasil as $key => $cluster) {
            foreach($cluster as $sample) {
                $barang = DB::table('data_produks')->find($sample[0]);
                if ($key == 0) {
                    array_push($c1, $barang);
                }
                else if($key == 1) {
                    array_push($c2, $barang);
                }
                else if($key == 2) {
                    array_push($c3, $barang);
                }
            }
        };


        $clusters = [
            $c1,
            $c2,
            $c3
        ];

        // $nilai = [];

        // foreach ($clusters as $key => $value) {
        //     array_push($nilai, 'C' . $key + 1);
        //     if ($key == count($clusters) - 1) {
        //         $listCluster = implode(',' , $nilai);
        //     }
        // }

        // $id = 0;
        // foreach ($clusters as $key => $value) {
        //     if($key == 0) {
        //         $import = Klaster::create([
        //             'klaster' => $listCluster
        //         ]);
        //         $id = $import->id;
        //     }
        //      foreach ($value as $item ) {
        //         $nilaiCluster = explode(',' , $listCluster);
        //         Report::create([
        //             'klaster_id' => $id,
        //             'kode_barang' => $item->kodar,
        //             'nama_barang' => $item->namabarang,
        //             'stok_barang' => $item->stokbarang,
        //             'jml_transaksi' => $item->jumtransaksi,
        //             'jml_terjual' => $item->jumterjual,
        //             'rtpenjual' => $item->rtpenjual,
        //             'cluster' => $nilaiCluster[$key]
        //         ]);
        //     }
        // }
        $clusterName = ((object)$clusters);
        return view('klasterings.dataklastering', compact('clusterName'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = DB::table('data_produks')
        ->select('id','jumtransaksi', 'jumterjual', 'rtpenjual')
        ->get();
        $array = collect($data)->map(function($item) {
            return collect($item)->values()->all();
        })->all();

        $data = DB::table('data_produks')
        ->select('jumtransaksi', 'jumterjual', 'rtpenjual')
        ->get();
        $array1 = collect($data)->map(function($item) {
            return collect($item)->all();
        })->all();

        $kmeans = new KMeans(3);

        $hasil = ($kmeans->cluster($array));

        $c1 = [];
        $c2 = [];
        $c3 = [];

        foreach ($hasil as $key => $cluster) {
            foreach($cluster as $sample) {
                $barang = DB::table('data_produks')->find($sample[0]);
                if ($key == 0) {
                    array_push($c1, $barang);
                }
                else if($key == 1) {
                    array_push($c2, $barang);
                }
                else if($key == 2) {
                    array_push($c3, $barang);
                }
            }
        };


        $clusters = [
            $c1,
            $c2,
            $c3
        ];

        $nilai = [];

        foreach ($clusters as $key => $value) {
            array_push($nilai, 'C' . $key + 1);
            if ($key == count($clusters) - 1) {
                $listCluster = implode(',' , $nilai);
            }
        }

        $id = 0;
        foreach ($clusters as $key => $value) {
            if($key == 0) {
                $import = Klaster::create([
                    'klaster' => $listCluster
                ]);
                $id = $import->id;
            }
             foreach ($value as $item ) {
                $nilaiCluster = explode(',' , $listCluster);
                Report::create([
                    'klaster_id' => $id,
                    'kode_barang' => $item->kodar,
                    'nama_barang' => $item->namabarang,
                    'stok_barang' => $item->stokbarang,
                    'jml_transaksi' => $item->jumtransaksi,
                    'jml_terjual' => $item->jumterjual,
                    'rtpenjual' => $item->rtpenjual,
                    'cluster' => $nilaiCluster[$key]
                ]);
            }
        }

        return redirect('/report');
    }

    public function destroy($id)
    {
        Klaster::find($id)->delete();
        return back();
    }
}
