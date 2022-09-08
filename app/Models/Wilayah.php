<?php

namespace App\Models;

use App\Models\Fasilitator;
use App\Models\PaketDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wilayah extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode', 'nama'
    ];

    public function paketDetail()
    {
        return $this->belongsTo(PaketDetail::class);
    }

    public function fasilitator()
    {
        return $this->belongsTo(Fasilitator::class);
    }
}
