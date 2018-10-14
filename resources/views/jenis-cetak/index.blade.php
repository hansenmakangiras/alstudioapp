@extends('layouts.backend')

@section('extra-css')

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
    @include('widget.alert')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>150</h3>

                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Bounce Rate</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>44</h3>

                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>65</h3>

                    <p>Unique Visitors</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>


    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List Jenis Cetakan</h3>
                    <div class="box-tools">
                        <button type="button" class="btn btn-success btn-flat" data-toggle="modal"
                                data-target="#modal-tambah-jenis">
                            Tambah Jenis
                        </button>
                        {{--<a href="{{ route('jenis-cetak.create') }}" class="btn btn-default btn-sm"><i class="fa--}}
                        {{--fa-plus"></i> Tambah Jenis</a>--}}
                    </div>
                </div>
                <div class="modal fade" id="modal-tambah-jenis">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Tambah Jenis Cetakan</h4>
                            </div>
                            <form role="form" method="POST" action="{{ route('jenis-cetak.store') }}">
                                @csrf
                                <div class="modal-body">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="jeniscetak">Kode Jenis</label>
                                            <input type="text" class="form-control" id="kodejenis"
                                                   placeholder="Masukkan Kode Jenis" name="kode_jenis" required
                                                   autofocus>
                                            {{--<p class="help-block">Example block-level help text here.</p>--}}
                                        </div>
                                        <div class="form-group">
                                            <label for="jeniscetak">Jenis Cetakan</label>
                                            <input type="text" class="form-control" id="jeniscetak"
                                                   placeholder="Masukkan jenis cetakan" name="jenis_cetak" required>
                                            {{--<p class="help-block">Example block-level help text here.</p>--}}
                                        </div>
                                        <div class="form-group">
                                            <label for="ukuran">Ukuran Cetakan</label>
                                            <input type="text" class="form-control" id="ukuran" name="ukuran"
                                                   placeholder="Masukkan Ukuran Cetakan" value="">
                                            {{--<p class="help-block">Example block-level help text here.</p>--}}
                                        </div>
                                        <div class="form-group">
                                            <label for="catatan">Catatan</label>
                                            <input type="text" class="form-control" id="catatan" name="deskripsi"
                                                   placeholder="Tambahkan catatan bila perlu" value="">
                                            {{--<p class="help-block">Example block-level help text here.</p>--}}
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-default pull-left"
                                            data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="tbl-jenis-cetak" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Jenis</th>
                            <th>Jenis Cetakan</th>
                            <th>Ukuran Cetakan</th>
                            <th>Catatan</th>
                            <th>Status Cetak</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $val)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $val->kode_jenis }}</td>
                            <td>{{ $val->jenis_cetak }}</td>
                            <td>{{ $val->ukuran }}</td>
                            <td>{{ $val->deskripsi }}</td>
                            <td>{!! \App\Models\JenisCetakan::getStatusCetakName((int) $val->status_cetak) !!}</td>
                            <td>
                                @can('editJenisCetak')
                                <a href="{{ route('jenis-cetak.edit',$val->id) }}" class="btn btn-primary
                                btn-xs">Edit</a>
                                @endcan
                                @can('deleteJenisCetak')
                                {!! Form::open(['method' => 'DELETE','route' => ['jenis-cetak.destroy', $val->id],
                                    'style'=>'display:inline']) !!}
                                {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
@push('js')
    <!-- DataTables -->
    <script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/datatables.net-bs4/datatables.min.js') }}"></script>
    <script>

        $('#tbl-jenis-cetak').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'autoWidth'   : true,
            "language": {
                "lengthMenu": "Tampilkan _MENU_ baris per page",
                "zeroRecords": "Maaf, Data tidak ditemukan dalam database",
                //"info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "Data tidak tersedia",
                "infoFiltered": "(Filter dari _MAX_ total data)",
                "search" : "Pencarian",
                "paginate" : {
                    "first" : "Awal",
                    "last" : "Akhir",
                    "next" : "&gt;",
                    "previous" : "&lt;"
                }
            },
            "pagingType": "full_numbers",
        })
    </script>
@endpush
