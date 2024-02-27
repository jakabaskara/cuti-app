<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';

    protected $fillable = [
        'NIK',
        'nama',
        'id_unit_kerja',
        'id_users',
    ];

    public function users()
    {
        return $this->hasOne(Karyawan::class, 'id_users');
    }

    public function unitKerja()
    {
        return $this->hasOne(UnitKerja::class, 'id_unit_kerja');
    }
}
