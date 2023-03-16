@extends('templates.layout')
@push('css')
    
@endpush

@section('main')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Form</h4>
                    </div>

                    <div class="mt-4 col-sm-12 p-md-0">
                        <form id="formKaryawan">
                            <div class="form-group row">
                                <label for="id" class="col-sm-4 col-form-label ">ID</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="id" id="id"
                                    placeholder="ID" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Nama" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jk" class="col-sm-5 col-form-label">Jenis Kelamin</label>
                                <div class="form-check col-sm-5">
                                    <input type="radio" class="form-check-input" name="jk" id="jkl"
                                    value="L">
                                    <label class="form-check-label">Laki-Laki</label>
                                </div>
                                <div class="form-check col-sm-2">
                                    <input type="radio" class="form-check-input" name="jk" id="jkp"
                                    value="P">
                                    <label class="form-check-label">Perempuan</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gaji" class="col-sm-4 col-form-label">Gaji</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="gaji" id="gaji"
                                    placeholder="Gaji" required min="1000000" step="50000" value="100000">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lembur" class="col-sm-4 col-form-label">Lembur</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="lembur" id="lembur"
                                    placeholder="Lembur" required min="0" step="1" value="0">
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
                            <table class="table table-bg-hover" id="tblKaryawan">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Gaji</th>
                                        <th>Lembur</th>
                                        <th>Bonus</th>
                                        <th>Pajak</th>
                                        <th>Total Gaji</th>
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
        // harga lembur
        const hargaLembur = 100000
        // insert data
        // serializeArray untuk mengambil data dari form
        function insertData(dataKaryawan) {
            const data = $('#formKaryawan').serializeArray()
            console.log(data)

            let newData = {}
            data.forEach(function(item, index){
                let name = item['name']
                let value = name === 'id' || 
                            name === 'gaji' ||
                            name === 'lembur'
                            ? Number(item['value']) : item['value']
                newData[name] = value
            })
            console.log(newData)
            localStorage.setItem('dataKaryawan', JSON.stringify([...dataKaryawan, newData]))
            return newData
        }

        // function untuk menampilkan data di tabel
        function showData(arr){
            let row = ''
            if(arr.length == null){
                return row = '<tr><td colspan="3">Belum ada data</td></tr>'
            }
            let jmlGaji = jmlLembur = jmlTotal = jmlBonus = jmlPajak = 0
            arr.forEach(function(item, index){
                // console.log(item)
                
                let bonus = item['lembur'] >= 10 ? item['gaji'] * 0.5 : 0
                let pajak = item['gaji'] * 0.1 
                let total = item['gaji'] + (item['lembur'] * hargaLembur) + bonus - pajak
                jmlGaji += item['gaji']
                jmlLembur += item['lembur']
                jmlBonus += bonus
                jmlPajak += pajak
                jmlTotal += total
                row += `<tr>`
                row += `<td>${item['id']}</td>`
                row += `<td>${item['nama']}</td>`
                row += `<td>${item['jk']}</td>`
                row += `<td>${item['gaji']}</td>`
                row += `<td>${item['lembur']}</td>`
                row += `<td>${bonus}</td>`
                row += `<td>${pajak}</td>`
                row += `<td>${total}</td>`
                row += `</tr>`

                
            })

            row += '<tr style="font-weight:bold;background:#000;color:white;">'
            row += `<td colspan="3">Jumlah Total</td>`
            row += `<td>${jmlGaji}</td>`
            row += `<td>${jmlLembur }</td>`
            row += `<td>${jmlBonus }</td>`
            row += `<td>${jmlPajak }</td>`
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
            let dataKaryawan = JSON.parse(localStorage.getItem('dataKaryawan')) || []
            $('#tblKaryawan tbody').html(showData(dataKaryawan))
            // let dataKaryawan = []

            // event klik input data
            $('#btn-insert').on('click', function(){
                // insertData()
                // e.preventDefault()
                //alert('test')
                dataKaryawan.push(insertData(dataKaryawan))
                $('#tblKaryawan tbody').html(showData(dataKaryawan))
                console.log(dataKaryawan)              
            })

            $('#btn-sorting').on('click', function(){
                dataKaryawan = sorting(dataKaryawan, 'nama')
                // localStorage.setItem('dataKaryawan', JSON.stringify([...dataKaryawan, newData]))
                $('#tblKaryawan tbody').html(showData(dataKaryawan))
            })

            $('#btn-cari').on('click', function(){
                let teksSearch = $('#teks-cari').val()
                let id = searching(dataKaryawan,'nama', teksSearch)
                let data = []
                if(id >= 0)
                data.push(dataKaryawan[id])
                console.log(id)
                console.log(data)
                $('#tblKaryawan tbody').html(showData(data))
            })
        })
    </script>
@endpush