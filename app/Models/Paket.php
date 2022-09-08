<?php

namespace App\Models;

use App\Models\Reservasi;
use App\Models\PaketDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paket extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'harga', 'durasi'
    ];

    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class);
    }

    public function paketDetail()
    {
        return $this->hasMany(PaketDetail::class);
    }
}
