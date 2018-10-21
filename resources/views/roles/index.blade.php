@extends('layouts.backend')

@section('extra-css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@stop
@section('subtitle')
    Role List
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            List Role
            <small>Data Roles</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
@stop

@section('content')
    @include('widget.alert')

    <!-- Main row -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    @role('Superadmin')
                    <a href="{{ route('roles.create') }}" class="btn btn-danger btn-sm"><i class="fa
                        fa-user-secret"></i> Add Roles</a>
                    @endrole
                    @role('Superadmin')
                    <a href="{{ route('permissions.index') }}" class="btn btn-primary btn-sm"><i class="fa
                        fa-cog"></i> Manage Permission</a>
                    @endrole
                    @role('Superadmin')
                    <a href="{{ route('users.index') }}" class="btn btn-success btn-sm"><i class="fa
                        fa-user-plus"></i> Manage Users</a>
                    @endrole
                </div>

                <div class="box-body">
                    <table id="tbl-role" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Roles</th>
                            {{--<th>Permission</th>--}}
                            <th width="280px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $key => $role)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $role->name }}</td>
                                {{--<td>--}}
                                    {{--<label class="label bg-green">--}}
                                        {{--{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}--}}
                                    {{--</label>--}}
                                {{--</td>--}}
                                <td>
                                    <a class="btn btn-info btn-xs" href="{{ route('roles.show',$role->id) }}">Show</a>
{{--                                    @can('Administer Roles and Permission')--}}
                                    <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-primary
                                btn-xs">Edit</a>
                                    {{--@endcan--}}
{{--                                    @can('role-delete')--}}
                                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],
                                    'style'=>'display:inline']) !!}
                                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                    {{--@endcan--}}
                                    {{--<a href="{{ route('roles.destroy',$role->id) }}" class="btn btn-danger--}}
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

        $('#tbl-role').DataTable({
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
