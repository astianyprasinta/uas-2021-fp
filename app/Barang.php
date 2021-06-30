<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    // public $guarded = [];
    protected $table = "barangs";
    protected $primaryKet = "id";
    protected $fillable = [
        'id', 'merk_laptop', 'seri_laptop', 'tahun_produksi', 'gambar','public_id'
    ];

}
