<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\UnitKerja;

class Kerja extends Model
{
    use HasFactory;
    protected $table = 'produk'; // nama table
    protected $fillable = [
        'nama',
        'kode',
        'harga_jual',
        'harga_beli',
        'stok',
        'jenis_produk_id'
    ];
    public function unit_kerja(){
        return $this->belongsTo(UnitKerja::class);
    }
}
