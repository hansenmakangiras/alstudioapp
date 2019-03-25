@extends('layouts.backend')

@section('extra-css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@stop
@section('subtitle')
    Lihat Finishing
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Detail Finishing
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
                    <h3 class="box-title">Detail Finishing</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Jenis Finishing</label>
                        {!! Form::text('name', $finishing->jenis_finishing, array('placeholder' => 'Jenis Finishing','class' => 'form-control',
                        'readonly'))
                         !!}
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        {!! Form::text('kategori', \App\Models\JenisSatuan::getSatuanName($finishing->id_satuan), array('placeholder' => 'Kategori','class' =>
                        'form-control','readonly'))
                         !!}
                    </div>
                    <div class="form-group">
                        <label for="hpp">Role</label>
                        {!! Form::text('hpp', $finishing->hpp, array('placeholder' => 'HPP','class' =>
                       'form-control','readonly'))
                        !!}
                    </div>

                    <div class="box-footer text-center">
                        <a href="{{ route('finishing.index') }}" class="btn btn-default">Kembali</a>
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
