<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    use HasFactory;
    protected $tabel = 'pembelians';
    protected $fillable = ['tanggal','jumlah','harga_beli','produk_id','supplier_id'];
    public $timestamps = false;
}
