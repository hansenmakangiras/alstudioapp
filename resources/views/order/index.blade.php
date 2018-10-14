@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Pelanggan
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            List Data Pelanggan
            <small>Master Customer</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Pelanggan</li>
        </ol>
    </section>
@stop

@section('content')
    @include('widget.alert')

    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <a href="{{ route('pelanggan.create') }}" class="btn btn-success btn-sm"><i class="fa
                        fa-plus-circle"></i> Tambah Pelanggan</a>
                </div>

                <div class="box-body">
                    <table id="tbl-pelanggan" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Status Bayar</th>
                            <th>Keterangan</th>
                            <th>Operation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pelanggan as $key => $val)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $val->namapel }}</td>
                                <td>{{ $val->alamat }}</td>
                                <td>{{ $val->notelp }}</td>
                                <td>{{ $val->status }}</td>
                                <td>{{ $val->keterangan }}</td>
                                <td>
                                    @can("viewPelanggan")
                                    <a class="btn btn-success btn-xs" href="{{ route('pelanggan.show',$val->id)
                                    }}">View</a>
                                    @endcan
                                    @can('editPelanggan')
                                    <a href="{{ route('pelanggan.edit',$val->id) }}" class="btn btn-primary
                                btn-xs">Edit</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['pelanggan.destroy', $val->id],
                                        'style'=>'display:inline']) !!}
                                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                        {{--<a href="{{ route('pelanggan.destroy',$val->id) }}" class="btn
                                        btn-danger--}}
                                {{--btn-xs"><i--}}
                                            {{--class="fa fa-trash"></i> Hapus</a>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{--{!! $data->render() !!}--}}
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
    $('#tbl-pelanggan').DataTable({
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
