<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sarana extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'keterangan',
        'kamar_id ',
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'kamar_id'); 
    }
}
