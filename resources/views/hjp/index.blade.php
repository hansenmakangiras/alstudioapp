@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Harga Jual Produk
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            List Data HJP
            <small>Master HJP</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Harga Jual Produk</li>
        </ol>
    </section>
@stop

@section('content')
    @include('widget.alert')

    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <a href="{{ route('hjp.create') }}" class="btn btn-success btn-sm"><i class="fa
                        fa-plus-circle"></i> Tambah HJP</a>
                </div>

                <div class="box-body">
                    <table id="tbl-hjp" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Produk</th>
                            <th>Bahan</th>
                            <th>Mesin</th>
                            {{--<th>Finishing</th>--}}
                            <th>Potong</th>
                            <th>Ukuran</th>
                            <th>Bingkai</th>
                            <th>Display</th>
                            <th>Tipe Pelanggan</th>
                            <th>Harga Jual</th>
                            <th>Min Qty</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hjp as $key => $val)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ \App\Models\Produk::getProdukName($val->produk_id) }}</td>
                                <td>{{ \App\Models\Bahan::getBahanName($val->bahan_id) }}</td>
                                <td>{{ \App\Models\Mesin::getMesinName($val->mesin_id) }}</td>
{{--                                <td>{{ \App\Models\Finishing::getFinishingName($val->finishing_id)  }}</td>--}}
                                <td>{{ \App\Models\JenisPotong::getJenisPotongName($val->potong_id)  }}</td>
                                <td>{{ $val->ukuran }}</td>
                                <td>{{ \App\Models\JenisBingkai::getJenisBingkaiName($val->bingkai_id)  }}</td>
                                <td>{!! \App\Models\JenisDisplay::getJenisDisplayName($val->display_id) !!}</td>
                                <td>{!! \App\Models\TipePelanggan::getTipePelanggan($val->tipe_pelanggan_id) !!}</td>
                                <td>{{ \App\Helper\AppHelper::convertToRupiah($val->harga_jual) }}</td>
                                <td>{{ $val->min_qty }}</td>
                                {{--<td><label class="label bg-green">{{ \App\Models\Pelanggan::getStatusPelanggan--}}
                                {{--($val->status_pelanggan) }}</label></td>--}}
                                <td>
{{--                                    @can("viewPelanggan")--}}
                                    {{--<a class="btn btn-success btn-xs" href="{{ route('hjp.show',$val->id)--}}
                                    {{--}}">View</a>--}}
                                    {{--@endcan--}}
{{--                                    @can('editPelanggan')--}}
                                    <a href="{{ route('hjp.edit',$val->id) }}" class="btn btn-primary
                                btn-xs">Edit</a>
                                    {{--@endcan--}}
{{--                                    @can('deletePelanggan')--}}
                                        {!! Form::open(['method' => 'DELETE','route' => ['hjp.destroy', $val->id],
                                        'style'=>'display:inline','id'=>'delete-form']) !!}
                                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs','id'=>'btnHapus']) !!}
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
                {{ $hjp->onEachSide(1)->links() }}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection

@push('js')
<script>
    $('#tbl-hjp').DataTable({
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
