<?php

namespace App\Models;

use App\Models\PaketDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'wilayah_kode', 'nama', 'bintang', 'harga'
    ];

    public function paketDetail()
    {
        return $this->belongsTo(PaketDetail::class);
    }
}
