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
                                        <form action="{{route('peralatanPenunjang.update', $data->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            @method('PATCH')
                                            @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Grounding Appartus TR</label></div>
                                                        <div class="col col-md-9">
                                                            <div class="form-check-inline form-check">
                                                                    <label for="inline-checkbox1" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox1" name="checkboxGrounding_Appartus_TR" value="1" {{$data->Grounding_Appartus_TR==1?'checked':''}} class="form-check-input">Ada 
                                                                    </label>
                                                                    <label for="inline-checkbox2" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox2" name="checkboxGrounding_Appartus_TR" value="0" {{$data->Grounding_Appartus_TR==0?'checked':''}} class="form-check-input">Tidak Ada
                                                                    </label>                   
                                                            </div>
                                                        </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Grounding Appartus TM</label></div>
                                                        <div class="col col-md-9">
                                                            <div class="form-check-inline form-check">
                                                                    <label for="inline-checkbox1" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox1" name="checkboxGrounding_Appartus_TM" value="1" {{$data->Grounding_Appartus_TM==1?'checked':''}} class="form-check-input">Ada 
                                                                    </label>
                                                                    <label for="inline-checkbox2" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox2" name="checkboxGrounding_Appartus_TM" value="0" {{$data->Grounding_Appartus_TM==0?'checked':''}} class="form-check-input">Tidak Ada
                                                                    </label>                   
                                                            </div>
                                                        </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Voltage Detector</label></div>
                                                        <div class="col col-md-9">
                                                            <div class="form-check-inline form-check">
                                                                    <label for="inline-checkbox1" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox1" name="checkboxVoltage_Detector" value="1" {{$data->Voltage_Detector==1?'checked':''}} class="form-check-input">Ada 
                                                                    </label>
                                                                    <label for="inline-checkbox2" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox2" name="checkboxVoltage_Detector" value="0" {{$data->Voltage_Detector==0?'checked':''}} class="form-check-input">Tidak Ada
                                                                    </label>                   
                                                            </div>
                                                        </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">LOTO</label></div>
                                                        <div class="col col-md-9">
                                                            <div class="form-check-inline form-check">
                                                                    <label for="inline-checkbox1" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox1" name="checkboxLOTO" value="1" {{$data->LOTO==1?'checked':''}} class="form-check-input">Ada 
                                                                    </label>
                                                                    <label for="inline-checkbox2" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox2" name="checkboxLOTO" value="0" {{$data->LOTO==0?'checked':''}}class="form-check-input">Tidak Ada
                                                                    </label>                   
                                                            </div>
                                                        </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">papan peringatan</label></div>
                                                        <div class="col col-md-9">
                                                            <div class="form-check-inline form-check">
                                                                    <label for="inline-checkbox1" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox1" name="checkboxpapan_peringatan" value="1" {{$data->papan_peringatan==1?'checked':''}} class="form-check-input">Ada 
                                                                    </label>
                                                                    <label for="inline-checkbox2" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox2" name="checkboxpapan_peringatan" value="0" {{$data->papan_peringatan==0?'checked':''}}class="form-check-input">Tidak Ada
                                                                    </label>                   
                                                            </div>
                                                        </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">traffic cone</label></div>
                                                        <div class="col col-md-9">
                                                            <div class="form-check-inline form-check">
                                                                    <label for="inline-checkbox1" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox1" name="checkboxtraffic_cone" value="1" {{$data->traffic_cone==1?'checked':''}} class="form-check-input">Ada 
                                                                    </label>
                                                                    <label for="inline-checkbox2" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox2" name="checkboxtraffic_cone" value="0" {{$data->traffic_cone==0?'checked':''}}class="form-check-input">Tidak Ada
                                                                    </label>                   
                                                            </div>
                                                        </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">p3k</label></div>
                                                        <div class="col col-md-9">
                                                            <div class="form-check-inline form-check">
                                                                    <label for="inline-checkbox1" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox1" name="checkboxp3k" value="1" {{$data->p3k==1?'checked':''}} class="form-check-input">Ada 
                                                                    </label>
                                                                    <label for="inline-checkbox2" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox2" name="checkboxp3k" value="0" {{$data->p3k==0?'checked':''}} class="form-check-input">Tidak Ada
                                                                    </label>                   
                                                            </div>
                                                        </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">jas hujan</label></div>
                                                        <div class="col col-md-9">
                                                            <div class="form-check-inline form-check">
                                                                    <label for="inline-checkbox1" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox1" name="checkboxjas_hujan" value="1" {{$data->jas_hujan==1?'checked':''}} class="form-check-input">Ada 
                                                                    </label>
                                                                    <label for="inline-checkbox2" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox2" name="checkboxjas_hujan" value="0" {{$data->jas_hujan==0?'checked':''}} class="form-check-input">Tidak Ada
                                                                    </label>                   
                                                            </div>
                                                        </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">tali tangga</label></div>
                                                        <div class="col col-md-9">
                                                            <div class="form-check-inline form-check">
                                                                    <label for="inline-checkbox1" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox1" name="checkboxtali_tangga" value="1"{{$data->tali_tangga==1?'checked':''}} class="form-check-input">Ada 
                                                                    </label>
                                                                    <label for="inline-checkbox2" class="form-check-label ">
                                                                         <input type="checkbox" id="inline-checkbox2" name="checkboxtali_tangga" value="0" {{$data->tali_tangga==0?'checked':''}}class="form-check-input">Tidak Ada
                                                                    </label>                   
                                                            </div>
                                                        </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">id_pengawasan</label></div>
                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="textid_pengawasan" value="{{$data->id_pengawasan}}" placeholder="masukkan id_pengawasan" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                            </div>


                                            <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Update
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