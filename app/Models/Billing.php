<?php

namespace App\Models;

use App\Models\Reservasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Billing extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservasi_id', 'nominal', 'tgl_bayar', 'metode_bayar', 'konfirmasi',
    ];

    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class);
    }
}
