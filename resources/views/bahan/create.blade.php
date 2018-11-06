@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Bahan
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Create Bahan
            <small>Master Bahan</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('bahan.index') }}"><i class="fa fa-dashboard"></i> Bahan</a></li>
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
                    <h3 class="box-title">Tambah Bahan</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(array('route' => 'bahan.store','method'=>'POST')) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Nama Bahan</label>
                        {!! Form::text('nama_bahan', null, array('placeholder' => 'Nama Bahan','class' =>
                        'form-control','autofocus')) !!}
                    </div>
                    <div class="form-group">
                        <label for="satuanid">Jenis Satuan</label>
                        {!! Form::select('id_satuan',$satuan, null, array
                        ('placeholder' => 'Pilih Satuan','class' =>'form-control select2')) !!}
                    </div>
                    <div class="form-group">
                        <label for="bahan">Harga Satuan</label>
                        {!! Form::number('hpp',null,['placeholder' => 'Harga','class' => 'form-control','id'=>'bahan'])
                         !!}
                    </div>

                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                        <a href="{{ route('bahan.index') }}" class="btn btn-default btn-flat">Kembali</a>
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
