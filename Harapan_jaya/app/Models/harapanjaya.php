<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class harapanjaya extends Model
{

    protected $table = '_harapan_jaya';


    protected $fillable = [

        'id_kopdes',
        'nama_kopdes',
        'nama_manager',
        'tanggal_berdiri',
        'alamat',
        'gambar'

    ];

}