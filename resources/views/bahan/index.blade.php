@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Bahan
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            List Bahan
            <small>Master Data</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Bahan</li>
        </ol>
    </section>
@stop

@section('content')
    @include('widget.alert')

    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <a href="{{ route('bahan.create') }}" class="btn btn-success btn-sm"><i class="fa
                        fa-plus-circle"></i> Tambah Bahan</a>
                </div>

                <div class="box-body">
                    <table id="tbl-bahan" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>ID Bahan</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>HPP</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bahan as $key => $val)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $val->id }}</td>
                                <td>{{ $val->nama_bahan }}</td>
                                <td>{{ \App\Models\JenisSatuan::getSatuanName($val->id_satuan) }}</td>
                                <td>{{ \App\Helper\AppHelper::convertToRupiah($val->hpp) }}</td>
                                <td>
                                    {{--@can("viewPelanggan")--}}
                                    <a class="btn btn-success btn-xs" href="{{ route('bahan.show',$val->id)
                                    }}">View</a>
                                    {{--@endcan--}}
{{--                                    @can('editPelanggan')--}}
                                    <a href="{{ route('bahan.edit',$val->id) }}" class="btn btn-primary
                                btn-xs">Edit</a>
                                    {{--@endcan--}}
{{--                                    @can('deletePelanggan')--}}
                                        {!! Form::open(['method' => 'DELETE','route' => ['bahan.destroy', $val->id],
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
                {{ $bahan->onEachSide(1)->links() }}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection

@push('js')
<script>
    $('#tbl-bahan').DataTable({
        {{--'processing'  : true,--}}
        {{--'serverSide'  : true,--}}
        {{--'ajax'        : {--}}
            {{--"url" : "{!! route('ajax.pelanggan') !!}",--}}
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
