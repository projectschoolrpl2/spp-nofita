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
                                        <button class="btn btn-rounded btn-outline-primary pilihSiswaBtn" type="button">
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