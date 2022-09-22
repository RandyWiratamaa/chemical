<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    public function index()
    {
        $satuan = Satuan::all();
        return view('satuan.index', get_defined_vars());
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->validate($request,[
            'name' => 'required|unique:satuan|max:20',
        ]);
        $satuan = new Satuan;
        $satuan->name = $request->name;
        $satuan->desc = $request->desc;
        $satuan->save();

        if ($satuan) {
            return redirect()->route('satuan');
        } else {
            return redirect()->back();
        }
    }
}
