@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Order
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            List Data Pemesanan
            <small>Order</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Pemesanan</li>
        </ol>
    </section>
@stop

@section('content')
    @include('widget.alert')

    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <a href="{{ route('order.create') }}" class="btn btn-success btn-sm"><i class="fa
                        fa-plus-circle"></i> Buat Pemesanan</a>
                </div>

                <div class="box-body">
                    <table id="tbl-order" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>No. Order</th>
                            <th>Jenis Cetakan</th>
                            <th>Jenis Paket</th>
                            <th>Pelanggan</th>
                            <th>Catatan</th>
                            <th>Status Pesanan</th>
                            <th>Operation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order as $key => $val)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $val->orderid }}</td>
                                <td>{{ $val->jeniscetakid }}</td>
                                <td>{{ $val->jenispaketid }}</td>
                                <td>{{ $val->idpelanggan }}</td>
                                <td>{{ $val->keterangan }}</td>
                                <td>{{ $val->status_order }}</td>
                                <td>
                                    @can("viewOrder")
                                    <a class="btn btn-success btn-xs" href="{{ route('order.show',$val->id)
                                    }}">View</a>
                                    @endcan
                                    @can('editOrder')
                                    <a href="{{ route('order.edit',$val->id) }}" class="btn btn-primary
                                btn-xs">Edit</a>
                                    @endcan
                                    @can('deleteOrder')
                                    {!! Form::open(['method' => 'DELETE','route' => ['order.destroy', $val->id],
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
                <div class="box-footer">
                    {!! $order->links() !!}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection

@push('js')
<script>
    $('#tbl-order').DataTable({
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
