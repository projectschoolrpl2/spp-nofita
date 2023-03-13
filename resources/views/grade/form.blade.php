<!-- Modal -->
<div class="modal fade" id="gradeModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="grade">
                    @csrf
                    <div id="method"></div>
                    <div class="form-group row">
                        <label for="nama_kelas" class="col-sm-4 col-form-label">Nama Kelas</label>
                        <div class="col-sm-8">
                            <input type="text" id="nama_kelas" class="form-control" 
                            placeholder="nama kelas" name="nama_kelas">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="kompetensi_keahlian" class="col-sm-4 col-form-label">
                            Kompetensi Keahlian
                        </label>
                        <div class="col-sm-8">
                            <input type="text" id="kompetensi_keahlian" class="form-control" 
                            placeholder="kompetensi keahlian" name="kompetensi_keahlian">
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
<div class="modal fade" id="gradeImport">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Data Classes</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
                <form action="{{ route('grade.import') }}" method="POST" enctype="multipart/form-data">
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