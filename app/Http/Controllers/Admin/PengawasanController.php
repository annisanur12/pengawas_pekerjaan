<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pengawasan;

class PengawasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagename='Data Pengawasan';
        $data=Pengawasan::all();
        return view('admin.pengawasan.index', compact('data','pagename'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data_pengawasan=Pengawasan::all();
        $pagename='Form Input Pengawasan';
        return view('admin.pengawasan.create', compact('pagename','data_pengawasan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'textpekerjaan'=>'required',
            'textpelaksana_pekerjaan'=>'required',
            'textno_kontrak'=>'required',
            'texttanggal_pekerjaan'=>'required',
            'textlokasi_pekerjaan'=>'required',
            'textpengawas_pln'=>'required',
            'textpengawas_vendor'=>'required',
            'textjml_petugas_pelaksana'=>'required',
            'textJSA'=>'required',
            'textworking_permit'=>'required',
            
            
        ]);

        $data_pengawasan=new Pengawasan([
            'pekerjaan'=> $request->get('textpekerjaan'),
            'pelaksana_pekerjaan'=> $request->get('textpelaksana_pekerjaan'),
            'no_kontrak'=> $request->get('textno_kontrak'),
            'tanggal_pekerjaan'=> $request->get('texttanggal_pekerjaan'),
            'lokasi_pekerjaan'=> $request->get('textlokasi_pekerjaan'),
            'pengawas_pln'=> $request->get('textpengawas_pln'),
            'pengawas_vendor'=> $request->get('textpengawas_vendor'),
            'jml_petugas_pelaksana'=> $request->get('textjml_petugas_pelaksana'),
            'sop'=> $request->get('radiosop'),
            'IBPR'=> $request->get('radioIBPR'),
            'JSA'=> $request->get('textJSA'),
            'working_permit'=> $request->get('textworking_permit'),
            'arahan_pekerja'=> $request->get('radioarahan_pekerja'),
            'cek_komunikasi'=> $request->get('radiocek_komunikasi'),
        ]);

        $data_pengawasan->save();
        return redirect('admin/pengawasan')->with('sukses','Info Pengawasan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data_pengawasan=Pengawasan::all();
        $pagename='Update Pengawasan';
        $data=Pengawasan::find($id);
        return view ('admin.pengawasan.edit', compact('data','pagename','data_pengawasan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'textpekerjaan'=>'required',
            'textpelaksana_pekerjaan'=>'required',
            'textno_kontrak'=>'required',
            'texttanggal_pekerjaan'=>'required',
            'textlokasi_pekerjaan'=>'required',
            'textpengawas_pln'=>'required',
            'textpengawas_vendor'=>'required',
            'textjml_petugas_pelaksana'=>'required',
            'textJSA'=>'required',
            'textworking_permit'=>'required',
            
            
        ]);

        $pengawasan=Pengawasan::find($id);

            $pengawasan->pekerjaan=$request->get('textpekerjaan');
            $pengawasan->pelaksana_pekerjaan=$request->get('textpelaksana_pekerjaan');
            $pengawasan->no_kontrak= $request->get('textno_kontrak');
            $pengawasan->tanggal_pekerjaan=$request->get('texttanggal_pekerjaan');
            $pengawasan->lokasi_pekerjaan= $request->get('textlokasi_pekerjaan');
            $pengawasan->pengawas_pln= $request->get('textpengawas_pln');
            $pengawasan->pengawas_vendor= $request->get('textpengawas_vendor');
            $pengawasan->jml_petugas_pelaksana= $request->get('textjml_petugas_pelaksana');
            $pengawasan->sop= $request->get('radiosop');
            $pengawasan->IBPR= $request->get('radioIBPR');
            $pengawasan->JSA= $request->get('textJSA');
            $pengawasan->working_permit= $request->get('textworking_permit');
            $pengawasan->arahan_pekerja= $request->get('radioarahan_pekerja');
            $pengawasan->cek_komunikasi= $request->get('radiocek_komunikasi');
        

        $pengawasan->save();
        return redirect('admin/pengawasan')->with('sukses','Update Pengawasan berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pengawasan=Pengawasan::find($id);

        $pengawasan->delete();
        return redirect('admin/pengawasan')->with('sukses','Form Pengawasan berhasil dihapus');
    }
}
