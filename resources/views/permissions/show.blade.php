@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    Lihat Role
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Show Permission
            <small>Data Permission</small>
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
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lihat Permission</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        {{ $permission->name }}
                    </div>
                    <div class="box-footer text-center">
                        <a href="{{ route('permissions.index') }}" class="btn btn-default">Kembali</a>
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
