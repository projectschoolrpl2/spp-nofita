<div class="table-responsive">
    <table id="example" class="table table-bg-hover table-responsive-sm" >
        <thead>
            <tr>
                <th>No.</th>
                <th>NISN</th>
                <th>Nama Petugas</th>
                <th>Tanggal</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Nominal</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($result as $row)
                <tr>
                    <td>{{ $i = !isset($i)?1:++$i }}</td>
                    <td>{{ $row->nisn }}</td>
                    <td>{{ $row->nama_petugas }}</td>
                    <td>{{ $row->tgl_bayar }}</td>
                    <td>{{ $row->bulan_bayar }}</td>
                    <td>{{ $row->tahun }}</td>
                    <td>{{ $row->nominal }}</td>
                    <td>
                        <button type="button" class="btn btn-rounded btn-outline-warning 
                            sweet-confirm">
                                <i class="fa fa-print" style="color: DC0000"></i> 
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>