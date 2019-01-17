<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title"><strong><i class="fa fa-shopping-cart"></i> Detail Order</strong></h3>
    </div>
    <div class="box-body">
        {{--{!! Form::open(array('route' => 'order.store','method'=>'POST','class' =>--}}
        {{--'form-horizontal','name' =>'frmDetail','id'=>'frmDetail')) !!}--}}
        <div class="col-sm-10">
            <div class="box box-default">
                <div class="box-header">
                    <i class="fa fa-list"></i> Detail Form
                </div>
                <div class="box-body">

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
                            {!! Form::select('satuan',$satuan , null,array('placeholder' =>'Pilih
                            Satuan','class' =>
                        'form-control select2','id'=>'satuan'))
                         !!}
                            {{--{!! Form::text('satuan', null, array('placeholder' => 'Satuan','class' =>--}}
                            {{--'form-control','id'=>'satuan')) !!}--}}
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
                    <button id="tambahKeTabel" type="button" class="btn btn-primary btn-flat">Tambah
                        Ke
                        Tabel</button>
                    <button id="btn-reset" type="reset" class="btn btn-default
                                        btn-flat">Reset</button>
                    {{--<button onClick="open_container();" type="button" class="btn btn-default--}}
                    {{--btn-flat">Show Modal</button>--}}
                </div>
            </div>
        </div>
        {{--{!! Form::close() !!}--}}
        <div class="col-sm-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-list"></i> Tabel Order Detail </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table id="tblDetail" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            {{--<th>#</th>--}}
                            <th>No. Order</th>
                            <th>Jenis Cetakan</th>
                            <th>Jenis Paket</th>
                            <th>Keterangan</th>
                            <th>Subtotal</th>
                            {{--<th>Status Pesanan</th>--}}
                            <th>Operation</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</div>
