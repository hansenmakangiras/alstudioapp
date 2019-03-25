@extends('layouts.backend')

@section('extra-css')

@stop
@section('subtitle')
    | Work Order
@endsection

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Work Order
            <small>Data Pemesanan</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('work-order.index') }}"><i class="fa fa-dashboard"></i> Work Order</a></li>
            <li class="active">Tambah WO</li>
        </ol>
    </section>
@stop

@section('content')
    <!-- Main row -->
    <div class="row">
        <div class="col-xs-12">
            @include('widget.alert')
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Tambah WO</h3>
                </div>
                <!-- /.box-header -->
                {!! Form::open(array('route' => 'work-order.store','method'=>'POST','class'=>'form-horizontal','name'=>'addwo')) !!}
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-5">
                            <strong>Pilih Pelanggan</strong>
                            {!! Form::select('pelanggan',$pelanggan, null, array
                                ('placeholder' => 'Pilih Pelanggan','class' =>'form-control','id'=>'selectPelanggan')) !!}
                        </div>
                        <div class="col-md-7">
                            <!-- form start -->
                            <strong>Pilih Produk</strong>
                            {!! Form::select('produk_id',$produk, null, array
                                ('placeholder' => 'Pilih Produk','class' =>'form-control','id'=>'selectWOProduk')) !!}

                            <div class="col-sm-10" id="formload"></div>

                        </div>
                    </div>
                    <div class="box-footer text-right">
                        <button type="submit" class="btn btn-primary">Tambah WO</button>
                        <a href="{{ route('work-order.index') }}" class="btn btn-default">Kembali</a>
                    </div>
                </div>
                {!! Form::close() !!}
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
@push('js')
    <script>
        $('#selectWOProduk').change(function (e) {
            e.preventDefault();
            return $.ajax({
                url: "{!! route('loadformwo') !!}",
                data: {id: this.value},
                success: function (data) {
                    if(data != null || data != ""){
                        $('#formload').html(data);
                    }
                },
                dataType: 'html'
            });
        });
    </script>
@endpush
