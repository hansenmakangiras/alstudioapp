@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    Jenis Satuan
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Jenis Satuan
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
    <!-- Main row -->
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List Jenis Satuan</h3>
                    <div class="box-tools">
                        <button type="button" class="btn btn-success btn-flat btn-sm" data-toggle="modal"
                                data-target="#modal-jenis-satuan">
                            Tambah Jenis
                        </button>
                        {{--<a href="{{ route('jenis-cetak.create') }}" class="btn btn-default btn-sm"><i class="fa--}}
                        {{--fa-plus"></i> Tambah Jenis</a>--}}
                    </div>
                </div>
                <div class="modal fade" id="modal-jenis-satuan">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Tambah Jenis Satuan</h4>
                            </div>
                            <form role="form" method="POST" action="{{ route('satuan.store') }}">
                                @csrf
                                <div class="modal-body">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="satuan">Nama Satuan</label>
                                            <input type="text" class="form-control" id="satuan"
                                                   placeholder="Masukkan jenis satuan" name="satuan" required>
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
                    <table id="tbl-satuan" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Jenis Satuan</th>
                            {{--<th>Status Cetak</th>--}}
                            <th>Operasi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $val)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $val->satuan }}</td>
                            {{--<td><span class='label bg-red-active'>{!! \App\Models\StatusCetak::getStatusCetakName((int)--}}
                            {{--$val->status_cetak) !!}</span></td>--}}
                            <td>
                                <a href="{{ route('satuan.edit',$val->id) }}" class="btn btn-primary
                                btn-xs">Edit</a>
                                {!! Form::open(['method' => 'DELETE','route' => ['satuan.destroy', $val->id],
                                    'style'=>'display:inline']) !!}
                                {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
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
    <script>

        $('#tbl-satuan').DataTable({
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
