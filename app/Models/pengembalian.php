<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $fillable = [
        'cardId',
        'nama',
        'buku',
        'noHp',
        'tanggalPinjam', 
    ];
}
