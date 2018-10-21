@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Promo
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Create Promo
            <small>Data Promo</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('pelanggan.index') }}"><i class="fa fa-dashboard"></i> Promo</a></li>
            <li class="active">Create</li>
        </ol>
    </section>
@stop

@section('content')
    <!-- Main row -->
    <div class="row">
        @include('widget.alert')
        <div class="col-xs-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Tambah Promo</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(array('route' => 'promo.store','method'=>'POST')) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Kode Promo</label>
                        {!! Form::text('kode', $promocode, array('placeholder' => 'Kode Promo','class' =>
                        'form-control','readonly')) !!}
                    </div>
                    <div class="form-group">
                        <label for="email">Nama Promo</label>
                        {!! Form::text('namapromo', null, array('placeholder' => 'Beri nama promo anda','class' =>
                        'form-control','autofocus')) !!}
                    </div>
                    <div class="form-group">
                        <label for="email">Deksripsi Promo</label>
                        {!! Form::text('deskripsi', null, array('placeholder' => 'Jelaskan promo anda','class' =>
                        'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <label for="email">Promo Berakhir Tanggal</label>
                        {!! Form::date('expire_date', \Carbon\Carbon::now(),['class' =>'form-control date']) !!}
                        {{--{!! Form::text('expire_date', null, array('placeholder' => 'Tanggal Kadaluarsa promo anda','class' =>--}}
                        {{--'form-control')) !!}--}}
                    </div>
                    <div class="form-group">
                        <label for="confirm">Tipe Pelanggan</label>
                        {!! Form::select('tipe_pelanggan',$arrJenisPelanggan, null, array
                        ('placeholder' => 'Pilih Tipe Pelanggan','class' =>'form-control')) !!}
                    </div>
                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                        <a href="{{ route('promo.index') }}" class="btn btn-default btn-flat">Kembali</a>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
@push('js')
    <script>
        //Date picker
        $('#tglAmbil').datepicker({
            autoclose: true,
            format: "yyyy-mm-dd"
        })
    </script>
@endpush
