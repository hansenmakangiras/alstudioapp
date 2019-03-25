@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | List Order
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Work Order
            <small>Work Order</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Pemesanan</li>
        </ol>
    </section>
@stop

@section('content')
    @include('widget.alert', ['errors' => $errors])
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="{{ route('work-order.create') }}" class="btn btn-success btn-sm"><i class="fa
                        fa-plus-circle"></i> Add WO</a>
                </div>

                <div class="box-body">
                    <table id="tbl-order" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>No. Order</th>
                            <th>Pelanggan</th>
                            <th>Total Harga</th>
                            {{--<th>Status Bayar</th>--}}
                            <th>Status Pesanan</th>
                            <th>Operation</th>
                        </tr>
                        </thead>
                        {{--<tbody>--}}
                        {{--@foreach($workOrder as $key => $val)--}}
                            {{--<tr>--}}
                                {{--<td>{{ ++$i }}</td>--}}
                                {{--<td>{{ $val->orderid }}</td>--}}
                                {{--<td>{{ \App\Models\JenisCetakan::getJenisCetakName((int)--}}
                            {{--$val->cetakid) }}</td>--}}
                                {{--<td>{{ \App\Models\JenisPaket::getDataPaket($val->jenispaketid)->nama_paket }}</td>--}}
                                {{--<td>{{ \App\Models\Pelanggan::getPelangganName($val->pelangganid) }}</td>--}}
                                {{--<td>{{ number_format($val->total_harga) }}</td>--}}
                                {{--<td><label class="label bg-fuchsia-active">{{ \App\Models\StatusBayar::getStatusName($val->status_bayar) }}</label></td>--}}
                                {{--<td><label class="label bg-blue-active">{{ \App\Models\StatusOrder::getStatusOrderName--}}
                                {{--($val->status_order)--}}
                                {{--}}</label></td>--}}
                                {{--<td>--}}
                                    {{--@can("viewOrder")--}}
                                    {{--<a class="btn btn-success btn-xs" href="{{ route('work-order.show',$val->id)--}}
                                    {{--}}">View</a>--}}
                                    {{--@endcan--}}
{{--                                    @can('editOrder')--}}
                                    {{--<a href="{{ route('work-order.edit',$val->id) }}" class="btn btn-primary--}}
                                {{--btn-xs">Edit</a>--}}
                                    {{--@endcan--}}
{{--                                    @can('deleteOrder')--}}
                                    {{--{!! Form::open(['method' => 'DELETE','route' => ['work-order.destroy', $val->id],--}}
                                    {{--'style'=>'display:inline']) !!}--}}
                                    {{--{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs']) !!}--}}
                                    {{--{!! Form::close() !!}--}}
                                    {{--@endcan--}}
{{--                                    @can('editOrder')--}}
                                        {{--{!! Form::open(['method' => 'POST','route' => ['work-order.proses', $val->id],--}}
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
                    {!! $workOrder->links() !!}
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
            // 'dom': 'B<"clear">lfrtip',
            'processing'  : true,
            'serverSide'   : true,
            'ajax' : "{!! route('ajax.getWorkOrderData') !!}",
            'columns': [
                { data: 'id', name: 'id' },
                { data: 'orderid', name: 'orderid' },
                { data: 'pelangganid', name: 'pelangganid' },
                { data: 'total_harga', name: 'total_harga' },
                // { data: 'status_bayar', name: 'status_bayar' },
                { data: 'status_order', name: 'status_order' },
                { data: 'action', name: 'action', orderable: false, searchable: false},
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
    </script>
@endpush
