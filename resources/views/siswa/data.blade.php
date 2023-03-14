<div class="table-responsive">
    <table id="example" class="table table-bg-hover  table-responsive-sm" >
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
                {{-- <th>Username</th>
                <th>Password</th> --}}
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
                    <td
                    @foreach ($grade as $g)
                        value = "{{ $s->id_kelas }}"
                    @endforeach                    
                    >{{ $g->nama_kelas }}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>{{ $s->no_telp }}</td>
                    <td
                    @foreach ($spp as $g)
                        value = "{{ $s->id_spp }}"
                    @endforeach  
                    >{{ $g->tahun }}</td>
                    <td>{{ $s->jk }}</td>
                    {{-- <td>{{ $s->username }}</td>
                    <td>{{ $s->password }}</td> --}}
                    <td>
                        <button type="button" class="btn btn-rounded btn-outline-warning" 
                        data-toggle="modal" 
                        data-target="#siswaModal"
                            data-mode="edit"
                            data-id="{{ $s->id }}"
                            data-nisn="{{ $s->nisn }}"
                            data-nis="{{ $s->nis }}"
                            data-nama="{{ $s->nama }}"
                            data-id_kelas="{{ $s->id_kelas }}"
                            data-alamat="{{ $s->alamat }}"
                            data-no_telp="{{ $s->no_telp }}"
                            data-id_spp="{{ $s->id_spp }}"
                            data-jk="{{ $s->jk }}"
                            data-username="{{ $s->username }}"
                            data-password="{{ $s->password }}"
                        >
                            <i class="fa fa-edit"></i>
                        </button>

                        <form action="{{ route('siswa.destroy', $s->id) }}" method="POST"
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