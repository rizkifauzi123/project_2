<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_produk extends Model
{
    use HasFactory;
    protected $tabel = 'jenis_produks';
    protected $fillable = ['nama'];
}
