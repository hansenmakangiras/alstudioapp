@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Mesin
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Create Mesin
            <small>Master Data Mesin</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('mesin.index') }}"><i class="fa fa-dashboard"></i> Mesin</a></li>
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
                    <h3 class="box-title">Tambah Mesin</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(array('route' => 'mesin.store','method'=>'POST')) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Nama Mesin</label>
                        {!! Form::text('nama_mesin', null, array('placeholder' => 'Nama Mesin','class' =>
                        'form-control','autofocus')) !!}
                    </div>
                    <div class="form-group">
                        <label for="iTipeMesin">Tipe Mesin</label>
                        {!! Form::text('tipe_mesin', null, array('placeholder' => 'Tipe Mesin','class' =>
                        'form-control','id'=>'iTipeMesin')) !!}
                    </div>
                    <div class="form-group">
                        <label for="iHarga">Harga</label>
                        {!! Form::text('hpp', null,array('placeholder' => 'Harga jual','class' => 'form-control',
                        'id'=> 'iHarga'))
                         !!}
                    </div>

                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('mesin.index') }}" class="btn btn-default">Kembali</a>
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
