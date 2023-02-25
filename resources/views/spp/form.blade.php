<!-- Modal -->
<div class="modal fade" id="sppModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="spp" method="POST">
                    @csrf
                    <div id="method"></div>
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-4 col-form-label">Tahun</label>
                        <div class="col-sm-8">
                            <input type="text" id="tahun" class="form-control" 
                            placeholder="tahun" name="tahun">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nominal" class="col-sm-4 col-form-label">Nominal</label>
                        <div class="col-sm-8">
                            <input type="text" id="nominal" class="form-control" 
                            placeholder="nominal" name="nominal">
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
