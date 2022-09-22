<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $barang = Barang::orderBy('id', 'ASC')->with('satuan')->get();
        $laporan = Laporan::orderBy('id', 'ASC')->with([
            'barang' => function($q) {
                return $q->with('satuan');
            }])->get();

        return view('home', get_defined_vars());
    }

    public function store(Request $request)
    {
        $data =$request->all();
        $this->validate($request,[
            'barang_id' => 'required',
            'desc' => 'required'
        ]);

        $laporan = new Laporan;
        $laporan->barang_id = $request->barang_id;
        $laporan->desc = $request->desc;
        $laporan->konsumsi = $request->konsumsi;
        $laporan->soh = $request->soh;
        $laporan->ospr = $request->ospr;
        $laporan->ospo = $request->ospo;
        $laporan->ketahanan_stock = $request->ketahanan_stock;
        $laporan->lead_time = $request->lead_time;
        $laporan->indikator = $request->indikator;
        $laporan->ket = $request->ket;
        $laporan->save();

        if ($laporan) {
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }

    public function getDetailBarang($id = 0)
    {
        $data = Barang::where('id', $id)->with('satuan')->first();
        return response()->json($data);
    }

    public function exportLaporan()
    {
        return Excel::download(new LaporanExport, 'laporan.xlsx');
    }
}
