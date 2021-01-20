<?php

namespace App\Http\Controllers\API\PeralatanPenunjang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Peralatan_penunjang;
use Illuminate\Support\Facades\DB;

class PeralatanPenunjangController extends Controller
{
    public function getAll()
    {
        $dataPeralatan = DB::table('peralatan_penunjangs')
            ->orderBy('id', 'desc')
            ->get();

        return response()->json($dataPeralatan, 200);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'Grounding_Appartus_TR' => 'required',
            'Grounding_Appartus_TM' => 'required',
            'Voltage_Detector'      => 'required',
            'LOTO'                  => 'required',
            'papan_peringatan'      => 'required',
            'traffic_cone'          => 'required',
            'p3k'                   => 'required',
            'jas_hujan'             => 'required',
            'tali_tangga'           => 'required',
            'id_pengawasan'         => 'required'  
        ]);

        $dataPeralatan = new Peralatan_penunjang;
        $dataPeralatan->Grounding_Appartus_TR = $request->Grounding_Appartus_TR;
        $dataPeralatan->Grounding_Appartus_TM = $request->Grounding_Appartus_TM;
        $dataPeralatan->Voltage_Detector      = $request->Voltage_Detector;
        $dataPeralatan->LOTO                  = $request->LOTO;
        $dataPeralatan->papan_peringatan      = $request->papan_peringatan;
        $dataPeralatan->traffic_cone          = $request->traffic_cone;
        $dataPeralatan->p3k                   = $request->p3k;
        $dataPeralatan->jas_hujan             = $request->jas_hujan;
        $dataPeralatan->tali_tangga           = $request->tali_tangga;
        $dataPeralatan->id_pengawasan         = $request->id_pengawasan;

        $dataPeralatan->save();
        return response()->json($dataPeralatan, 201);
    }

    public function update(Request $request)
    {
        $validateData = $request->validate([
            'id'                    => 'required',
            'Grounding_Appartus_TR' => 'required',
            'Grounding_Appartus_TM' => 'required',
            'Voltage_Detector'      => 'required',
            'LOTO'                  => 'required',
            'papan_peringatan'      => 'required',
            'traffic_cone'          => 'required',
            'p3k'                   => 'required',
            'jas_hujan'             => 'required',
            'tali_tangga'           => 'required',
            'id_pengawasan'         => 'required'  
        ]);

        $dataPeralatan = Peralatan_penunjang::where('id','=', $request->id)->first();
        $dataPeralatan->id                    = $request->id;
        $dataPeralatan->Grounding_Appartus_TR = $request->Grounding_Appartus_TR;
        $dataPeralatan->Grounding_Appartus_TM = $request->Grounding_Appartus_TM;
        $dataPeralatan->Voltage_Detector      = $request->Voltage_Detector;
        $dataPeralatan->LOTO                  = $request->LOTO;
        $dataPeralatan->papan_peringatan      = $request->papan_peringatan;
        $dataPeralatan->traffic_cone          = $request->traffic_cone;
        $dataPeralatan->p3k                   = $request->p3k;
        $dataPeralatan->jas_hujan             = $request->jas_hujan;
        $dataPeralatan->tali_tangga           = $request->tali_tangga;
        $dataPeralatan->id_pengawasan         = $request->id_pengawasan;

        $dataPeralatan->save();
        return response()->json($dataPeralatan, 201);
    }

    public function destroy(Request $request)
    {
        $dataPeralatan = Peralatan_penunjang::where('id','=',$request->id)->first();
        if(!empty($dataPeralatan)){
            $dataPeralatan->delete();

            return response()->json($dataPeralatan, 200);
        } else {
            return response()->json([
                'error' => 'data tidak ditemukan',
            ], 404);
        }
    }
}
