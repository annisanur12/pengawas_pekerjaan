@extends('admin.layout.master')

@section('content')
    <link rel="stylesheet" href="{{asset('public/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendors/selectFX/css/cs-skin-elastic.css')}}">

    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body card-block">

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <div class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{$error}}
                                    </li>
                                @endforeach
                                </div>
                            </div>

                        @endif

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>{{$pagename}}</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{route('pengawasan.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pekerjaan</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="textpekerjaan" placeholder="masukkan Pekerjaan" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pelaksana Pekerjaan</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="textpelaksana_pekerjaan" placeholder="masukkan pelaksana pekerjaan" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor Kontrak</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="textno_kontrak" placeholder="masukkan nomer kontrak" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Tanggal Pekerjaan</label></div>
                                                <div class="col-12 col-md-9"> 
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                            <input type="date" class="form-control" id="date-input" name="texttanggal_pekerjaan">
                                                    </div>
                                                    <small class="form-text text-muted">ex. 99/99/9999</small>
                                                </div>        
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lokasi Pekerjaan</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="textlokasi_pekerjaan" placeholder="masukkan lokasi pekerjaan" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pengawas PLN</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="textpengawas_pln" placeholder="masukkan pengawas pln" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pengawas Vendor</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="textpengawas_vendor" placeholder="masukkan pengawas vendor" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>
                                               
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Petugas Pelaksana</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="textjml_petugas_pelaksana" placeholder="masukkan jumlah petugas pelaksana" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>

                                            <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">SOP</label></div>
                                                    <div class="col col-md-9">
                                                        <div class="form-check-inline form-check">
                                                            <label for="inline-radio1" class="form-check-label ">
                                                                <input type="radio" id="inline-radio1" name="radiosop" value="0" class="form-check-input">Ada
                                                            </label>
                                                            <label for="inline-radio2" class="form-check-label ">
                                                                <input type="radio" id="inline-radio2" name="radiosop" value="1" class="form-check-input">Tidak Ada
                                                            </label>
                                                            
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">IBPR</label></div>
                                                    <div class="col col-md-9">
                                                        <div class="form-check-inline form-check">
                                                            <label for="inline-radio1" class="form-check-label ">
                                                                <input type="radio" id="inline-radio1" name="radioIBPR" value="0" class="form-check-input">Ada
                                                            </label>
                                                            <label for="inline-radio2" class="form-check-label ">
                                                                <input type="radio" id="inline-radio2" name="radioIBPR" value="1" class="form-check-input">Tidak Ada
                                                            </label>
                                                            
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">JSA</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="textJSA" placeholder="masukkan JSA" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>
                                               
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Working Permit</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="textworking_permit" placeholder="masukkan working permit" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>

                                            <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Arahan Pekerja</label></div>
                                                    <div class="col col-md-9">
                                                        <div class="form-check-inline form-check">
                                                            <label for="inline-radio1" class="form-check-label ">
                                                                <input type="radio" id="inline-radio1" name="radioarahan_pekerja" value="0" class="form-check-input">Ada
                                                            </label>
                                                            <label for="inline-radio2" class="form-check-label ">
                                                                <input type="radio" id="inline-radio2" name="radioarahan_pekerja" value="1" class="form-check-input">Tidak Ada
                                                            </label>
                                                            
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Cek Komunikasi</label></div>
                                                    <div class="col col-md-9">
                                                        <div class="form-check-inline form-check">
                                                            <label for="inline-radio1" class="form-check-label ">
                                                                <input type="radio" id="inline-radio1" name="radiocek_komunikasi" value="0" class="form-check-input">Ada
                                                            </label>
                                                            <label for="inline-radio2" class="form-check-label ">
                                                                <input type="radio" id="inline-radio2" name="radiocek_komunikasi" value="1" class="form-check-input">Tidak Ada
                                                            </label>
                                                            
                                                        </div>
                                                    </div>
                                            </div>


                                                
                                        
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Simpan
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>     
                                    </form>
                                    </div>
                                
                        

                </div><!-- .animated -->
                </div><!-- .content -->
                
                            <script src="{{asset('public/vendors/jquery/dist/jquery.min.js')}}"></script>
                            <script src="{{asset('public/vendors/popper.js/dist/umd/popper.min.js')}}"></script>

                            <script src="{{asset('public/vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
                            <script src="{{asset('public/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js')}}"></script>

                            <script src="{{asset('public/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
                            <script src="{{asset('public/assets/js/main.js')}}"></script>

@endsection