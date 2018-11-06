@extends('layouts.backend')

@section('extra-css')
@stop
@section('subtitle')
    Detail Status Bayar
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Show Jenis Bayar
            <small>Data Jenis Bayar</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">List Jenis Bayar</li>
        </ol>
    </section>
@stop

@section('content')
    <!-- Main row -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Detail Jenis Bayar</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Jenis Bayar</label>
                        {!! Form::text('statusbyr', $statusBayar->statusbyr, array('class'=>'form-control','readonly')) !!}
                    </div>
                    <div class="form-group">
                        <label for="email">Tgl Buat</label>
                        {!! Form::text('created_at', $statusBayar->created_at, array('class' => 'form-control',
                        'readonly'))
                         !!}
                    </div>
                    <div class="box-footer text-center">
                        <a href="{{ route('status-bayar.index') }}" class="btn btn-primary">Kembali</a>
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
