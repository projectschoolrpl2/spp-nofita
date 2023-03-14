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
                                <th>Jenis Kelamin</th>                               
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
                                        value="{{ $s->id_kelas }}"
                                        @endforeach
                                    >{{ $g->nama_kelas }}</td>
                                    <td>{{ $s->jk }}</td>
                                    <td>
                                        <button type="button" class="btn 
                                        btn-rounded btn-outline-primary pilihSiswaBtn" 
                                        data-id_siswa="{{ $s->id }}"
                                        data-nisn="{{ $s->nisn }}"
                                        data-nama="{{ $s->nama }}">
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
                            {{-- <th>Nominal</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
            
                    <tbody>
                        {{-- <tr>{{ $i = !isset($i)?1:++$i }}</tr> --}}
                        {{-- @foreach ($spp as $sp) --}}
                            {{-- <tr>
                                <td>1</td>
                                <td></td>
                                <td
                                    @foreach ($spp as $s)
                                        value = "{{ $s->id_spp }}"
                                    @endforeach
                                >
                                    
                                </td>
                                <td>
                                    <button type="button" class="btn btn-rounded btn-outline-warning 
                                    pilihSppBtn">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </td>
                            </tr> --}}
                        {{-- @endforeach --}}
                        <?php 
                        
                            function getBulan($b){
                                $monthNum  = $b;
                                $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                                $monthName = $dateObj->format('F');
                                return $monthName;
                            }
                        ?>
                        
                        @for ($i =1; $i <= 12; $i++)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ getBulan($i) }}</td>
                            <td>
                                <button type="button" class="btn btn-rounded 
                                btn-outline-warning 
                                pilihSppBtn" data-dismiss="modal" data-id="{{ $i }}" 
                                data-nama="{{ getBulan($i) }}">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>