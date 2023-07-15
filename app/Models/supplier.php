<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $tabel = 'suppliers';
    protected $fillable = ['nama','kota','email','telephone','cp'];
    public $timestamps = false;
}
