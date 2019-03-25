@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Jenis Ukuran
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Jenis Ukuran
            <small>Master Jenis Ukuran</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('jenis-ukuran.index') }}"><i class="fa fa-dashboard"></i> Jenis Ukuran</a></li>
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
                    <h3 class="box-title">Edit Jenis Ukuran</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($jenisUkuran, ['method' => 'PATCH','route' => ['jenis-ukuran.update', $jenisUkuran->id]]) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="satuanid">Produk</label>
                        {!! Form::select('produk_id',$produk, null, ['placeholder' => 'Pilih Produk','class' =>'form-control','autofocus']) !!}
                    </div>
                    {{--<div class="form-group">--}}
                    {{--<label for="name">Ukuran</label>--}}
                    {{--{!! Form::text('ukuran', null, array('placeholder' => 'Ukuran','class' =>--}}
                    {{--'form-control','autofocus')) !!}--}}
                    {{--</div>--}}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Panjang</label>
                                {!! Form::text('panjang', null, array('placeholder' => 'Panjang','class' =>
                                'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Lebar</label>
                                {!! Form::text('lebar', null, array('placeholder' => 'Lebar','class' =>
                                'form-control')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="satuanid">Satuan</label>
                        {!! Form::select('satuan_id',$satuan, null, array
                        ('placeholder' => 'Pilih Satuan','class' =>'form-control select2')) !!}
                    </div>
                    <div class="form-group">
                        <label for="harga">HPP</label>
                        {!! Form::number('harga',$jenisUkuran->harga,['placeholder' => 'Harga','class' => 'form-control','id'=>'harga'])
                         !!}
                    </div>

                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary btn-flat">Update</button>
                        <a href="{{ route('jenis-ukuran.index') }}" class="btn btn-default btn-flat">Kembali</a>
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
