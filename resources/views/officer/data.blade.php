<div class="table-responsive">
    <table id="example" class="table table-bg-hover  table-responsive-sm" >
        <thead>
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Level</th>
                <th>Jenis Kelamin</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($officer as $of)
                <tr>
                    <td>{{ $i = !isset($i)?1:++$i }}</td>
                    <td>{{ $of->username }}</td>
                    <td>{{ $of->password }}</td>
                    <td>{{ $of->nama_petugas }}</td>
                    <td>{{ $of->level }}</td>
                    <td>{{ $of->jk }}</td>
                    <td>{{ $of->no_telp }}</td>
                    <td>{{ $of->alamat }}</td>
                    <td>
                        <button type="button" class="btn btn-rounded btn-outline-warning" 
                        data-toggle="modal" 
                        data-target="#petugasModal"
                            data-mode="edit"
                            data-id="{{ $of->id }}"
                            data-username="{{ $of->username }}"
                            data-password="{{ $of->password }}"
                            data-nama_petugas="{{ $of->nama_petugas }}"
                            data-level="{{ $of->level }}"
                            data-jk="{{ $of->jk }}"
                            data-no_telp="{{ $of->no_telp }}"
                            data-alamat="{{ $of->alamat }}"
                        >
                            <i class="fa fa-edit"></i>
                        </button>

                        <form action="{{ route('officer.destroy', $of->id) }}" method="POST"
                            style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-rounded btn-outline-danger 
                            sweet-confirm">
                                <i class="fa fa-trash-o" style="color: DC0000"></i> 
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>