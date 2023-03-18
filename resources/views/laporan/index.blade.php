@extends('templates.layout')
@push('css')
    
@endpush

@section('main')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome to</h4>
                        <p class="mb-0">Report Pages</p>
                    </div>
                </div>

                <div class="mt-4 col-sm-12 p-md-0">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                   
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif


                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-rounded btn-outline-primary" data-toggle="modal" 
                    data-target="#sppModal">
                        <i class="fa fa-plus"></i> Tambah Data SPP
                    </button>

                    <div class="mt-3">
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group" style="float: left">
                            <label for="kode-pelanggan" class="control-label col-md-6 col-sm-6 col-xs-12">
                                Tanggal Awal
                            </label>
                    
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="date" class="date-picker form-control col-md-12 col-xs-12" required="required">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group" style="float: right; 
                        padding-left:120px;">
                            <label class="control-label col-md-8 col-sm-6 col-xs-12">
                                Tanggal Akhir
                            </label>
                    
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <input type="date" class="date-picker form-control col-md-12 col-xs-12" required="required">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>

    </div>
@endsection
{{-- @include('spp.form') --}}