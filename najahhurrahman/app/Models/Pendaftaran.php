<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'paket_id',
        'no_passport',
        'tgl_passport',
        'tempat_passport',
        'masa_passport',
        'expired_passport',
        'jenis_kelamin',
        'tempat_lahir', 'tgl_lahir','alamat','city','no_hp','pekerjaan','jenis_mahrom','nama_mahrom','jenis_kamar','tgl_berangkat','status'
    ];
    public function paket(): BelongsTo{
        return $this->belongsTo(Paket::class);
    }
}
