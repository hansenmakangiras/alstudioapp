@extends('layouts.backend')

@section('extra-css')
    <!-- DataTables -->
    {{--<link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">--}}
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
    @include("widget.alert")
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
                    @role('Superadmin')
                    <a href="{{ route('users.create') }}" class="btn btn-danger btn-sm"><i class="fa
                        fa-plus-circle"></i> Tambah Pengguna</a>
                    @endrole
                    @role('Superadmin')
                    <a href="{{ route('permissions.index') }}" class="btn btn-primary btn-sm"><i class="fa
                        fa-cog"></i> Manage Permission</a>
                    @endrole
                    @role('Superadmin')
                    <a href="{{ route('roles.index') }}" class="btn btn-success btn-sm"><i class="fa
                        fa-cog"></i> Manage Role</a>
                    @endrole
                </div>
            <!-- /.box-header -->
                <div class="box-body">
                    <table id="tbl-user" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Username</th>
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
                                <td>{{ $val->username }}</td>
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
                                    @role("Superadmin")
                                    <a class="btn btn-success btn-xs" href="{{ route('users.show',$val->id) }}">View</a>
                                    @endrole
                                    @role('Superadmin')
                                    <a href="{{ route('users.edit',$val->id) }}" class="btn btn-primary
                                btn-xs">Edit</a>
                                    @endrole
                                    @role('Superadmin')
                                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $val->id],
                                        'style'=>'display:inline']) !!}
                                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    @endrole
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
    <script>

        $('#tbl-user').DataTable({
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
