<!-- Modal -->
<div class="modal fade" id="siswaModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="siswa">
                    @csrf
                    <div id="method"></div>
                    <div class="form-group row">
                        <label for="nisn" class="col-sm-4 col-form-label">NISN</label>
                        <div class="col-sm-8">
                            <input type="text" id="nisn" class="form-control" 
                            placeholder="nisn" name="nisn">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nis" class="col-sm-4 col-form-label">NIS</label>
                        <div class="col-sm-8">
                            <input type="text" id="nis" class="form-control" 
                            placeholder="nis" name="nis">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" id="nama" class="form-control" 
                            placeholder="nama" name="nama">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_kelas" class="col-sm-4 col-form-label">Kelas</label>
                        <select id="id_kelas" class="form-select col-sm-8 col-md-7 ml-3" name="id_kelas">
                            <option selected disabled>Pilih Kelas</option>
                            @foreach ($grade as $g)
                                <option value="{{ $g->id }}">{{ $g->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <input type="text" id="alamat" class="form-control" 
                            placeholder="alamat" name="alamat">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_telp" class="col-sm-4 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-8">
                            <input type="text" id="no_telp" class="form-control" 
                            placeholder="nomor telepon" name="no_telp">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_spp" class="col-sm-4 col-form-label">Tahun</label>
                        <select id="id_spp" class="form-select col-sm-8 col-md-7 ml-3" name="id_spp">
                            <option selected disabled>Pilih Tahun</option>
                            @foreach ($spp as $p)
                                <option value="{{ $p->id }}">{{ $p->tahun }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="jk" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <select id="jk" class="form-select col-sm-8 col-md-7 ml-3" name="jk">
                            <option selected disabled>Pilih Jenis Kelamin</option>
                            <option selected>Laki-Laki</option>
                            <option selected>Perempuan</option>
                        </select>
                    </div>

                    {{-- <div class="form-group row">
                        <label for="username" class="col-sm-4 col-form-label">Username</label>
                        <div class="col-sm-8">
                            <input type="text" id="username" class="form-control" 
                            placeholder="username" name="username">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" id="password" class="form-control" 
                            placeholder="password" name="password">
                        </div>
                    </div> --}}

                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btn-submit">Save changes</button>
            </div>
        </div>
    </div>
</div>
</form>
