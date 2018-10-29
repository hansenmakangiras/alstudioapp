@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Jenis Paket
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            List Data Jenis Paket
            <small>Master Customer</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Jenis Paket</li>
        </ol>
    </section>
@stop

@section('content')
    @include('widget.alert')

    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    {{--@can('addJenisPaket')--}}
                    <a href="{{ route('jenispaket.create') }}" class="btn btn-success btn-sm"><i class="fa
                        fa-plus-circle"></i> Tambah Jenis Paket</a>
                    {{--@endcan--}}
                </div>

                <div class="box-body">
                    <table id="tbl-jenispaket" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Order ID</th>
                            <th>Jenis Cetakan</th>
                            <th>Nama Paket</th>
                            <th>Deskripsi</th>
                            <th>Ukuran</th>
                            <th>Harga Jual</th>
                            <th>Operation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jenispaket as $key => $val)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $val->orderid }}</td>
                                <td>{{ \App\Models\JenisCetakan::getJenisCetakName($val->id_jenis_cetak) }}</td>
                                <td>{{ $val->nama_paket }}</td>
                                <td>{{ $val->deskripsi }} </td>
                                <td>{{ $val->ukuran }}</td>
                                <td>{{ $val->harga_jual }}</td>
                                <td>
{{--                                    @can("viewJenisPaket")--}}
                                    <a class="btn btn-success btn-xs" href="{{ route('jenispaket.show',$val->id)
                                    }}">View</a>
                                    {{--@endcan--}}
{{--                                    @can('editJenisPaket')--}}
                                    <a href="{{ route('jenispaket.edit',$val->id) }}" class="btn btn-primary
                                btn-xs">Edit</a>
                                    {{--@endcan--}}
{{--                                    @can('deleteJenisPaket')--}}
                                        {!! Form::open(['method' => 'DELETE','route' => ['jenispaket.destroy',
                                        $val->id],
                                        'style'=>'display:inline']) !!}
                                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    {{--@endcan--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                {{ $jenispaket->onEachSide(1)->links() }}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection

@push('js')
<script>
    $('#tbl-jenispaket').DataTable({
        {{--'processing'  : true,--}}
        {{--'serverSide'  : true,--}}
        {{--'ajax'        : {--}}
            {{--"url" : "{!! route('ajax.jenispaket') !!}",--}}
            {{--"type" : "POST"--}}
        {{--},--}}
        {{--'columns'   : [--}}
            {{--{"data" : "id"},--}}
            {{--{"data" : "namapel"},--}}
            {{--{"data" : "alamat"},--}}
            {{--{"data" : "notelp"},--}}
            {{--{"data" : "created_at"},--}}
            {{--{"data" : "tgl_ambil"},--}}
            {{--{"data" : "status_bayar"},--}}
            {{--{"data" : "updated_at"},--}}
        {{--],--}}
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
