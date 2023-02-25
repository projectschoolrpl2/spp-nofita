<div class="table-responsive">
    <table id="example" class="table table-bg-hover table-responsive-sm" >
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Kelas</th>
                <th>Kompetensi Keahlian</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($grade as $g)
                <tr>
                    <td>{{ $i = !isset($i)?1:++$i }}</td>
                    <td>{{ $g->nama_kelas }}</td>
                    <td>{{ $g->kompetensi_keahlian }}</td>
                    <td>
                        <button type="button" class="btn btn-rounded btn-outline-warning" 
                        data-toggle="modal" 
                        data-target="#gradeModal"
                            data-mode="edit"
                            data-id="{{ $g->id }}"
                            data-nama_kelas="{{ $g->nama_kelas }}"
                            data-kompetensi_keahlian="{{ $g->kompetensi_keahlian }}"
                        >
                            <i class="fa fa-edit"></i>
                        </button>

                        <form action="{{ route('grade.destroy', $g->id) }}" method="POST"
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