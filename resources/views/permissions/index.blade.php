@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Permission
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            List Permission
            <small>Permission Management</small>
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
                    @can('editPermission')
                    <a href="{{ route('permissions.create') }}" class="btn btn-default btn-sm"><i class="fa
                        fa-plus-circle"></i> Tambah Permission</a>
                    @endcan
                    @can('Manage Users')
                    <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm"><i class="fa
                        fa-cog"></i> List Pengguna</a>
                    @endcan
                    @can('Manage Roles')
                    <a href="{{ route('roles.index') }}" class="btn btn-success btn-sm"><i class="fa
                        fa-cog"></i> List Role</a>
                    @endcan
                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-body table-responsive no-padding">
                    <table id="tbl-permission" class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Permissions</th>
                            {{--<th>Permission</th>--}}
                            <th width="280px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($permissions as $key => $permission)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $permission->name }}</td>
                                <td>
                                    @can('viewPermission')
                                        <a href="{{ route('permissions.show',$permission->id) }}" class="btn btn-success
                                btn-xs">Edit</a>
                                    @endcan
                                    @can('editPermission')
                                    <a href="{{ route('permissions.edit',$permission->id) }}" class="btn btn-primary
                                btn-xs">Edit</a>
                                    @endcan
                                    @can('deletePermission')
                                    {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy',
                                    $permission->id],
                                    'style'=>'display:inline']) !!}
                                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                    {{--<a href="{{ route('roles.destroy',$permission->id) }}" class="btn btn-danger--}}
                                {{--btn-xs"><i--}}
                                            {{--class="fa fa-trash"></i> Hapus</a>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="box-footer text-center">
                    {{ $permissions->onEachSide(1)->links() }}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
@push('js')
    {{--<!-- DataTables -->--}}
    {{--<script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>--}}
    {{--<script src="{{ asset('assets/bower_components/datatables.net-bs4/datatables.min.js') }}"></script>--}}
    <script>

        {{--$('#tbl-permission').DataTable({--}}
            {{--'processing'  : true,--}}
            {{--'serverSide'  : true,--}}
            {{--'ajax'        : {--}}
                {{--"url" : "{!! route('ajax.pelanggan') !!}",--}}
                {{--"type" : "POST"--}}
            {{--},--}}
            {{--'columns'   : [--}}
                {{--{"data" : "id"},--}}
                {{--{"data" : "namapel"},--}}
                {{--{"data" : "alamat"},--}}
                {{--{"data" : "notelp"},--}}
                {{--{"data" : "created_at"},--}}
                {{--{"data" : "tgl_ambil"},--}}
                {{--{"data" : "status_bayar"},--}}
                {{--{"data" : "updated_at"},--}}
            {{--],--}}
            {{--'paging'      : true,--}}
            {{--'lengthChange': true,--}}
            {{--'searching'   : true,--}}
            {{--'ordering'    : true,--}}
            {{--'autoWidth'   : true,--}}
            {{--"language": {--}}
                {{--"lengthMenu": "Tampilkan _MENU_ baris per page",--}}
                {{--"zeroRecords": "Maaf, Data tidak ditemukan dalam database",--}}
                {{--//"info": "Showing page _PAGE_ of _PAGES_",--}}
                {{--"infoEmpty": "Data tidak tersedia",--}}
                {{--"infoFiltered": "(Filter dari _MAX_ total data)",--}}
                {{--"search" : "Pencarian",--}}
                {{--"paginate" : {--}}
                    {{--"first" : "Awal",--}}
                    {{--"last" : "Akhir",--}}
                    {{--"next" : "&gt;",--}}
                    {{--"previous" : "&lt;"--}}
                {{--}--}}
            {{--},--}}
            {{--"pagingType": "full_numbers",--}}
        {{--})--}}
    </script>
@endpush
