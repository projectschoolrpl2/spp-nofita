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
                        <p class="mb-0">Education Development Donation Pages</p>
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

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif


                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-rounded btn-outline-primary" data-toggle="modal" 
                    data-target="#sppModal">
                        <i class="fa fa-plus"></i> Tambah Data SPP
                    </button>

                    <a href="{{ route('spp.export') }}">
                        <button type="button" class="btn btn-rounded btn-outline-success ml-2">
                            <i class="fa fa-file-excel-o"></i> Export
                        </button>
                    </a>

                    <button type="button" class="btn btn-rounded btn-outline-warning ml-2"
                    data-toggle="modal" 
                    data-target="#formImport">
                        <i class="fa fa-file-excel-o"></i> Import
                    </button>

                    <div class="mt-3">
                        @include('spp.data')
                    </div>
                </div>
                
            </div>

        </div>

    </div>
@endsection
@include('spp.form')

@push('js')
    <script>
        $('.alert-success').fadeTo(2000, 500).slideUp(500, function(){
            $('.alert-success').slideUp(500)
        })

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
        $('#sppModal').on('show.bs.modal', function(e){
            const btn = $(e.relatedTarget)
            const modal = $(this)
            const mode = btn.data('mode')
            const id = btn.data('id')
            const tahun = btn.data('tahun')
            const nominal = btn.data('nominal')
            if(mode === 'edit'){
                modal.find('.modal-title').text('Edit Data')
                modal.find('#tahun').val(tahun)
                modal.find('#nominal').val(nominal)
                modal.find('#method').html('@method("PATCH")')
                modal.find('#btn-submit').text('Update')
                modal.find('form').attr('action', '{{ url("spp") }}/'+id)
            }else{
                modal.find('.modal-title').text('Form SPP')
                modal.find('#tahun').val('')
                modal.find('#nominal').val('')
                modal.find('#method').html('')
                modal.find('#btn-submit').text('Submit')
            }

        })
    </script>
@endpush