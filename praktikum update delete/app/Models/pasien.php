<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pasien extends Model
{
    use HasFactory;
    // tabel database
    protected $table = 'pasiens';
    // Kolom apa yang bisa diisi
    protected $fillable = [
        'kode',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'gender',
        'email',
        'alamat',
    ];
    // disable timestamps
    public $timestamps = false;
}
