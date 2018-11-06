@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Status Cetak
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ubah Status Cetak
            <small>Data Status Cetak</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('status-cetak.index') }}"><i class="fa fa-dashboard"></i> Status Cetak</a></li>
            <li class="active">Ubah</li>
        </ol>
    </section>
@stop

@section('content')
    <!-- Main row -->
    <div class="row">
        <div class="col-xs-6">
            @include('widget.alert')
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Ubah Status Cetak</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($statusCetak, ['method' => 'PATCH','route' => ['status-cetak.update',
                $statusCetak->id]]) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Status Cetak</label>
                        {!! Form::text('statuscetak', null, array('placeholder' => 'Status Cetak','class' =>
                        'form-control','autofocus')) !!}
                    </div>

                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('status-cetak.index') }}" class="btn btn-default">Kembali</a>
                    </div>
                </div>
            {!! Form::close() !!}
                <!-- /.box-body -->
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
