@extends('layouts.backend')

@section('extra-css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@stop
@section('subtitle')
    User List
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            List Data Pengguna
            <small>Users Management</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
@stop

@section('content')
    @if(session('Sukses'))
        <div id="success-alert" class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            {{ session('Sukses') }}
        </div>
    @elseif(session('Gagal'))
        <div id="error-alert" class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            {{ session('Gagal') }}
        </div>
    @endif
    {{--<div class="callout callout-info">--}}
        {{--<h4>Reminder!</h4>--}}
        {{--Instructions for how to use modals are available on the--}}
        {{--<a href="http://getbootstrap.com/javascript/#modals">Bootstrap documentation</a>--}}
    {{--</div>--}}
    <!-- Small boxes (Stat box) -->


    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    @can('addUsers')
                    <a href="{{ route('users.create') }}" class="btn btn-default btn-sm"><i class="fa
                        fa-plus-circle"></i> Tambah Pengguna</a>
                    @endcan
                    @can('Manage Permissions')
                    <a href="{{ route('permissions.index') }}" class="btn btn-primary btn-sm"><i class="fa
                        fa-cog"></i> Manage Permission</a>
                    @endcan
                    @can('Manage Roles')
                    <a href="{{ route('roles.index') }}" class="btn btn-success btn-sm"><i class="fa
                        fa-cog"></i> Manage Role</a>
                    @endcan
                </div>
                @if(route('jenis-cetak.create'))
                    <div class="modal fade" id="modal-tambah-jenis">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Tambah Jenis Cetakan</h4>
                                </div>
                                <form role="form" method="POST" action="{{ route('jenis-cetak.store') }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="jeniscetak">Kode Jenis</label>
                                                <input type="text" class="form-control" id="kodejenis"
                                                       placeholder="Masukkan Kode Jenis" name="kode_jenis" required
                                                       autofocus>
                                                {{--<p class="help-block">Example block-level help text here.</p>--}}
                                            </div>
                                            <div class="form-group">
                                                <label for="jeniscetak">Jenis Cetakan</label>
                                                <input type="text" class="form-control" id="jeniscetak"
                                                       placeholder="Masukkan jenis cetakan" name="jenis_cetak" required>
                                                {{--<p class="help-block">Example block-level help text here.</p>--}}
                                            </div>
                                            <div class="form-group">
                                                <label for="ukuran">Ukuran Cetakan</label>
                                                <input type="text" class="form-control" id="ukuran" name="ukuran"
                                                       placeholder="Masukkan Ukuran Cetakan" value="">
                                                {{--<p class="help-block">Example block-level help text here.</p>--}}
                                            </div>
                                            <div class="form-group">
                                                <label for="catatan">Catatan</label>
                                                <input type="text" class="form-control" id="catatan" name="deskripsi"
                                                       placeholder="Tambahkan catatan bila perlu" value="">
                                                {{--<p class="help-block">Example block-level help text here.</p>--}}
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-default pull-left"
                                                data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                @else
                    <div class="modal fade" id="modal-tambah-jenis">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Ubah Jenis Cetakan</h4>
                                </div>
                                <form role="form" method="POST" action="{{ route('jenis-cetak.update', $id) }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="jeniscetak">Jenis Cetakan</label>
                                                <input type="text" class="form-control" id="jeniscetak" value=""
                                                       placeholder="Masukkan jenis cetakan" name="jenis-cetak" required
                                                       autofocus>
                                                {{--<p class="help-block">Example block-level help text here.</p>--}}
                                            </div>
                                            <div class="form-group">
                                                <label for="ukuran">Ukuran Cetakan</label>
                                                <input type="text" class="form-control" id="ukuran" value=""
                                                       placeholder="Masukkan Ukuran Cetakan">
                                                {{--<p class="help-block">Example block-level help text here.</p>--}}
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-default pull-left"
                                                data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
            @endif

            <!-- /.box-header -->
                <div class="box-body">
                    <table id="tbl-jenis-cetak" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Level Akses</th>
                            <th>Operation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $key => $val)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $val->name }}</td>
                                <td>{{ $val->email }}</td>
                                <td>
                                    @if(!empty($val->getRoleNames()))
                                        @foreach($val->getRoleNames() as $v)
                                            <label class="label bg-gray">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                </td>
{{--                                <td>{!! \App\Models\JenisCetakan::getStatusCetakName((int) $val->status_cetak) !!}</td>--}}
                                <td>
                                    @can("viewUsers")
                                    <a class="btn btn-success btn-xs" href="{{ route('users.show',$val->id) }}">View</a>
                                    @endcan
                                    @can('editUsers')
                                    <a href="{{ route('users.edit',$val->id) }}" class="btn btn-primary
                                btn-xs">Edit</a>
                                    @endcan
                                    @can('deleteUsers')
                                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $val->id],
                                        'style'=>'display:inline']) !!}
                                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                        {{--<a href="{{ route('users.destroy',$val->id) }}" class="btn btn-danger--}}
                                {{--btn-xs"><i--}}
                                            {{--class="fa fa-trash"></i> Hapus</a>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{--{!! $data->render() !!}--}}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
@push('js')
    <!-- DataTables -->
    <script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/datatables.net-bs4/datatables.min.js') }}"></script>
    <script>

        $('#tbl-jenis-cetak').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'autoWidth'   : true,
            "language": {
                "lengthMenu": "Tampilkan _MENU_ baris per page",
                "zeroRecords": "Maaf, Data tidak ditemukan dalam database",
                //"info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "Data tidak tersedia",
                "infoFiltered": "(Filter dari _MAX_ total data)",
                "search" : "Pencarian",
                "paginate" : {
                    "first" : "Awal",
                    "last" : "Akhir",
                    "next" : "&gt;",
                    "previous" : "&lt;"
                }
            },
            "pagingType": "full_numbers",
        })
    </script>
@endpush
