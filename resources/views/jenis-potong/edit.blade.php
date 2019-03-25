@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Jenis Potong
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Jenis Potong
            <small>Master Jenis Potong</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('jenis-potong.index') }}"><i class="fa fa-dashboard"></i> Jenis Potong</a></li>
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
                    <h3 class="box-title">Edit Jenis Potong</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($jenisPotong, ['method' => 'PATCH','route' => ['jenis-potong.update', $jenisPotong->id]]) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Jenis Potong</label>
                        {!! Form::text('jenis_potong', null, array('placeholder' => 'Jenis Potong','class' =>
                        'form-control','autofocus')) !!}
                    </div>
                    <div class="form-group">
                        <label for="satuanid">Kategori</label>
                        {!! Form::select('id_satuan',$satuan, null, array
                        ('placeholder' => 'Pilih Satuan','class' =>'form-control select2')) !!}
                    </div>
                    <div class="form-group">
                        <label for="hpp">HPP</label>
                        {!! Form::number('hpp',null,['placeholder' => 'Harga','class' => 'form-control','id'=>'hpp'])
                         !!}
                    </div>

                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary btn-flat">Update</button>
                        <a href="{{ route('jenis-potong.index') }}" class="btn btn-default btn-flat">Kembali</a>
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
