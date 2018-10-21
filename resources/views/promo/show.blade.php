@extends('layouts.backend')

@section('extra-css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@stop
@section('subtitle')
    Lihat Promo
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Show Promo
            <small>Data Master</small>
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
                    <h3 class="box-title">Lihat Promo</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="form-group">
                        <label for="email">Kode Promo</label>
                        {!! Form::text('kode', $promo->kode, array('class' =>
                        'form-control','readonly'))
                         !!}
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Promo</label>
                        {!! Form::text('name', $promo->namapromo, array('class' => 'form-control',
                        'readonly'))
                         !!}
                    </div>
                    <div class="form-group">
                        <label for="email">Deskripsi</label>
                        {!! Form::text('deksripsi', $promo->deskripsi, array('class' =>
                        'form-control','readonly'))
                         !!}
                    </div>
                    <div class="form-group">
                        <label for="email">Tgl Berakhir Promo</label>
                        {!! Form::text('deksripsi', $promo->expire_date, array('class' =>
                        'form-control','readonly'))
                         !!}
                    </div>
                    <div class="form-group">
                        <label for="email">Tipe Pelanggan</label>
                        {!! Form::text('deksripsi', \App\Models\Pelanggan::getJenisPelanggan
                                ($promo->tipe_pelanggan) , array('class' =>
                        'form-control','readonly'))
                         !!}
                    </div>

                    <div class="box-footer text-center">
                        <a href="{{ route('promo.index') }}" class="btn btn-default">Kembali</a>
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
