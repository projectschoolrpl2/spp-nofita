@extends('templates.layout')
@push('css')
    
@endpush

@section('main')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome to</h4>
                        <p class="mb-0">Student Pages</p>
                    </div>
                </div>

                <div class="mt-4 col-sm-12 p-md-0">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-rounded btn-outline-primary" data-toggle="modal" 
                    data-target="#siswaModal">
                        <i class="fa fa-plus"></i> Tambah Data Siswa
                    </button>

                    <div class="mt-3">
                        @include('siswa.data')
                    </div>
                </div>
                
            </div>

        </div>

    </div>
@endsection
@include('siswa.form')

@push('js')
    <script>
        //success closed automatically
        $('.alert-success').fadeTo(2000,500).slideUp(500, function(){
          $('.alert-success').slideUp(500)
        })

        // initialization
        $('#example').DataTable()

        $('.sweet-confirm').on('click', function(e){
            e.preventDefault()
            const data = $(this).closest('tr').find('td:eq(1)').text()
            Swal.fire({
            title: 'Are you sure to delete?',
            text: "You will not able to recover this imaginary file!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                $(e.target).closest('form').submit()
            }else {
                swal.close()
            }
            })
        })

        // update
        $('#siswaModal').on('show.bs.modal', function(e){
          const btn = $(e.relatedTarget)
          const modal = $(this)
          const mode = btn.data('mode')
          const id = btn.data('id')
          const nisn = btn.data('nisn')
          const nis = btn.data('nis')
          const nama = btn.data('nama')
          const id_kelas = btn.data('id_kelas')
          const alamat = btn.data('alamat')
          const no_telp = btn.data('no_telp')
          const id_spp = btn.data('id_spp')
          const jk = btn.data('jk')
          const username = btn.data('username')
          const password = btn.data('password')
          if(mode === 'edit'){
            modal.find('.modal-title').text('Edit Data')
            modal.find('#nisn').val(nisn)
            modal.find('#nis').val(nis)
            modal.find('#nama').val(nama)
            modal.find('#id_kelas').val(id_kelas)
            modal.find('#alamat').val(alamat)
            modal.find('#no_telp').val(no_telp)
            modal.find('#id_spp').val(id_spp)
            modal.find('#jk').val(jk)
            modal.find('#username').val(username)
            modal.find('#password').val(password)
            modal.find('#method').html('@method("PATCH")')
            modal.find('#btn-submit').text('Update')
            modal.find('form').attr('action', '{{ url("siswa") }}/'+id)
          }else{
            modal.find('.modal-title').text('Form Siswa')
            modal.find('#nisn').val('')
            modal.find('#nis').val('')
            modal.find('#nama').val('')
            modal.find('#id_kelas').val('')
            modal.find('#alamat').val('')
            modal.find('#no_telp').val('')
            modal.find('#id_spp').val('')
            modal.find('#jk').val('')
            modal.find('#username').val('')
            modal.find('#password').val('')
            modal.find('#method').html('')
            modal.find('#btn-submit').text('Submit')
          }
        })
    </script>
@endpush