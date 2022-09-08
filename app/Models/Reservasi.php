<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Paket;
use App\Models\Billing;
use App\Models\Fasilitator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'peket_id', 'gaed_id', 'leader_id', 'keberangkatan', 'biaya_luar_paket', 'pembayaran'
    ];

    public function billing()
    {
        return $this->hasMany(Billing::class);
    }

    public function paket()
    {
        return $this->hasOne(Paket::class);
    }

    public function fasilitator()
    {
        return $this->hasOne(Fasilitator::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    protected function keberangkatan(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d-M-Y H:i:s'),
        );
    }
}
