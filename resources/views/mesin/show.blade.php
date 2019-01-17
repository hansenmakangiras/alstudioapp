@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    Lihat Mesin
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Show Mesin
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
                    <h3 class="box-title">Lihat Mesin</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Nama Mesin</label>
                        {!! Form::text('nama_mesin', $mesin->nama_mesin, array('placeholder' => 'Nama Mesin','class' =>
                        'form-control',
                        'readonly'))
                         !!}
                    </div>
                    <div class="form-group">
                        <label for="email">Tipe Mesin</label>
                        {!! Form::text('tipe_mesin', $mesin->tipe_mesin, array('placeholder' => 'Tipe Mesin','class' =>
                        'form-control','readonly'))
                         !!}
                    </div>
                    <div class="form-group">
                        <label for="email">Harga Pokok Penjualan (HPP)</label>
                        {!! Form::text('hpp', $mesin->hpp, array('placeholder' => 'Harga Pokok Penjualan','class' =>
                        'form-control','readonly'))
                         !!}
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label for="roles">Role</label>--}}
                        {{--@if(!empty($user->getRoleNames()))--}}
                            {{--@foreach($user->getRoleNames() as $v)--}}
                                {{--<label class="label bg-red">{{ $v }}</label>--}}
                            {{--@endforeach--}}
                        {{--@endif--}}
                    {{--</div>--}}

                    <div class="box-footer text-center">
                        <a href="{{ route('mesin.index') }}" class="btn btn-default">Kembali</a>
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
