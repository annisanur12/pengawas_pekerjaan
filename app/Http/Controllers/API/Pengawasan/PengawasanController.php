<?php

namespace App\Http\Controllers\API\Pengawasan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pengawasan;
use Illuminate\Support\Facades\DB;

class PengawasanController extends Controller
{
    public function getAll()
    {
        $dataPengawasan = DB::table('pengawasans')
            ->orderBy('id', 'desc')
            ->get();

        return response()->json($dataPengawasan, 200);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'pekerjaan'             => 'required',
            'pelaksana_pekerjaan'   => 'required',
            'no_kontrak'            => 'required',
            'tanggal_pekerjaan'     => 'required',
            'lokasi_pekerjaan'      => 'required',
            'pengawas_pln'          => 'required',
            'pengawas_vendor'       => 'required',
            'jml_petugas_pelaksana' => 'required',
            'sop'                   => 'required',
            'IBPR'                  => 'required',
            'JSA'                   => 'required',
            'working_permit'        => 'required',
            'arahan_pekerja'        => 'required',
            'cek_komunikasi'        => 'required'
        ]);
        
        $dataPengawasan = new Pengawasan;
        $dataPengawasan->id                     = $request->id;
        $dataPengawasan->pekerjaan              = $request->pekerjaan;
        $dataPengawasan->pelaksana_pekerjaan    = $request->pelaksana_pekerjaan;
        $dataPengawasan->no_kontrak             = $request->no_kontrak;
        $dataPengawasan->tanggal_pekerjaan      = $request->tanggal_pekerjaan;
        $dataPengawasan->lokasi_pekerjaan       = $request->lokasi_pekerjaan;
        $dataPengawasan->pengawas_pln           = $request->pengawas_pln;
        $dataPengawasan->pengawas_vendor        = $request->pengawas_vendor;
        $dataPengawasan->jml_petugas_pelaksana  = $request->jml_petugas_pelaksana;
        $dataPengawasan->sop                    = $request->sop;
        $dataPengawasan->IBPR                   = $request->IBPR;
        $dataPengawasan->JSA                    = $request->JSA;
        $dataPengawasan->working_permit         = $request->working_permit;
        $dataPengawasan->arahan_pekerja         = $request->arahan_pekerja;
        $dataPengawasan->cek_komunikasi         = $request->cek_komunikasi;
        $dataPengawasan->save();

        return response()->json($dataPengawasan, 201);
    }

    public function update(Request $request)
    {
        $validateData = $request->validate([
            'id'                    => 'required',
            'pekerjaan'             => 'required',
            'pelaksana_pekerjaan'   => 'required',
            'no_kontrak'            => 'required',
            'tanggal_pekerjaan'     => 'required',
            'lokasi_pekerjaan'      => 'required',
            'pengawas_pln'          => 'required',
            'pengawas_vendor'       => 'required',
            'jml_petugas_pelaksana' => 'required',
            'sop'                   => 'required',
            'IBPR'                  => 'required',
            'JSA'                   => 'required',
            'working_permit'        => 'required',
            'arahan_pekerja'        => 'required',
            'cek_komunikasi'        => 'required'
        ]);
        
        $dataPengawasan = Pengawasan::where('id','=',$request->id)->first();
        $dataPengawasan->id                     = $request->id;
        $dataPengawasan->pekerjaan              = $request->pekerjaan;
        $dataPengawasan->pelaksana_pekerjaan    = $request->pelaksana_pekerjaan;
        $dataPengawasan->no_kontrak             = $request->no_kontrak;
        $dataPengawasan->tanggal_pekerjaan      = $request->tanggal_pekerjaan;
        $dataPengawasan->lokasi_pekerjaan       = $request->lokasi_pekerjaan;
        $dataPengawasan->pengawas_pln           = $request->pengawas_pln;
        $dataPengawasan->pengawas_vendor        = $request->pengawas_vendor;
        $dataPengawasan->jml_petugas_pelaksana  = $request->jml_petugas_pelaksana;
        $dataPengawasan->sop                    = $request->sop;
        $dataPengawasan->IBPR                   = $request->IBPR;
        $dataPengawasan->JSA                    = $request->JSA;
        $dataPengawasan->working_permit         = $request->working_permit;
        $dataPengawasan->arahan_pekerja         = $request->arahan_pekerja;
        $dataPengawasan->cek_komunikasi         = $request->cek_komunikasi;
        $dataPengawasan->save();

        return response()->json($dataPengawasan, 201);
    }

    public function destroy(Request $request)
    {
        $dataPengawasan = Pengawasan::where('id','=',$request->id)->first();
        if(!empty($dataPengawasan)){
            $dataPengawasan->delete();

            return response()->json($dataPengawasan, 200);
        } else {
            return response()->json([
                'error' => 'data tidak ditemukan',
            ], 404);
        }
    }

} 