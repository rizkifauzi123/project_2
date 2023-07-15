<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $tabel = 'produks';
    protected $fillable = ['nama','stok','harga_beli','harga_jual','jenis_produks_id'];
    public $timestamps = false;
}
