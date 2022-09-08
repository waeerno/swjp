<?php

namespace App\Models;

use App\Models\Hotel;
use App\Models\Paket;
use App\Models\Wilayah;
use App\Models\Kendarann;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaketDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'paket_id', 'nama', 'wilayah_kode', 'kendaraan_id', 'hotel_id'
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }


    public function wilayah()
    {
        return $this->hasOne(Wilayah::class);
    }

    public function kendaraan()
    {
        return $this->hasOne(Kendarann::class);
    }

    public function hotel()
    {
        return $this->hasOne(Hotel::class);
    }
}
