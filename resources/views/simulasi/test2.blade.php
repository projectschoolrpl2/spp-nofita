@extends('templates.layout')
@push('css')
    
@endpush

@section('main')
    {{-- <div class="basic-form">
        <form>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="1234 Main St">
                </div>
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label>Zip</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        Check me out
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div> --}}

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Form</h4>
                    </div>

                    <div class="mt-4 col-sm-12 p-md-0">
                        <form id="formCucian">
                            <div class="form-group row">
                                <label for="id" class="col-sm-4 col-form-label ">No Transaksi</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="id" id="id"
                                    placeholder="ID" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nophone" class="col-sm-4 col-form-label">No. HP/WA</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nophone" id="nophone"
                                    placeholder="nophone" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nophone" class="col-sm-4 col-form-label">Jenis Cucian</label>
                                <div class="col-sm-8">
                                    <select class="form-control" required name="jenisCucian" id="jenisCucian">
                                        <option value="standar">Standar</option>
                                        <option value="express">Express</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="nama" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tgl" class="col-sm-4 col-form-label">Tanggal Cucian</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="tgl" id="tgl"
                                    placeholder="tgl" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="berat" class="col-sm-4 col-form-label">Berat Cucian</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="berat" id="berat"
                                    placeholder="berat" required value="3" min="3">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama" class="col-sm-4 col-form-label"></label>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary" 
                                    id="btn-insert">Simpan</button>
                                    <button type="reset" class="btn btn-default" >Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>    
            </div>
        </div>

        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    
                    <div class="card-header ">
                        <h4 class="card-title" style="color: blue">Data</h4>
                    </div>
    
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="mt-2 mb-2 form-group input-group">
                                <button type="button" class="btn btn-rounded btn-outline-success"
                                id="btn-sorting">
                                    Sorting
                                </button>
                                
                                {{-- <div class="input-group"> --}}
                                    <input type="search" class="form-control col-sm-4" 
                                    name="" id="teks-cari" style="margin-left:430px;">

                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-rounded btn-outline-primary"
                                        id="btn-cari">
                                            <i class="fa fa-search"></i> Search
                                        </button>
                                    </span>
                                {{-- </div> --}}
                            </div>
                            <table class="table table-bg-hover" id="tblCucian">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Kontak</th>
                                        <th>Tanggal Cucian</th>
                                        <th>Jenis Cucian</th>
                                        <th>Berat </th>
                                        <th>Diskon</th>
                                        <th>Total Harga</th>
                                    </tr>
                                </thead>
    
                                <tbody>
                                    <tr>
                                        <td colspan="6" align="center">Belum ada data</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')
<script>
   
    // insert data
    // serializeArray untuk mengambil data dari form
    function insertData(dataCucian) {
        const data = $('#formCucian').serializeArray()
        console.log(data)

        let newData = {}
        data.forEach(function(item, index){
            let name = item['name']
            let value = name === 'id' || 
                        name === 'berat' 
                        ? Number(item['value']) : item['value']
            newData[name] = value
        })
        console.log(newData)
        localStorage.setItem('dataCucian', JSON.stringify([...dataCucian, newData]))
        return newData
    }

    // function untuk menampilkan data di tabel
    function showData(arr){
        let row = ''
        if(arr.length == null){
            return row = '<tr><td colspan="6">Belum ada data</td></tr>'
        }
        let jmlBerat = jmlDiskon = jmlTotal =  0
        arr.forEach(function(item, index){
            // console.log(item)
            let harga = item['jenisCucian'] == 'standar' ? 7500 : 10000
            let jmlHarga = harga * item['berat']
            let diskon = jmlHarga >= 50000 ? harga * 0.1 : 0
            let total = jmlHarga - diskon
          
            jmlBerat += item['berat']
            jmlDiskon += diskon
            jmlTotal += total
            row += `<tr>`
            row += `<td>${item['id']}</td>`
            row += `<td>${item['nama']}</td>`
            row += `<td>${item['nophone']}</td>`
            row += `<td>${item['tgl']}</td>`
            row += `<td>${item['jenisCucian']}</td>`
            row += `<td>${item['berat']} Kg</td>`
            row += `<td>${diskon}</td>`
            row += `<td>${total}</td>`
            row += `</tr>`

            
        })

        row += '<tr style="font-weight:bold;background:#000;color:white;">'
        row += `<td colspan="5">Jumlah Total</td>`
        row += `<td>${jmlBerat}</td>`
        row += `<td>${jmlDiskon }</td>`
        row += `<td>${jmlTotal }</td>`
        row += '</tr>'
        
        // console.log(row)
        return row
    }
    
    // sorting
    function sorting(arr, key){
        let i,  j, id, value; 
        for (i = 1; i < arr.length; i++)
        { 
            value = arr[i]; 
            id = arr[i][key]
            j = i - 1; 
            while (j >= 0 && arr[j][key] > id)
            { 
                arr[j + 1] = arr[j]; 
                j = j - 1;  
            } 
            arr[j + 1] = value; 
        } 
        return arr
    }

    // searching
    function searching(arr, key, teks){
        for(let i= 0; i < arr.length; i++){
            if(arr[i][key] == teks)
            return i
            }
        return -1
    }

    $(function(){
        // initialize
        let dataCucian = JSON.parse(localStorage.getItem('dataCucian')) || []
        $('#tblCucian tbody').html(showData(dataCucian))
        // let dataCucian = []

        // event klik input data
        $('#btn-insert').on('click', function(){
            // insertData()
            // e.preventDefault()
            //alert('test')
            dataCucian.push(insertData(dataCucian))
            $('#tblCucian tbody').html(showData(dataCucian))
            console.log(dataCucian)              
        })

        $('#btn-sorting').on('click', function(){
            dataCucian = sorting(dataCucian, 'nama')
            // localStorage.setItem('dataCucian', JSON.stringify([...dataCucian, newData]))
            $('#tblCucian tbody').html(showData(dataCucian))
        })

        $('#btn-cari').on('click', function(){
            let teksSearch = $('#teks-cari').val()
            let id = searching(dataCucian,'nama', teksSearch)
            let data = []
            if(id >= 0)
            data.push(dataCucian[id])
            console.log(id)
            console.log(data)
            $('#tblCucian tbody').html(showData(data))
        })
    })
</script>
@endpush