<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengawasan extends Model
{
    //
    protected $fillable=[
        'pekerjaan',
        'pelaksana_pekerjaan',
        'no_kontrak',
        'tanggal_pekerjaan',
        'lokasi_pekerjaan',
        'pengawas_pln',
        'pengawas_vendor',
        'jml_petugas_pelaksana',
        'sop',
        'IBPR',
        'JSA',
        'working_permit',
        'arahan_pekerja',
        'cek_komunikasi',
    ];
}
