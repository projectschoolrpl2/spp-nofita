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
                        <p class="mb-0">SPP Pages</p>
                    </div>
                </div>

                <div class="mt-4 col-sm-12 p-md-0">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-rounded btn-outline-primary" data-toggle="modal" data-target="#basicModal">
                        <i class="fa fa-plus"></i> Tambah Data Petugas
                    </button>

                    <div class="mt-3">
                        @include('')
                    </div>
                </div>
                
            </div>

        </div>

    </div>
@endsection

@push('js')
    
@endpush