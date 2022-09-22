<?php

namespace App\Exports;

use App\Models\Laporan;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class LaporanExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings() : array {
        return[
            'Unit',
            'Kimap',
            'Desc',
            'Satuan',
            'Konsumsi',
            'SOH',
            'OS PR',
            'OS PO',
            'Ketahanan Stock',
            'Lead Time(Bulan)',
            'Indikator',
            'Ket.',
            'Warning'
        ];
    }

    public function collection()
    {
        // return Laporan::all();

        return Laporan::orderBy('id', 'ASC')->with([
            'barang' => function($q) {
                return $q->with('satuan');
            }])->get();
    }

    public function map($laporan) : array {
        return [
            $laporan->barang->nm_barang,
            $laporan->barang->kimap,
            $laporan->desc,
            $laporan->barang->satuan->name,
            $laporan->konsumsi,
            $laporan->soh,
            $laporan->ospr,
            $laporan->ospo,
            $laporan->ketahanan_stock,
            $laporan->lead_time,
            $laporan->indikator,
            $laporan->ket,
            $laporan->warning,
        ];
    }
}
