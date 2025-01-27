<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paket extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'harga',
    ];
    public function pendaftarans(): HasMany{
        return $this->hasMany(Pendaftaran::class);
    }
}