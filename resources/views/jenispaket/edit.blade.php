@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Jenis Paket
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Jenis Paket
            <small>Data Jenis Paket</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('jenispaket.index') }}"><i class="fa fa-dashboard"></i> Jenis Paket</a></li>
            <li class="active">Update</li>
        </ol>
    </section>
@stop

@section('content')
    <!-- Main row -->
    <div class="row">
        <div class="col-xs-8">
            @include('widget.alert')
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Ubah Jenis Paket</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($jenispaket, ['method' => 'PATCH','route' => ['jenispaket.update', $jenispaket->id]]) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="jeniscetakid">Jenis Cetak</label>
                        {!! Form::select('jeniscetak',$jeniscetak, null, array('placeholder' => 'Pilih Jenis Cetak',
                        'class' =>'form-control select2','autofocus')) !!}
                    </div>
                    <div class="row">
                        <div class="col-xs-9">
                            <div class="form-group">
                                <label for="namapaket">Nama Paket</label>
                                {!! Form::text('nama_paket', null, array('placeholder' => 'Masukkan Nama Paket','class' =>
                                'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="ukuran">Ukuran</label>
                                {!! Form::text('ukuran', null, array('placeholder' => 'cm','class' =>
                                'form-control')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        {!! Form::text('deskripsi', null,array('placeholder' => 'deskripsi','class' =>
                        'form-control'))
                         !!}
                    </div>
                    <div class="form-group">
                        <label for="hargajual">Harga Jual</label>
                        {!! Form::text('harga_jual',null, array('placeholder' => 'Masukkan harga jual','class' =>
                        'form-control','id'=> 'hargajual')) !!}
                    </div>
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-4">--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="jumlah">Jumlah</label>--}}
                                {{--{!! Form::text('jumlah',null, array('placeholder' => 'Masukkan jumlah','class' =>--}}
                                {{--'form-control','id'=> 'jumlah')) !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-4">--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="hargajual">Harga Jual</label>--}}
                                {{--{!! Form::text('harga_jual',null, array('placeholder' => 'Masukkan harga jual','class' =>--}}
                                {{--'form-control','id'=> 'hargajual')) !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-4">--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="satuan">Satuan</label>--}}
                                {{--{!! Form::text('satuan',null, array('placeholder' => 'Masukkan Satuan','class' =>--}}
                                {{--'form-control','id'=> 'satuan')) !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('jenispaket.index') }}" class="btn btn-default">Kembali</a>
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
        // $('#tglAmbil').datepicker({
        //     autoclose: true,
        //     format: "yyyy-mm-dd"
        // })
    </script>
@endpush
