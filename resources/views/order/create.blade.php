@extends('layouts.backend')

@section('extra-css')
@stop

@section('subtitle')
    | Create Order
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
            <li><a href="{{ route('order.index') }}"><i class="fa fa-dashboard"></i> Order</a></li>
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
                        <div class="col-xs-7">
                            {!! Form::select('pelanggan', $pelanggan, null,
                        ['placeholder' =>'Pilih Pelanggan','class' =>'form-control select2',
                        'id'=>'pelanggan'])
                         !!}
                        </div>
                        <div class="col-xs-1">
                            <a href="#" class="btn btn-flat bg-navy">...</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="orderid" class="col-xs-2 control-label">No. Order</label>
                        <div class="col-xs-8">
                            {!! Form::text('orderid', $orderid, array('placeholder' => 'No Order','class' =>
                        'form-control','autofocus','required','readonly','id' => 'orderid')) !!}
                            {{--{!! Form::hidden('orderid', $orderid, array('placeholder' => 'No Order','class' =>--}}
                            {{--'form-control','autofocus','required','readonly','id' => 'orderid')) !!}--}}

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
                            {!! Form::select('produk', $produk, $idproduk,
                                ['placeholder' =>'Pilih produk','class' =>'form-control select2',
                                'id'=>'produk','required'])
                            !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-xs-2 control-label">Kategori Produk</label>
                        <div class="col-xs-8">
                            {{--<div class="input-group">--}}
                            {{--<!-- /btn-group -->--}}
                            {{--<input type="text" class="form-control" readonly="readonly">--}}
                            {{--<div class="input-group-btn">--}}
                            {{--<button id="btnProduk" onclick="open_container();"--}}
                            {{--type="button"--}}
                            {{--class="btn--}}
                            {{--btn-danger"><i--}}
                            {{--class="fa fa-list"></i> Lihat--}}
                            {{--Data</button>--}}
                            {{--</div>--}}

                            {{--</div>--}}
                            {{--<select id="jeniscetak" name="jeniscetak" class="form-control--}}
                            {{--select2"></select>--}}
                            {!! Form::select('jeniscetak', [] , null,
                            ['placeholder' =>'Pilih Jenis Cetakan','class' =>'form-control select2',
                            'id'=>'jeniscetak'])
                            !!}
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
                        <div class="col-xs-8">
                            {!! Form::select('jenispaket',[] , null,array('placeholder' =>'Pilih
                            Jenis Paket','class' =>
                        'form-control select2','id'=>'jenispaket'))
                         !!}
                        </div>
                    </div>
                    {{--<div class="form-group">--}}
                    {{--<label class="col-xs-2 control-label">Size</label>--}}
                    {{--<div class="col-xs-8">--}}
                    {{--<select class="form-control" id="mysize">--}}
                    {{--<option value="small">Small</option>--}}
                    {{--<option value="standart">Standart</option>--}}
                    {{--<option value="large">Large</option>--}}
                    {{--</select>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <div id="formload"></div>

                    {{--<div class="form-group">--}}
                        {{--<label for="promo" class="col-xs-2 control-label">Promo</label>--}}
                        {{--<div class="col-xs-8">--}}
                            {{--{!! Form::select('promo',[null => 'Pilih Paket'] + $arrPromo , null,array('class' =>--}}
                        {{--'form-control select2','id'=>'promo'))--}}
                         {{--!!}--}}
                        {{--</div>--}}
                        {{--{!! Form::text('promo', null, array('placeholder' => 'Diskon Bila ada','class' =>--}}
                        {{--'form-control','id'=>'diskon')) !!}--}}
                    {{--</div>--}}

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
                            {!! Form::select('status_bayar',$statusByr,1, array
                        ('placeholder' => 'Status Bayar','class' =>'form-control select2')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm" class="col-xs-2 control-label">Status Order</label>
                        <div class="col-xs-8">
                            {!! Form::select('status_order',$statusOrder,1,array
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

                <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                    <a href="{{ route('order.index') }}" class="btn btn-default btn-flat">Kembali</a>
                </div>
                <!-- /.box-body -->
                {!! Form::close() !!}
            </div>
            <!-- /.box -->
        </div>
    </div>
    @include('widget.modal')
@endsection
@push('js')
    <script>

        $('#tglAmbil').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true
        });

        // Get Jenis Paket Select
        let jeniscetak = $('#jeniscetak');
        let jenispaket = $('#jenispaket');
        let hargajual = $("#hargajual");
        let produk = $('#produk');

        // jeniscetak.select2({
        //     placeholder: "Pilih Jenis Cetak",
        // });
        // jenispaket.select2({
        //     placeholder: "Pilih Jenis Paket",
        // });

        function loadform(id) {
            if (id === 1) {
                return $.ajax({
                    url: "{!! url('get-form') !!}",
                    success: function (data) {
                        $('#formload').append(data);
                    },
                    dataType: 'html'
                });
            } else {
                alert('Hola');
            }

        }

        /* $(document).ready(function() {
             $("#id_product").change(function(e){
                 e.preventDefault();  // stops the jump when an anchor clicked.
                 var id  = $('#id_product').val(); // anchors do have text not values.
                 var site_url = 'http://pos.dyndns-server.com:8080/demo1/harga_jual/loadform/' + id;
                 //alert(site_url);
                 $("#load_form").load(site_url);
             });
         });*/

        let request = $.ajax({
            url: "{!! route('ajax.postJenisCetak') !!}",
            method: "POST",
            data: {id: produk.val()},
        });

        request.done(function (data) {
            jeniscetak.empty();
            jenispaket.empty();
            jeniscetak.append($('<option>').text('Pilih Jenis Cetakan').attr('value', null));
            jenispaket.append($('<option>').text('Pilih Jenis Paket').attr('value', null));

            $.each(data.items, function (key, value) {
                jeniscetak.append($('<option>').text(value.jenis_cetak).attr('value', value.id));
            });
        });

        request.fail(function (jqXHR, textStatus) {
            console.log(jqXHR);
            alert("Request failed: " + textStatus);
        });
        {{--produk.on('change', function (e) {--}}
            {{--let request = $.ajax({--}}
                {{--url: "{!! route('ajax.postJenisCetak') !!}",--}}
                {{--method: "POST",--}}
                {{--data: {id: this.value},--}}
            {{--});--}}

            {{--request.done(function (data) {--}}
                {{--jeniscetak.empty();--}}
                {{--jenispaket.empty();--}}
                {{--jeniscetak.append($('<option>').text('Pilih Jenis Cetakan').attr('value', null));--}}
                {{--jenispaket.append($('<option>').text('Pilih Jenis Paket').attr('value', null));--}}

                {{--$.each(data.items, function (key, value) {--}}
                    {{--jeniscetak.append($('<option>').text(value.jenis_cetak).attr('value', value.id));--}}
                {{--});--}}
            {{--});--}}

            {{--request.fail(function (jqXHR, textStatus) {--}}
                {{--console.log(jqXHR);--}}
                {{--alert("Request failed: " + textStatus);--}}
            {{--});--}}
        {{--});--}}

        jeniscetak.change(function (e) {
            let jenisctkid = $("#jeniscetak").val();

            let request = $.ajax({
                url: "{!! route('ajax.getJenisPaket') !!}",
                method: "POST",
                data: {id: jenisctkid},

            });

            request.done(function (data) {
                jenispaket.empty();
                jenispaket.append($('<option>').text('Pilih Jenis Paket').attr('value', null));
                $.each(data, function (key, value) {

                    jenispaket.append($('<option>').text(value.nama_paket).attr('value', value.id));
                    //hargajual.val(value.harga_jual);
                })
            });

            request.fail(function (jqXHR, textStatus) {
                alert("Request failed: " + textStatus);
            });
        });

        jenispaket.change(function (e) {
            let request = $.ajax({
                url: "{!! route('ajax.getDataPaket') !!}",
                method: "POST",
                data: {id: this.value},
                //dataType: "html"
            });

            request.done(function (data) {
                loadform(1);
                hargajual.val(data.harga_jual);
            });

            request.fail(function (jqXHR, textStatus) {
                alert("Request failed: " + textStatus);
            });
        });

        $("#jumlah").change(function (dt) {
            let total = $("#totalharga");
            let harga = $("#hargajual").val();
            if (this.value !== "") {
                let totalharga = $("#jumlah").val() * harga;
                total.val(totalharga);
            } else {
                let totalharga = $("#jumlah").val(1) * harga;
                total.val(totalharga);
            }

        });

        function showForm() {
            if (jeniscetak.val() === 1) {
                $('form')
            }
        }

        function makeTable(container, data) {
            let table = $("<table/>").addClass('table table-condensed table-hover');
            $.each(data, function (rowIndex, r) {
                let row = $("<tr/>");
                $.each(r, function (colIndex, c) {
                    row.append($("<t" + (rowIndex === 0 ? "h" : "d") + "/>").text(c));
                });
                table.append(row);
            });
            return container.append(table);
        }

        function appendTableColumn(table, rowData) {
            var lastRow = $('<tr/>').appendTo(table.find('tbody:last'));
            $.each(rowData, function (colIndex, c) {
                lastRow.append($('<td/>').text(c));
            });

            return lastRow;
        }

        function getTableData(table) {
            let data = [];
            table.find('tr').each(function (rowIndex, r) {
                let cols = [];
                $(this).find('th,td').each(function (colIndex, c) {
                    cols.push(c.textContent);
                });
                data.push(cols);
            });
            return data;
        }

        function open_container() {
            let data = [["City 1", "City 2", "City 3"], //headers
                ["New York", "LA", "Seattle"],
                ["Paris", "Milan", "Rome"],
                ["Pittsburg", "Wichita", "Boise"]];
            let cityTable = makeTable($(document.getElementById('modal-bodyku')), data);
            let content = '<div class="row">\n' +
                '                <div class="col-xs-10">\n' +
                '                  <input type="text" class="form-control" placeholder="Cari data">\n' +
                '                </div>\n' +
                '                <div class="col-xs-2">\n' +
                '                  <button type="button" class="btn btn-flat btn-sm btn-primary"> Cari</button>\n' +
                '                </div>\n' +
                '              </div><br>' +
                '<table id="tblProduk" class="table table-condensed table-hover">\n' +
                '                                            <thead>\n' +
                '                                            <tr>\n' +
                '                                                <th>ID</th>\n' +
                '                                                <th>Kode</th>\n' +
                '                                                <th>Jenis Cetakan</th>\n' +
                '                                                <th>Aksi</th>\n' +
                '                                            </tr>\n' +
                '                                            </thead>\n' +
                '                                            <tbody>\n' +
                '                                            <tr>\n' +
                '                                            </tr>\n' +
                '                                            </tbody></table>';
            let title = 'Browse Data';
            let footer = '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button ' +
                'type="button" class="btn btn-primary">Save changes</button>';
            setModalBox(title, content, footer);
            $('#myModal').modal('show');
        }

        function setModalBox(title, content, footer) {
            document.getElementById('modal-bodyku').innerHTML = content;
            document.getElementById('myModalLabel').innerHTML = title;
            document.getElementById('modal-footerq').innerHTML = footer;

            $('#myModal').attr('class', 'modal fade')
                .attr('aria-labelledby', 'myModalLabel');
            $('.modal-dialog').attr('class', 'modal-dialog');
            let request = $.ajax({
                url: "{!! route('ajax.postJenisCetak') !!}",
                method: "POST",
                data: {id: produk.val()},
            });

            request.done(function (data) {

                $.each(data.items, function (key, value) {
                    console.log(value);
                    let html =
                        '<td>' + value.id + '</td>' +
                        '<td>' + value.kode_jenis + '</td>' +
                        '<td>' + value.jenis_cetak + '</td>' +
                        '<td><button type="button" class="btn btn-flat btn-primary"><i class="fa fa-check-circle"></i> ' +
                        'Pilih</button></td>'
                    ;

                    $('#tblProduk > tbody > tr').html(html);
                });

            });

            request.fail(function (jqXHR, textStatus) {
                console.log(jqXHR);
                alert("Request failed: " + jqXHR.responseJSON.msg);
            });

        }

        $('#tambahKeTabel').click(function () {
            let a = jeniscetak.val();
            let b = jenispaket.val();
            let c = $('#panjang').val();
            let d = $('#lebar').val();
            let e = $('#totalharga').val();
            let f = $('#orderid').val();
            let html =
                '<tr>' +
                '<td>' + f + '</td>' +
                '<td>' + a + '</td>' +
                '<td>' + b + '</td>' +
                '<td>Ukuran panjang = ' + c + ' Meter' + ' dan lebar = ' + d + ' Meter' + '</td>' +
                '<td>' + e + '</td>' +
                '<td><button type="button" class="btn btn-flat btn-primary"><i class="fa fa-check-circle"></i> ' +
                'Pilih</button></td>' +
                '</tr>'
            ;

            $('#tblDetail > tbody').append(html);
        })
    </script>
@endpush
