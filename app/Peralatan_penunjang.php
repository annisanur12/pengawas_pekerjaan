<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peralatan_penunjang extends Model
{
    //
    protected $fillable=[
        'Grounding_Appartus_TR',
        'Grounding_Appartus_TM',
        'Voltage_Detector',
        'LOTO',
        'papan_peringatan',
        'traffic_cone',
        'p3k',
        'jas_hujan',
        'tali_tangga',
        'id_pengawasan',
    ];
    
}
