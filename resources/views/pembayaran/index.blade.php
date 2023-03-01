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
                        <p class="mb-0">Payment Pages</p>
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

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-rounded btn-outline-primary" data-toggle="modal" 
                    data-target="#pembayaranModal">
                        <a href="{{ url('form') }}">
                            <i class="fa fa-plus" style="color: rgb(100, 33, 207)"></i>
                        </a> Tambah Transaksi
                    </button>

                    <div class="mt-3">
                       
                    </div>
                </div>
                
            </div>

        </div>

    </div>
@endsection

@push('js')
    
@endpush