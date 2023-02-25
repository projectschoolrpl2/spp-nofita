<div class="table-responsive">
    <table id="example" class="table table-bg-hover  table-responsive-sm" >
        <thead>
            <tr>
                <th>No.</th>
                <th>Tahun</th>
                <th>Nominal</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($spp as $sp)
                <tr>
                    <td>{{ $i = !isset($i)?1:++$i }}</td>
                    <td>{{ $sp->tahun }}</td>
                    <td>{{ $sp->nominal }}</td>
                    <td>
                        <button type="button" class="btn btn-rounded btn-outline-warning" 
                        data-toggle="modal" 
                        data-target="#sppModal"
                            data-mode="edit"
                            data-id="{{ $sp->id }}"
                            data-tahun="{{ $sp->tahun }}"
                            data-nominal="{{ $sp->nominal }}"
                        >
                            <i class="fa fa-edit"></i>
                        </button>

                        <form action="{{ route('spp.destroy', $sp->id) }}" method="POST"
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