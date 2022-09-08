<?php

namespace App\Models;

use App\Models\User;
use App\Models\Reservasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fasilitator extends Model
{
    use HasFactory;

    protected $fillable = [
        'wilayah_kode', 'user_id', 'nama', 'jenis'
    ];

    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class);
    }

    public function wilayah()
    {
        return $this->hasOne(Wilayah::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
