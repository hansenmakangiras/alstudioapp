@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Pelanggan
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Create Pelanggan
            <small>Data Pelanggan</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('pelanggan.index') }}"><i class="fa fa-dashboard"></i> Pelanggan</a></li>
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
                    <h3 class="box-title">Tambah Pelanggan</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(array('route' => 'pelanggan.store','method'=>'POST')) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Nama Pelanggan</label>
                        {!! Form::text('namapel', null, array('placeholder' => 'Nama Pelanggan','class' =>
                        'form-control','autofocus')) !!}
                    </div>
                    <div class="form-group">
                        <label for="email">No Telp</label>
                        {!! Form::text('notelp', null, array('placeholder' => 'No Telepon / HP','class' =>
                        'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <label for="password">Alamat</label>
                        {!! Form::text('alamat', null,array('placeholder' => 'Alamat Pelanggan','class' => 'form-control'))
                         !!}
                    </div>
                    <div class="form-group">
                        <label for="password">Email</label>
                        {!! Form::text('email', null,array('placeholder' => 'Email Pelanggan','class' => 'form-control'))
                         !!}
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label for="confirm">Kode Promo</label>--}}
                        {{--{!! Form::select('promoid',$arrPromo, null, array--}}
                        {{--('placeholder' => 'Pilih Kode Promo','class' =>'form-control')) !!}--}}
                    {{--</div>--}}
                    <div class="form-group">
                        <label for="confirm">Jenis Pelanggan</label>
                        {!! Form::select('jenis_pelanggan',$arrJenisPelanggan, null, array
                        ('placeholder' => 'Pilih Tipe Pelanggan','class' =>'form-control')) !!}
                    </div>

                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                        <a href="{{ route('pelanggan.index') }}" class="btn btn-default btn-flat">Kembali</a>
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
        //Date picker
        $('#tglAmbil').datepicker({
            autoclose: true,
            format: "yyyy-mm-dd"
        })
    </script>
@endpush
