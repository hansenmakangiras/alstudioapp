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
            Harga Jual
            <small>Data Master</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('hjp.index') }}"><i class="fa fa-dashboard"></i> HJP</a></li>
            <li class="active">Tambah HJP</li>
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
                    <h3 class="box-title">Tambah HJP</h3>
                </div>
                <!-- /.box-header -->
                {!! Form::open(array('route' => 'hjp.store','method'=>'POST','class'=>'form-horizontal','name'=>'inputwo')) !!}
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-7">
                            <!-- form start -->
                            <strong>Pilih Produk</strong>
                            {!! Form::select('produk_id',$produk, null, array
                                ('placeholder' => 'Pilih Produk','class' =>'form-control','id'=>'selectProduk')) !!}

                            <div class="col-sm-10" id="formload"></div>


                        </div>
                    </div>
                    <div class="box-footer text-right">
                        <button type="submit" class="btn btn-primary">Tambah Harga</button>
                        <a href="{{ route('pelanggan.index') }}" class="btn btn-default">Kembali</a>
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
        $('#selectProduk').change(function (e) {
            e.preventDefault();
            return $.ajax({
                url: "{!! route('loadform') !!}",
                data: {id: this.value},
                success: function (data) {
                    if(data != null | data != ""){
                        $('#formload').html(data);
                    }
                },
                dataType: 'html'
            });
        });

        // $('#btnCekHarga').click(function (e) {
        //     e.preventDefault();
        //     alert('holaa harga');
        // })
    </script>
@endpush
