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
            Create Order
            <small>Data Pemesanan</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('order.index') }}"><i class="fa fa-dashboard"></i> Oorder</a></li>
            <li class="active">Create</li>
        </ol>
    </section>
@stop

@section('content')
    <!-- Main row -->
    <div class="row">
        {{--@include('widget.alert')--}}
        {{--<div class="col-xs-6">--}}
            {{--<div class="box">--}}
                {{--<div class="box-header">--}}
                    {{--<h3 class="box-title">Data Pelanggan</h3>--}}
                {{--</div>--}}
                {{--<!-- /.box-header -->--}}
                {{--<!-- form start -->--}}
                {{--{!! Form::open(array('route' => 'pelanggan.store','method'=>'POST')) !!}--}}
                {{--<div class="box-body">--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="name">Nama Pelanggan</label>--}}
                        {{--{!! Form::text('namapel', null, array('placeholder' => 'Nama Pelanggan','class' =>--}}
                        {{--'form-control','autofocus')) !!}--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="email">No Telp</label>--}}
                        {{--{!! Form::text('notelp', null, array('placeholder' => 'No Telepon / HP','class' =>--}}
                        {{--'form-control')) !!}--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="password">Alamat</label>--}}
                        {{--{!! Form::text('alamat', null,array('placeholder' => 'Alamat Pelanggan','class' => 'form-control'))--}}
                         {{--!!}--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="confirm">Kode Promo</label>--}}
                        {{--{!! Form::select('promoid',$arrPromo, null, array--}}
                        {{--('placeholder' => 'Pilih Kode Promo','class' =>'form-control')) !!}--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="confirm">Jenis Pelanggan</label>--}}
                        {{--{!! Form::select('jenis_pelanggan',$arrJenisPelanggan, null, array--}}
                        {{--('placeholder' => 'Pilih Tipe Pelanggan','class' =>'form-control')) !!}--}}
                    {{--</div>--}}

                    {{--<div class="box-footer text-center">--}}
                        {{--<button type="submit" class="btn btn-primary btn-flat">Submit</button>--}}
                        {{--<a href="{{ route('pelanggan.index') }}" class="btn btn-default btn-flat">Kembali</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--{!! Form::close() !!}--}}
            {{--<!-- /.box-body -->--}}
            {{--</div>--}}
            {{--<!-- /.box -->--}}
        {{--</div>--}}
        <div class="col-xs-10">
            @include('widget.alert')
            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">Buat Order</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(array('route' => 'order.store','method'=>'POST')) !!}
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="orderid">No. Order</label>
                                {{--{!! Form::text('orderid', $orderid2, array('placeholder' => 'No Order','class' =>--}}
                                {{--'form-control','autofocus','required','readonly')) !!}--}}
                                {!! Form::select('orderid', $arrOrder, null,
                                ['placeholder' =>'Pilih orderid','class' =>'form-control select2',
                                'id'=>'orderid','autofocus','required'])
                                 !!}

                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="email">Pelanggan</label>
                                {!! Form::select('pelanggan', $pelanggan, null,
                                ['placeholder' =>'Pilih Pelanggan','class' =>'form-control select2',
                                'id'=>'pelanggan'])
                                 !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="email">Jenis Cetakan</label>
                                {!! Form::select('jeniscetak', $jeniscetak, null,
                                ['placeholder' =>'Pilih Jenis cetakan','class' =>'form-control select2',
                                'id'=>'jeniscetak'])
                                 !!}
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="password">Jenis Paket</label>
                                {!! Form::select('jenispaket',[null => 'Pilih Paket'] , null,array('class' =>
                                'form-control select2','id'=>'jenispaket'))
                                 !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="panjang">Panjang</label>
                                {!! Form::text('panjang', null, array('placeholder' => 'Ukuran Panjang','class' =>
                                'form-control','id'=>'panjang')) !!}
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="lebar">Lebar</label>
                                {!! Form::text('lebar', null, array('placeholder' => 'Ukuran Lebar','class' =>
                                'form-control','id'=>'lebar')) !!}
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="name">Satuan</label>
                                {!! Form::text('satuan', null, array('placeholder' => 'Satuan','class' =>
                                'form-control','id'=>'satuan')) !!}
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="name">Jumlah</label>
                                {!! Form::text('qty', null, array('placeholder' => 'Jumlah','class' =>
                                'form-control','id'=>'jumlah')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="promo">Promo</label>
                                {!! Form::select('promo',[null => 'Pilih Paket'] + $arrPromo , null,array('class' =>
                                'form-control select2','id'=>'promo'))
                                 !!}
                                {{--{!! Form::text('promo', null, array('placeholder' => 'Diskon Bila ada','class' =>--}}
                                {{--'form-control','id'=>'diskon')) !!}--}}
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="name">Harga Jual</label>
                                {!! Form::text('hargajual', null, array('placeholder' => 'Harga Jual','class' =>
                                'form-control','readonly','id'=>'hargajual')) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="name">Total Harga</label>
                                {!! Form::text('total_harga', null, array('placeholder' => 'Total Harga','class' =>
                                'form-control','id'=>'totalharga','readonly')) !!}
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="confirm">Tanggal Ambil</label>
                                {!! Form::text('tgl_ambil',null, array('placeholder' => 'Tanggal Pengambilan','class' =>
                                'form-control date','id'=>'tglAmbil')) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="confirm">Status Bayar</label>
                                {!! Form::select('status_bayar',$statusByr,null, array
                                ('placeholder' => 'Status Bayar','class' =>'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="confirm">Status Order</label>
                                {!! Form::select('status_order',$statusOrder,
                                null,
                                array
                                ('placeholder' => 'Status Order','class' =>'form-control')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm">Keterangan</label>
                        {!! Form::textarea('keterangan', null, ['class' => 'form-control',
                        'placeholder'=>'Keterangan']) !!}
                    </div>

                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('order.index') }}" class="btn btn-default">Kembali</a>
                    </div>
                </div>
                {!! Form::close() !!}
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    {{--<div class="row">--}}
        {{--<div class="col-xs-12">--}}
            {{--<div class="box box-danger">--}}
                {{--<div class="box-header">--}}
                    {{--<h3 class="box-title">Detail Order</h3>--}}
                {{--</div>--}}
                {{--<div class="box-body">--}}
                    {{--<table class="table table-condensed table-bordered table-hover">--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<td>s</td>--}}
                            {{--<td>s4</td>--}}
                            {{--<td>s4]6</td>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}
                        {{--<tr>--}}
                            {{--<td>sdf</td>--}}
                            {{--<td>sd6</td>--}}
                            {{--<td>sd6</td>--}}
                        {{--</tr>--}}
                        {{--</tbody>--}}
                    {{--</table>--}}
                {{--</div>--}}
                {{--<div class="box-footer">--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- /.row (main row) -->
@endsection
@push('js')
    <script>
        //Date picker
        $('#tglAmbil').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true
        });
        // $('#btsTglAmbil').datepicker({
        //     autoclose: true,
        //     format: "yyyy-mm-dd",
        // });

        // Get Jenis Paket Select
        let jeniscetak = $('#jeniscetak');
        let jenispaket = $('#jenispaket');
        let hargajual = $("#hargajual");

        jeniscetak.change(function (data) {
            let jenisctkid = $( "#jeniscetak" ).val();

            let request = $.ajax({
                url: "{!! route('ajax.getJenisPaket') !!}",
                method: "POST",
                data: { id : jenisctkid },

            });

            request.done(function( data ) {
                jenispaket.empty();
                hargajual.val("");
                // jenispaket.append($('<option>').text("Select"));
                $.each(data, function (key,value) {

                    jenispaket.append($('<option>').text(value.nama_paket).attr('value', value.id));
                    hargajual.val(value.harga_jual);
                })
            });

            request.fail(function( jqXHR, textStatus ) {
                alert( "Request failed: " + textStatus );
            });
        });

        jenispaket.change(function (dt) {
            let request = $.ajax({
                url: "{!! route('ajax.getDataPaket') !!}",
                method: "POST",
                data: { id : this.value },
                //dataType: "html"
            });

            request.done(function( data ) {
                console.log(data.harga_jual);
                hargajual.val(data.harga_jual);
            });

            request.fail(function( jqXHR, textStatus ) {
                alert( "Request failed: " + textStatus );
            });
        });
        $("#jumlah").change(function (dt) {
            let total = $("#totalharga");
            let harga = $("#hargajual").val();
            if(this.value !== ""){
                let totalharga = $("#jumlah").val() * harga;
                total.val(totalharga);
            }else{
                let totalharga = $("#jumlah").val(1) * harga;
                total.val(totalharga);
            }

        });

    </script>
@endpush
