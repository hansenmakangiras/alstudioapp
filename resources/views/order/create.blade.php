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
            <i class="fa fa-shopping-cart"></i>
            Create Order
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
    <p><a title="Return" href="{{ route('order.index') }}"><i class="fa fa-chevron-circle-left "></i>
            &nbsp; Kembali ke list order</a></p>
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
        <div class="col-xs-12">
            @include('widget.alert')
            <div class="box box-danger">
                {{--<div class="box-header">--}}
                    {{--<h3 class="box-title">Buat Order</h3>--}}
                {{--</div>--}}
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(array('route' => 'order.store','method'=>'POST','class' => 'form-horizontal')) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="email" class="col-xs-2 control-label">Pelanggan</label>
                        <div class="col-xs-8">
                            {!! Form::select('pelanggan', $pelanggan, null,
                        ['placeholder' =>'Pilih Pelanggan','class' =>'form-control select2',
                        'id'=>'pelanggan'])
                         !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="orderid" class="col-xs-2 control-label">No. Order</label>
                        {{--{!! Form::text('orderid', $orderid2, array('placeholder' => 'No Order','class' =>--}}
                        {{--'form-control','autofocus','required','readonly')) !!}--}}
                        <div class="col-xs-8">
                            {!! Form::text('orderid', $orderid, array('placeholder' => 'No Order','class' =>
                            'form-control','autofocus','required','readonly')) !!}

                            {{--{!! Form::select('orderid', $arrOrder, null,--}}
                        {{--['placeholder' =>'Pilih orderid','class' =>'form-control select2',--}}
                        {{--'id'=>'orderid','autofocus','required'])--}}
                         {{--!!}--}}
                        </div>
                    </div>
                    {{--@dd($produk->get)--}}
                    <div class="form-group">
                        <label for="produk" class="col-xs-2 control-label">Produk</label>
                        {{--{!! Form::text('produk', [], array('placeholder' => 'No Order','class' =>--}}
                        {{--'form-control','autofocus','required','readonly')) !!}--}}
                        <div class="col-xs-8">
                            {{--<select id="produk" class="form-control select2"></select>--}}
                            {!! Form::select('produk', $produk, null,
                        ['placeholder' =>'Pilih produk','class' =>'form-control select2',
                        'id'=>'produk','required'])
                         !!}
                        </div>
                    </div>

                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title"><strong><i class="fa fa-shopping-cart"></i> Detail Order</strong></h3>
                        </div>
                        <div class="box-body">
                            <div class="col-sm-10">
                                <div class="box box-default">
                                    <div class="box-header">
                                        <i class="fa fa-list"></i> Detail Form
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="email" class="col-xs-2 control-label">Jenis Cetakan</label>
                                            <div class="col-xs-10">
                                                <select id="jeniscetak" class="form-control select2"></select>
                                                {{--{!! Form::select('jeniscetak', $jeniscetak, null,--}}
                                                {{--['placeholder' =>'Pilih Jenis cetakan','class' =>'form-control select2',--}}
                                                {{--'id'=>'jeniscetak'])--}}
                                                {{--!!}--}}
                                                {{--<div class="input-group input-group-sm">--}}
                                                    {{--{!! Form::text('jeniscetak', null, array('placeholder' => 'Ukuran--}}
                                                    {{--Panjang','class' =>'form-control','id'=>'jeniscetak',--}}
                                                    {{--'readonly'=>true))--}}
                                                     {{--!!}--}}
                                                    {{--<span class="input-group-btn">--}}
                                                      {{--<button type="button" class="btn btn-primary--}}
                                                      {{--btn-flat">Browse Data</button>--}}
                                                    {{--</span>--}}
                                                {{--</div>--}}

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-xs-2 control-label">Jenis Paket</label>
                                            <div class="col-xs-10">
                                                {!! Form::select('jenispaket',[null => 'Pilih Paket'] , null,array('class' =>
                                            'form-control select2','id'=>'jenispaket'))
                                             !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="panjang" class="col-xs-2 control-label">Panjang</label>
                                            <div class="col-xs-10">
                                                {!! Form::text('panjang', null, array('placeholder' => 'Ukuran Panjang','class' =>
                                            'form-control','id'=>'panjang')) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="lebar" class="col-xs-2 control-label">Lebar</label>
                                            <div class="col-xs-10">
                                                {!! Form::text('lebar', null, array('placeholder' => 'Ukuran Lebar','class' =>
                                            'form-control','id'=>'lebar')) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-xs-2 control-label">Satuan</label>
                                            <div class="col-xs-10">
                                                {!! Form::text('satuan', null, array('placeholder' => 'Satuan','class' =>
                                            'form-control','id'=>'satuan')) !!}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="name" class="col-xs-2 control-label">Jumlah</label>
                                            <div class="col-xs-10">
                                                {!! Form::text('qty', null, array('placeholder' => 'Jumlah','class' =>
                                            'form-control','id'=>'jumlah')) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-xs-2 control-label">Harga Jual</label>
                                            <div class="col-xs-10">
                                                {!! Form::text('hargajual', null, array('placeholder' => 'Harga Jual','class' =>
                                            'form-control','readonly','id'=>'hargajual')) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm" class="col-xs-2 control-label">Tanggal Ambil</label>
                                            <div class="col-xs-10">
                                                {!! Form::text('tgl_ambil',null, array('placeholder' => 'Tanggal Pengambilan','class' =>
                                            'form-control date','id'=>'tglAmbil')) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer text-center">
                                        <button type="submit" class="btn btn-primary btn-flat">Tambah Ke Tabel</button>
                                        <a href="{{ route('order.index') }}" class="btn btn-default btn-flat">Reset</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-12">
                                <div class="box box-success">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"><i class="fa fa-list"></i> Tabel Order Detail </h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                        <table class="table table-condensed table-hover">
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
                                            <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            </tbody></table>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="promo" class="col-xs-2 control-label">Promo</label>
                        <div class="col-xs-8">
                            {!! Form::select('promo',[null => 'Pilih Paket'] + $arrPromo , null,array('class' =>
                        'form-control select2','id'=>'promo'))
                         !!}
                        </div>
                        {{--{!! Form::text('promo', null, array('placeholder' => 'Diskon Bila ada','class' =>--}}
                        {{--'form-control','id'=>'diskon')) !!}--}}
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-xs-2 control-label">Total Harga</label>
                        <div class="col-xs-8">
                            {!! Form::text('total_harga', null, array('placeholder' => 'Total Harga','class' =>
                        'form-control','id'=>'totalharga','readonly')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm" class="col-xs-2 control-label">Status Bayar</label>
                        <div class="col-xs-8">
                            {!! Form::select('status_bayar',$statusByr,null, array
                        ('placeholder' => 'Status Bayar','class' =>'form-control select2')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm" class="col-xs-2 control-label">Status Order</label>
                        <div class="col-xs-8">
                            {!! Form::select('status_order',$statusOrder,null,array
                            ('placeholder' => 'Status Order','class' =>'form-control select2')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm" class="col-xs-2 control-label">Keterangan</label>
                        <div class="col-xs-8">
                            {!! Form::text('keterangan',null, ['class' => 'form-control',
                        'placeholder'=>'Keterangan']) !!}
                            {{--{!! Form::textarea('keterangan', null, ['class' => 'form-control',--}}
                            {{--'placeholder'=>'Keterangan']) !!}--}}
                        </div>
                    </div>
                </div>

                {!! Form::close() !!}

                <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                    <a href="{{ route('order.index') }}" class="btn btn-default btn-flat">Kembali</a>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
@push('js')
    <script>
        //Date picker
        $('#tglAmbil').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true
        });

        // Get Jenis Paket Select
        let jeniscetak = $('#jeniscetak');
        let jenispaket = $('#jenispaket');
        let hargajual = $("#hargajual");
        let produk = $('#produk');

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

        produk.change(function (dt) {
            let request = $.ajax({
                url: "{!! route('ajax.postJenisCetak') !!}",
                method: "POST",
                data: { id : this.value },
                //dataType: "html"
            });

            request.done(function( data ) {
                // console.log(data.items);
                let cJenis = $.map(data.items, function (obj) {
                    obj.id = obj.id || obj.id; // replace id_kab with your identifier
                    obj.text = obj.text || obj.jenis_cetak; // replace nama with your identifier
                    return obj;
                });

                jeniscetak.select2({
                    placeholder: "Pilih Jenis Cetak",
                    data : cJenis,
                }).trigger('change');
                jeniscetak.val(null).trigger('change');
            });

            request.fail(function( jqXHR, textStatus ) {
                alert( "Request failed: " + textStatus );
            });
        });

    </script>
@endpush
