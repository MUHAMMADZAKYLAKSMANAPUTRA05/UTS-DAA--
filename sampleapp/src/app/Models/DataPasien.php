<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPasien extends Model
{
    use HasFactory;
    protected $table = 'data_pasiens';
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'jenis_kelamin',
        'dokter',
        'keluhan'
    ];
}
