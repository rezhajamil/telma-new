<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftarsekolah extends Model
{
    use HasFactory;
    protected $table = 'data_sekolah_sumatera';

    protected $primaryKey = 'npsn';
    public $incrementing = false;

    protected $fillable = [
        'npsn',
        'nama_sekolah',
        'provinsi',
        'kab_kota',
        'kecamatan',
        'kelurahan',
        'status_sekolah',
        'jenjang',
        'kategori_jenjang',
        'regional',
        'branch',
        'cluster',
        'latitude',
        'longitude',
        'pjp',
        'frekuensi',
        'telp',
        'alamat',
        'city',
        'jlh_siswa'
    ];
}
