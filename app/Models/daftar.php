<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar extends Model
{
    use HasFactory;
    protected $table = 'daftars';
    protected $fillable = [
        'kampus_id',
        'semester',
        'nama_lengkap',
        'email',
        'nomor_hp',
        'nomor_wa',
        'hobi',
    ];

    public function kampus()
    {
        return $this->belongsTo(daftarsekolah::class, 'kampus_id', 'NPSN');
    }

}
