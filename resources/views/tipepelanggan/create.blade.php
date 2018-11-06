@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Tipe Pelanggan
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Create Tipe Pelanggan
            <small>Data Tipe Pelanggan</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('tipe-pelanggan.index') }}"><i class="fa fa-dashboard"></i> Tipe Pelanggan</a></li>
            <li class="active">Create</li>
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
                    <h3 class="box-title">Tambah Tipe Pelanggan</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(array('route' => 'tipe-pelanggan.store','method'=>'POST')) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Tipe Pelanggan</label>
                        {!! Form::text('tipe', null, array('placeholder' => 'Tipe Pelanggan','class' =>
                        'form-control','autofocus')) !!}
                    </div>

                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('tipe-pelanggan.index') }}" class="btn btn-default">Kembali</a>
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
