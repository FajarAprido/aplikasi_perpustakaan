<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku' ;

    protected $filltable = [
        'nama_buku',
        'nomor_buku',
        'status_buku',
    ];
}
