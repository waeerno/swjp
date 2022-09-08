<?php

namespace App\Models;

use App\Models\PaketDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kendarann extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_transportasi', 'nama', 'harga'
    ];

    public function paketDetail()
    {
        return $this->belongsTo(PaketDetail::class);
    }
}
