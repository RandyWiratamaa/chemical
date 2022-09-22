<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';

    protected $fillable = [
        'nm_barang', 'kimap'
    ];

    public function satuan()
    {
        return $this->belongsTo('App\Models\Satuan', 'satuan_id', 'id');
    }

    public function laporan()
    {
        return $this->hasMany('App\Models\Laporan', 'barang_id', 'id');
    }
}
