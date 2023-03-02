@extends('templates.layout')
@push('css')
    
@endpush

@section('main')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Payment Pages</h4>
                    </div>
                </div>
                
            </div>

            <div class="row page-titles mx-0">
                <div class="card-body">

                    <form class="" id="">
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group" style="float: left">
                            <label for="kode-pelanggan" class="control-label col-md-6 col-sm-6 col-xs-12">
                                NISN
                            </label>
                    
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-12 col-xs-12" id="kode-pelanggan" 
                                placeholder="" readonly name="no_faktur">
                            </div>
                        </div>
            
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group" style="float: right">
                            <label class="control-label col-md-6 col-sm-6 col-xs-12">
                            Tahun Bayar
                            </label>
                    
                            <select id="id_spp" class="form-select col-sm-8 col-xs-12 col-md-6" 
                            name="id_spp" style="height: 38px; margin-left:10px" >
                            <option selected disabled>Pilih Tahun</option>
                                @foreach ($spp as $sp)
                                    <option value="{{ $sp->id }}">{{ $sp->tahun }}</option>
                                @endforeach
                            </select>
                        </div>
            
            
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group" style="float: left; margin-top:-5px">
                            <label for="kode-pelanggan" class="control-label col-md-6 col-sm-6 col-xs-12">
                                Nama
                            </label>
                    
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <button class="form-control col-md-12 col-xs-12" type="button" id="tambahBarangBtn" data-toggle="modal"
                                data-target="#identitasModal">
                                <i class="fa fa-search" style="float:right"></i>
                            </button>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group" style="float: right; margin-top: 5px">
                            <label class="control-label col-md-6 col-sm-6 col-xs-12">
                                Tanggal Bayar
                            </label>
                    
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="date" class="date-picker form-control col-md-12 col-xs-12" required="required"
                                value="{{ date('Y-m-d') }}" name="tgl_bayar">
                            </div>
                        </div>
            
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group" style="float: left">
                            <label for="kode-pelanggan" class="control-label col-md-6 col-sm-6 col-xs-12">
                                Jumlah Bayar
                            </label>
                    
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-12 col-xs-12" id="nominal" 
                                placeholder="" readonly name="nominal" 
                                value="">
                            </div>
                        </div>
            
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group " style="float: right; margin-top:-20px">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                &nbsp;
                            </label>
                    
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <button class="btn btn-success" type="button" id="tambahBarangBtn" data-toggle="modal"
                                data-target="#identitadal">
                                    <i class="fa fa-plus"></i> Tambah Transaksi
                                </button>
                            </div>
                        </div>   
                    </form>
            
                  </div>
            </div>

        </div>

    </div>
@endsection
@include('pembayaran.data')

@push('js')
    <script>
        // initialization
        $('#example').DataTable()

        // pemilihan siswa
        $('#example').on('click', '.pilihSiswaBtn', function(){
            tambahSiswa(this)
        })
    </script>
@endpush