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
        <div class="col-xs-4">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Add Permission</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(array('route' => 'permissions.store','method'=>'POST')) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        {!! Form::text('name', null, array('placeholder' => 'Nama Ijin','class' => 'form-control',
                        'id'=>'name'))
                         !!}
                    </div>
                    <div class="form-group">
                        @if(!$roles->isEmpty())
                            <label for="email">Assign Permissions to Roles : </label>
                            {{ Form::select('roles[]',$selectRoles,  null, [ 'class'=>'form-control select2',
                            'data-placeholder'=>'Pilih Ijin', 'style' => "width: 100%",'multiple' => 'multiple' ]) }}
                        @endif
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-flat pull-right">Simpan</button>
                        {{--<a href="{{ route('roles.index') }}" class="btn btn-default">Kembali ke list--}}
                            {{--role</a>--}}
                    </div>

                </div>
            {!! Form::close() !!}
            <!-- /.box-body -->
            </div>
        </div>
        <div class="col-xs-8">
            <div class="box">
                <div class="box-header">
                    {{--@role('Superadmin')--}}
                    {{--<a href="{{ route('permissions.create') }}" class="btn btn-default btn-flat btn-sm"><i class="fa--}}
                        {{--fa-plus-circle"></i> Tambah Permission</a>--}}
                    {{--@endrole--}}
                    @role('Superadmin')
                    <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm btn-flat"><i class="fa
                        fa-user-plus"></i> Pengguna</a>
                    @endrole
                    @role('Superadmin')
                    <a href="{{ route('roles.index') }}" class="btn btn-success btn-sm btn-flat"><i class="fa
                        fa-user-secret"></i> Level Akses</a>
                    @endrole
                    {{--<div class="box-tools">--}}
                        {{--<div class="input-group input-group-sm" style="width: 150px;">--}}
                            {{--<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">--}}

                            {{--<div class="input-group-btn">--}}
                                {{--<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>

                <div class="box-body">
                    <table id="tbl-permission" class="table table-hover">
                        <thead>
                        <tr>
                            <th width="50px">#</th>
                            <th>Permissions</th>
                            {{--<th>Permission</th>--}}
                            <th width="100px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($permissions as $key => $permission)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $permission->name }}</td>
                                <td>
                                    <a href="{{ route('permissions.edit',$permission->id) }}" class="btn btn-primary
                                btn-xs btn-flat">Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy',
                                    $permission->id],
                                    'style'=>'display:inline']) !!}
                                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs btn-flat']) !!}
                                    {!! Form::close() !!}
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
    <script>
        $('#tbl-permission').DataTable({
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
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'autoWidth'   : true,
            "language": {
                "lengthMenu": "Tampilkan _MENU_ baris per page",
                "zeroRecords": "Maaf, Data tidak ditemukan dalam database",
                // "info": "Showing page _PAGE_ of _PAGES_",
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
