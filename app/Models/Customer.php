<?php

namespace App\Models;

use App\Models\User;
use App\Models\Reservasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'user_id', 'nik', 'tgl_lahir', 'nik', 'no_hp', 'avatar'
    ];

    public function reservasi()
    {
        return $this->hasMany(Reservasi::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function avatar(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/avatars/' . $value),
        );
    }
}
