<!-- Modal -->
<div class="modal fade" id="petugasModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="officer">
                    @csrf
                    <div id="method"></div>
                    <div class="form-group row">
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
                    </div>

                    <div class="form-group row">
                        <label for="nama_petugas" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" id="nama_petugas" class="form-control" 
                            placeholder="nama" name="nama_petugas">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="level" class="col-sm-4 col-form-label">Level</label>
                        <select id="level" class="form-select col-sm-8 col-md-7 ml-3" name="level">
                            <option selected disabled>Pilih Level</option>
                            <option selected>Admin</option>
                            <option selected>Petugas</option>
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

                    <div class="form-group row">
                        <label for="no_telp" class="col-sm-4 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-8">
                            <input type="text" id="no_telp" class="form-control" 
                            placeholder="nomor telepon" name="no_telp">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <input type="text" id="alamat" class="form-control" 
                            placeholder="alamat" name="alamat">
                        </div>
                    </div>

                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btn-submit">Save changes</button>
            </div>
        </div>
    </div>
</div>
</form>

{{-- form import --}}
<div class="modal fade" id="ImportOfficer">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Data Petugas</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                

                <form action="{{ route('officer.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="method"></div>
                    <div class="form-group row">
                        <label for="jenis" class="ml-4">File Excel</label>
                        <div class="col-sm-8">
                            <input type="file" id="import" name="import">
                        </div>
                    </div>
                

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btn-submit">Upload</button>
            </div>
        </div>
    </div>
</div>
</form>
