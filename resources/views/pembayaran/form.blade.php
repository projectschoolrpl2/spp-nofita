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
                                <input type="text" class="form-control col-md-12 col-xs-12" id="nisn" 
                                placeholder="" readonly name="nisn">
                            </div>
                        </div>
            
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group" style="float: right; padding-left:130px;">
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
            
            
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group" style="float: left; ">
                            <label for="kode-pelanggan" class="control-label col-md-6 col-sm-6 col-xs-12">
                                Nama
                            </label>
                    
                            <div class="form-group input-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-9 col-xs-9" id="nama" 
                                placeholder="" readonly name="nama"
                                >

                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-outline 
                                    btn-outline-primary" 
                                    data-toggle="modal" 
                                    data-target="#identitasModal">
                                        <i class="fa fa-search" ></i>
                                    </button>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group" style="float: right; 
                        padding-left:120px;">
                            <label class="control-label col-md-8 col-sm-6 col-xs-12">
                                Tanggal Bayar
                            </label>
                    
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <input type="date" class="date-picker form-control col-md-12 col-xs-12" required="required"
                                value="{{ date('Y-m-d') }}"  name="tgl_bayar" readonly>
                            </div>
                        </div>
            
            
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group " style="float: left; margin-top:-20px;
                        padding-left:120px">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                &nbsp;
                            </label>
                    
                            <div class="col-md-9 col-sm-9 col-xs-12" 
                            style="color: rgb(191, 172, 226)">
                                <button class="btn" type="button"  data-toggle="modal"
                                data-target="#dataTransaksiModal" id="tambahTransaksi"
                                style="color: rgb(147, 191, 207)">
                                    <i class="fa fa-plus"></i> Tambah Transaksi
                                </button>
                            </div>
                        </div>   
                    </form>

                    <div class="x_content">
                        @include('pembayaran.data')
                    </div>
            
                  </div>
            </div>

        </div>

    </div>
@endsection
{{-- @include('pembayaran.data') --}}

@push('js')
    <script>
        var count=0;
        // $('#tambahTransaksi').prop('disabled', true);

        // initialization tabel siswa
        $('#example').DataTable()

        // initialization tabel spp
        $('#tbl-modal-spp').DataTable()

        // $('#dataTransaksiModal').click(function(){
        //     $('#id_spp').val(id_spp)
        // })
        $('#tambahTransaksi').on('click', function(){
            // console.log($('#id_spp').val())
            // var id_spp = $(this).val()
            // $('')
        })

        $(document).on('change', '#id_spp', function(){
            $('#tambahTransaksi').prop('disabled', false);
        })

        $(document).on('click', '.pilihSiswaBtn', function(){
            var id = $(this).data("id")
            var nisn = $(this).data("nisn")
            var nama = $(this).data("nama")

            $('#id').val(id)
            $('#nisn').val(nisn)
            $('#nama').val(nama)
         
            $('#identitasModal').modal('hide')
        })

        $(document).on('click', '.hapusBulan', function(){
            var id=$(this).data("id");
            $("#row"+id).remove();
        })

        $(document).on('click', '.pilihSppBtn', function(){
            count++;
            var id = $(this).data("id");
            var nama = $(this).data("nama");
            var idSpp=$("#id_spp").val();
            var html='';
            html+="<tr id='row"+count+"'>";
            html+="<td>";
            html+=idSpp;
            html+="</td>";
            html+="<td>";
            html+=nama;
            html+="</td>";
            html+="<td>";
            html+=300000;
            html+="</td>";
            html+="<td>";
            html+="<button type='button' class='btn btn-danger hapusBulan' data-id='"+count+"'>";
            html+="<i class='fa fa-trash'></i></button>";
            html+="</td>";
            html+="</tr>"

            $("#buff").remove();
            $("#tblTransaksi").append(html);
        })

        $(document).on('click', '.pilihSppBtn', function(){
            console.log('test')
        })
       
    </script>
@endpush