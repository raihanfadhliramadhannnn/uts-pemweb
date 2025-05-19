<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'stok',
        'satuan',
    ];
}
