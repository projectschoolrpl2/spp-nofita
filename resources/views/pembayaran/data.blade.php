{{-- tabel tambah siswa --}}
<div class="modal" id="identitasModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bg-hover  table-responsive-sm">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NISN</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Alamat</th>
                                <th>No. Telepon</th>
                                <th>Tahun</th>
                                <th>Jenis Kelamin</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
    
                        <tbody>
                            @foreach ($siswa as $s)
                                <tr>
                                    <td>{{ $i = !isset($i)?1:++$i }}</td>
                                    <td>{{ $s->nisn }}</td>
                                    <td>{{ $s->nis }}</td>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->id_kelas }}</td>
                                    <td>{{ $s->alamat }}</td>
                                    <td>{{ $s->no_telp }}</td>
                                    <td>{{ $s->id_spp }}</td>
                                    <td>{{ $s->jk }}</td>
                                    <td>{{ $s->username }}</td>
                                    <td>{{ $s->password }}</td>
                                    <td>
                                        <button type="button" class="btn 
                                        btn-rounded btn-outline-primary pilihSiswaBtn" 
                                        data-id="{{ $s->id }}"
                                        data-nisn="{{ $s->nisn }}"
                                        data-nama="{{ $s->nama }}"
                                        {{-- data-id_kelas="{{ $s->id_kelas }}"
                                        data-alamat="{{ $s->alamat }}"
                                        data-no_telp="{{ $s->no_telp }}"
                                        data-id_spp="{{ $s->id_spp }}"
                                        data-jk="{{ $s->jk }}"
                                        data-username="{{ $s->username }}"
                                        data-password="{{ $s->password }}" --}}
                                        >
                                            Pilih
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

{{-- tabel pembayaran --}}
<div class="table-responsive " style="padding-top: 15px;">
    <table id="tbl-pembayaran" class="table table-primary table-responsive-sm table-striped"
    style="color: black">
        <thead style=" border-radius:5%">
            <tr style="font-display: bold">
                <th>Tahun</th>
                <th>Bulan</th>
                <th>Nominal</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td colspan="6" style="text-align:center; font-style:italic">Belum ada Data</td>
            </tr>
        </tbody>
    </table>
</div>



<div class="row justify-content-end" style="text-align: right; margin-bottom:10px; margin-left:80px">
    <div class="col-md-12" >
        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-6" style="text-align: right">
            <label class="control-label col-md-2 col-sm-2 offset-md-7">Total Harga</label>

            <div class="col-md-3 mr-md-auto" style="float: right; ">
                <input type="text" class="form-control col-md-12 col-xs-12" required="required" >
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-end" style="text-align: right; margin-bottom:10px; margin-left:80px">
    <div class="col-md-12" >
        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-6" style="text-align: right">
            <div class="col-md-3 mr-md-auto" style="float: right; ">
                <button type="button" class="btn btn-rounded btn-outline-primary">
                    Simpan Transaksi
                </button>
            </div>
        </div>
    </div>
</div>


{{-- data transaksi modal --}}
<div class="modal fade" id="dataTransaksiModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="tbl-modal-spp" class="table table-bg-hover  table-responsive-sm" >
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Bulan</th>
                            <th>Nominal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
            
                    <tbody>
                        {{-- @foreach ($spp as $sp) --}}
                            <tr>
                                <td>{{ $i = !isset($i)?1:++$i }}</td>
                                <td>{{ $sp->tahun }}</td>
                                <td>
                                    {{ $sp->nominal }}
                                </td>
                                <td>
                                    <button type="button" class="btn btn-rounded btn-outline-warning 
                                    pilihSppBtn">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

