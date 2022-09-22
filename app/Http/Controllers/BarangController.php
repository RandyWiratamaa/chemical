<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::orderBy('id', 'ASC')->with('satuan')->get();
        $satuan = Satuan::all();
        return view('barang.index', get_defined_vars());
    }

    public function store(Request $request)
    {
        $data =$request->all();
        $this->validate($request,[
            'nm_barang' => 'required|unique:barang|max:30',
            'kimap' => 'required'
        ]);

        $barang = new Barang;
        $barang->nm_barang = $request->nm_barang;
        $barang->kimap = $request->kimap;
        $barang->satuan_id = $request->satuan_id;
        $barang->save();

        if ($barang) {
            return redirect()->route('barang');
        } else {
            return redirect()->back();
        }
    }
}
