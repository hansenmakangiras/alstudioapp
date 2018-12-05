@extends('layouts.backend')

@section('extra-css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@stop
@section('subtitle')
    Lihat Pengguna
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Show Order
            <small>Data Order</small>
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
                    <h3 class="box-title">Lihat Detail Order</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Jenis Cetak</label>
                        {!! Form::text('cetakid', $order->cetakid, array('placeholder' => 'Name','class' => 'form-control',
                        'readonly'))
                         !!}
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        {!! Form::text('email', $order->email, array('placeholder' => 'Email','class' =>
                        'form-control','readonly'))
                         !!}
                    </div>

                    <div class="box-footer text-center">
                        <a href="{{ route('order.index') }}" class="btn btn-default">Kembali</a>
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
