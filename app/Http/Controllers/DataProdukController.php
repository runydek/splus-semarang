<?php

namespace App\Http\Controllers;

use App\Models\DataProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DataProdukController extends Controller
{
    public function index()
    {
        return view('produks.dataproduk', [
            'produks' => DataProduk::orderBy('id', 'asc')->get()
        ]);
    }

    public function create()
    {
        $produks = DataProduk::orderBy('id', 'desc')->first();
        if ($produks == null) {
            $kode_barang = 'KB001';
        }
        else {
            $slice = Str::after($produks->kodar, 'KB00');
            $kode_barang = 'KB00' . $slice + 1;
        }
        return view('produks.createdp', compact('kode_barang'));
    }

    public function store(Request $request)
    {
        $produks = DataProduk::orderBy('id', 'desc')->first();
        if ($produks == null) {
            $kode_barang = 'KB001';
        }
        else {
            $slice = Str::after($produks->kodar, 'KB00');
            $kode_barang = 'KB00' . $slice + 1;
        }

        DataProduk::create([
            'kodar' => $kode_barang,
            'namabarang' => $request->nama_barang,
            'stokbarang' => $request->stok_barang,
            'jumtransaksi' => $request->jml_transaksi,
            'jumterjual' => $request->jml_terjual,
            'rtpenjual' => $request->rt_penjualan
        ]);
        return redirect('dataproduk');
    }

    public function edit($id)
    {
        $data = DataProduk::find($id);
        return view('produks.editdp', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        DataProduk::find($id)->update([
            'namabarang' => $request->nama_barang,
            'stokbarang' => $request->stok_barang,
            'jumtransaksi' => $request->jml_transaksi,
            'jumterjual' => $request->jml_terjual,
            'rtpenjual' => $request->rt_penjualan
        ]);

        return redirect('dataproduk');
    }

    public function destroy($id)
    {
        DataProduk::find($id)->delete();
        return back();
    }
}
