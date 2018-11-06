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
            Ubah Tipe Pelanggan
            <small>Data Tipe Pelanggan</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('tipe-pelanggan.index') }}"><i class="fa fa-dashboard"></i> Tipe Pelanggan</a></li>
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
                    <h3 class="box-title">Ubah Tipe Pelanggan</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($tipePelanggan, ['method' => 'PATCH','route' => ['tipe-pelanggan.update',
                $tipePelanggan->id]]) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Tipe Pelanggan</label>
                        {!! Form::text('tipe', null, array('placeholder' => 'Tipe Pelanggan','class' =>
                        'form-control','autofocus')) !!}
                    </div>

                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
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
