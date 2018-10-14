@extends('layouts.backend')

@section('extra-css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@stop
@section('subtitle')
    Lihat Role
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Show Role
            <small>Data Roles</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
@stop

@section('content')
    <!-- Main row -->
    <div class="row">
        <div class="col-xs-12">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lihat Role</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        {{ $role->name }}
                    </div>
                    <div class="form-group">
                        <label for="roles">Permissions</label>
                        @if(!empty($rolePermissions))
                            @foreach($rolePermissions as $v)
                                <label class="label bg-green">{{ $v->name }},</label>
                            @endforeach
                        @endif
                    </div>

                    <div class="box-footer text-center">
                        <a href="{{ route('roles.index') }}" class="btn btn-default">Kembali ke list
                            role</a>
                    </div>

                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
@push('js')

    <script>

    </script>
@endpush
