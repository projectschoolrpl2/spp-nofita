{{-- tabel tambah siswa --}}


{{-- tabel pembayaran --}}
<div class="table-responsive " style="padding-top: 15px;">
    <table id="tbl-pembayaran" class="table table-primary table-responsive-sm table-striped"
    style="color: black">
        <thead style=" border-radius:5%">
            <tr style="font-display: bold">
                <th>Tahun</th>
                <th>Bulan</th>
                <th>Nominal</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody id="tblTransaksi">
            <tr>
                <td id="buff" colspan="6" style="text-align:center; font-style:italic">Belum ada Data</td>
            </tr>
        </tbody>
    </table>
</div>



<div class="row justify-content-end" style="text-align: right; margin-bottom:10px; margin-left:80px">
    <div class="col-md-12" >
        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-6" style="text-align: right">
            <label class="control-label col-md-2 col-sm-2 offset-md-7">Total Harga</label>

            <div class="col-md-3 mr-md-auto" style="float: right; ">
                <input type="hidden" id="total_bayar">
                <label class="control-label col-md-6" style="font-size:20px "><div id="total_bayar_label"></div>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-end" style="text-align: right; margin-bottom:10px; margin-left:80px">
    <div class="col-md-12" >
        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-6" style="text-align: right">
            <div class="col-md-3 mr-md-auto" style="float: right; ">
                <button type="submit" id="btnSimpan" class="btn btn-rounded btn-outline-primary">
                    Simpan Transaksi
                </button>
            </div>
        </div>
    </div>
</div>





