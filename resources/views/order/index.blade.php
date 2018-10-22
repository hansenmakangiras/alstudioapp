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
                            <th>Status Bayar</th>
                            <th>Status Pesanan</th>
                            <th>Operation</th>
                        </tr>
                        </thead>
                        {{--<tbody>--}}
                        {{--@foreach($order as $key => $val)--}}
                            {{--<tr>--}}
                                {{--<td>{{ ++$i }}</td>--}}
                                {{--<td>{{ $val->orderid }}</td>--}}
                                {{--<td>{{ \App\Models\JenisCetakan::getJenisCetakName((int)--}}
                            {{--$val->cetakid) }}</td>--}}
                                {{--<td>{{ \App\Models\JenisPaket::getDataPaket($val->jenispaketid)->nama_paket }}</td>--}}
                                {{--<td>{{ \App\Models\Pelanggan::getPelangganName($val->pelangganid) }}</td>--}}
                                {{--<td><label class="label bg-fuchsia-active">{{ \App\Models\StatusBayar::getStatusName($val->status_bayar) }}</label></td>--}}
                                {{--<td><label class="label bg-blue-active">{{ \App\Models\StatusOrder::getStatusOrderName--}}
                                {{--($val->promoid)--}}
                                {{--}}</label></td>--}}
                                {{--<td>--}}
                                    {{--@can("viewOrder")--}}
                                    {{--<a class="btn btn-success btn-xs" href="{{ route('order.show',$val->id)--}}
                                    {{--}}">View</a>--}}
                                    {{--@endcan--}}
                                    {{--@can('editOrder')--}}
                                    {{--<a href="{{ route('order.edit',$val->id) }}" class="btn btn-primary--}}
                                {{--btn-xs">Edit</a>--}}
                                    {{--@endcan--}}
                                    {{--@can('deleteOrder')--}}
                                    {{--{!! Form::open(['method' => 'DELETE','route' => ['order.destroy', $val->id],--}}
                                    {{--'style'=>'display:inline']) !!}--}}
                                    {{--{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs']) !!}--}}
                                    {{--{!! Form::close() !!}--}}
                                    {{--@endcan--}}
                                    {{--@can('editOrder')--}}
                                        {{--{!! Form::open(['method' => 'POST','route' => ['order.proses', $val->id],--}}
                                    {{--'style'=>'display:inline']) !!}--}}
                                        {{--{!! Form::submit('Proses', ['class' => 'btn btn-warning btn-xs']) !!}--}}
                                        {{--{!! Form::close() !!}--}}
                                    {{--@endcan--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                        {{--</tbody>--}}
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
    {{--<script id="details-template" type="text/x-handlebars-template">--}}
        {{--<div class="label label-info">User {{ orderid }}'s Posts</div>--}}
        {{--<table class="table details-table" id="order-{{id}}">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>Id</th>--}}
                {{--<th>Title</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
        {{--</table>--}}
    {{--</script>--}}
<script>
    // let template = Handlebars.compile($("#details-template").html());
    $('#tbl-order').DataTable({
        //'dom': 'B<"clear">lfrtip',
        'processing'  : true,
        'serverSide'   : true,
        'ajax' : "{!! route('ajax.getOrderData') !!}",
        'columns': [
            {
                "className":      'details-control',
                "orderable":      false,
                "searchable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { data: 'id', name: 'id' },
            { data: 'orderid', name: 'orderid' },
            { data: 'cetakid', name: 'cetakid' },
            { data: 'pelangganid', name: 'pelangganid' },
            { data: 'jenispaketid', name: 'jenispaketid' },
            { data: 'promoid', name: 'promoid' },
            { data: 'total_harga', name: 'total_harga' },
        ],
        'order': [[1, 'asc']],
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
        'buttons': true
    });

    // Add event listener for opening and closing details
    // $('#tbl-order tbody').on('click', 'td.details-control', function () {
    //     var tr = $(this).closest('tr');
    //     var row = table.row(tr);
    //     var tableId = 'order-' + row.data().id;
    //
    //     if (row.child.isShown()) {
    //         // This row is already open - close it
    //         row.child.hide();
    //         tr.removeClass('shown');
    //     } else {
    //         // Open this row
    //         row.child(template(row.data())).show();
    //         initTable(tableId, row.data());
    //         tr.addClass('shown');
    //         tr.next().find('td').addClass('no-padding bg-gray');
    //     }
    // });
    //
    // function initTable(tableId, data) {
    //     $('#' + tableId).DataTable({
    //         processing: true,
    //         serverSide: true,
    //         ajax: data.details_url,
    //         columns: [
    //             { data: 'id', name: 'id' },
    //             { data: 'title', name: 'title' }
    //         ]
    //     })
    // }
</script>
@endpush
