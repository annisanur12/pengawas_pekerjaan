<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Peralatan_penunjang;

class PeralatanPenunjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagename='Data Peralatan Penunjang';
        $data=Peralatan_penunjang::all();
        return view('admin.peralatanPenunjang.index', compact('data','pagename'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data_peralatanPenunjang=Peralatan_penunjang::all();
        $pagename='Form Input Peralatan Penunjang';
        return view('admin.peralatanPenunjang.create', compact('pagename','data_peralatanPenunjang'));
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
            'checkboxGrounding_Appartus_TR'=>'required',
            'checkboxGrounding_Appartus_TM'=>'required',
            'checkboxVoltage_Detector'=>'required',
            'checkboxLOTO'=>'required',
            'checkboxpapan_peringatan'=>'required',
            'checkboxtraffic_cone'=>'required',
            'checkboxp3k'=>'required',
            'checkboxjas_hujan'=>'required',
            'checkboxtali_tangga'=>'required',
            'textid_pengawasan'=>'required',
            
        ]);

        $data_peralatanPenunjang=new Peralatan_penunjang([
            'Grounding_Appartus_TR'=> $request->get('checkboxGrounding_Appartus_TR'),
            'Grounding_Appartus_TM'=> $request->get('checkboxGrounding_Appartus_TM'),
            'Voltage_Detector'=> $request->get('checkboxVoltage_Detector'),
            'LOTO'=> $request->get('checkboxLOTO'),
            'papan_peringatan'=> $request->get('checkboxpapan_peringatan'),
            'traffic_cone'=> $request->get('checkboxtraffic_cone'),
            'p3k'=> $request->get('checkboxp3k'),
            'jas_hujan'=> $request->get('checkboxjas_hujan'),
            'tali_tangga'=> $request->get('checkboxtali_tangga'),
            'id_pengawasan'=> $request->get('textid_pengawasan'),
            ]);

        $data_peralatanPenunjang->save();
        return redirect('admin/peralatanPenunjang')->with('sukses','Info Pengawasan berhasil disimpan');
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
        $data_peralatanPenunjang=Peralatan_penunjang::all();
        $pagename='Update Peralatan Penunjang';
        $data=Peralatan_penunjang::find($id);
        return view ('admin.peralatanPenunjang.edit', compact('data','pagename','data_peralatanPenunjang'));
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
            'checkboxGrounding_Appartus_TR'=>'required',
            'checkboxGrounding_Appartus_TM'=>'required',
            'checkboxVoltage_Detector'=>'required',
            'checkboxLOTO'=>'required',
            'checkboxpapan_peringatan'=>'required',
            'checkboxtraffic_cone'=>'required',
            'checkboxp3k'=>'required',
            'checkboxjas_hujan'=>'required',
            'checkboxtali_tangga'=>'required',
            'textid_pengawasan'=>'required',
            
        ]);

        $peralatanPenunjang=Peralatan_penunjang ::find($id);

        $peralatanPenunjang->Grounding_Appartus_TR=$request->get('checkboxGrounding_Appartus_TR');
        $peralatanPenunjang->Grounding_Appartus_TM=$request->get('checkboxGrounding_Appartus_TM');
        $peralatanPenunjang->Voltage_Detector=$request->get('checkboxVoltage_Detector');
        $peralatanPenunjang->LOTO=$request->get('checkboxLOTO');
        $peralatanPenunjang->papan_peringatan=$request->get('checkboxpapan_peringatan');
        $peralatanPenunjang->traffic_cone=$request->get('checkboxtraffic_cone');
        $peralatanPenunjang->p3k=$request->get('checkboxp3k');
        $peralatanPenunjang->jas_hujan=$request->get('checkboxjas_hujan');
        $peralatanPenunjang->tali_tangga=$request->get('checkboxtali_tangga');
        $peralatanPenunjang->id_pengawasan=$request->get('textid_pengawasan');
            

        $peralatanPenunjang->save();
        return redirect('admin/peralatanPenunjang')->with('sukses','Info Peralatan Penunjang berhasil disimpan');
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
        $peralatanPenunjang=Peralatan_penunjang::find($id);

        $peralatanPenunjang->delete();
        return redirect('admin/peralatanPenunjang')->with('sukses','Form Peralatan Penunjang berhasil dihapus');
    }
}
