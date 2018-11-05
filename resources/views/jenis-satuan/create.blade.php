@extends('layouts.backend')

@section('extra-css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@stop
@section('subtitle')
    Jenis Cetakan
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Jenis Cetakan
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
            <div class="callout callout-info">
                <h4>Reminder!</h4>
                Instructions for how to use modals are available on the
                <a href="http://getbootstrap.com/javascript/#modals">Bootstrap documentation</a>
            </div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Tambah Jenis Cetakan</h3>
                    <div class="box-tools">
                        <a href="{{ route('jenis-cetak.index') }}" class="btn btn-default btn-sm"><i class="fa
                        fa-backward"></i> Kembali ke list jenis</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                       placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">

                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('jenis-cetak.index') }}" class="btn btn-default">Kembali ke list jenis</a>
                        </div>
                    </form>

                </div>
                <!-- /.box-body -->

            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
@push('js')
    <script>
        // $('#tbl-jenis-cetak').DataTable({
        //     'paging'      : true,
        //     'lengthChange': true,
        //     'searching'   : true,
        //     'ordering'    : true,
        //     'autoWidth'   : true,
        //     "language": {
        //         "lengthMenu": "Tampilkan _MENU_ baris per page",
        //         "zeroRecords": "Maaf, Data tidak ditemukan dalam database",
        //         "info": "Showing page _PAGE_ of _PAGES_",
        //         "infoEmpty": "Data tidak tersedia",
        //         "infoFiltered": "(Filter dari _MAX_ total data)",
        //         "search" : "Pencarian",
        //         "paginate" : {
        //             "first" : "Awal",
        //             "last" : "Akhir",
        //             "next" : "&gt;",
        //             "previous" : "&lt;"
        //         }
        //     },
        //     "pagingType": "full_numbers",
        // })
    </script>
@endpush
