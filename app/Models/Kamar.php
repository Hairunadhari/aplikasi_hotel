<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sarana;

class Kamar extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipe',
        'harga',
        'jumlah',
    ];

    

}
