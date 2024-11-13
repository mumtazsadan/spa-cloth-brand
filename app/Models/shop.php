<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    use HasFactory;

    protected $table = 'shop';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'alamat', 'barang', 'total', 'harga'
    ];
}